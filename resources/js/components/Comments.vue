<template>
    <div>
        <h2>Comments</h2>
        <form @submit.prevent="addComment()" class="mb-3">
            <div class="form-group">
                <textarea type="text" class="form-control" placeholder="Enter message.." v-model="comment.message"></textarea>
            </div>
            <button class="btn btn-light btn-block" type="submit">Save</button>
        </form>
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li v-bind:class="[{disabled: !pagination.prev_page_url}]" class="page-item">
                    <a class="page-link" href="#" @click="fetchComments(pagination.prev_page_url)">
                        Previous
                    </a>
                </li>
                <li class="page-item disabled">
                    <a class="page-link text-dark" href="#">
                        Page {{pagination.current_page}} of {{pagination.last_page}}
                    </a>
                </li>
                <li v-bind:class="[{disabled: !pagination.next_page_url}]" class="page-item">
                    <a class="page-link" href="#" @click="fetchComments(pagination.next_page_url)">
                        Next
                    </a>
                </li>
            </ul>
        </nav>
        <div class="card card-body mb-2" v-for="comment in comments" v-bind:key="comment.id">
            <h3>{{ comment.uid }}</h3>
            <p>{{ comment.message }}</p>
            <hr>
            <button @click="deleteComment(comment.id)" class="btn btn-danger">Delete</button>
            <button @click="editComment(comment)" class="btn btn-warning mb-2">Edit</button>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return{
            comments: [],
            comment: {
                id: '',
                uid: '',
                message: '',
                recipe: ''
            },
            comment_id: '',
            pagination: {},
            edit: false
        }
    },
    
    created() {
        this.fetchComments();
    },

    methods: {
        
        fetchComments(page_url) {
            console.log('hej');
            let vm = this;
            page_url = page_url || 'api/comments'
            fetch(page_url)
                .then(res => res.json())
                .then(res => {
                    this.comments = res.data;
                    vm.makePagination(res.meta, res.links);
                })
                .catch(err => console.log(err));
        },

        makePagination(meta, links) {
            let pagination = {
                current_page: meta.current_page,
                next_page_url: links.next,
                prev_page_url: links.prev,
                last_page: meta.last_page
            }

            this.pagination = pagination;
        },

        deleteComment(id) {
            if(confirm('Are you sure you want to delete the comment?')) {
                fetch(`api/comment/${id}`, {
                    method: 'delete'
                })
                .then(res => res.json())
                .then(data => {
                    alert('Comment has been removed!');
                    this.fetchComments();
                })
                .catch(err => console.log(err));
            }
        },

        addComment() {
            if(this.edit === false) {
                fetch('api/comment', {
                    method: 'post',
                    body: JSON.stringify(this.comment),
                    headers: {
                        'content-type':'application/json'
                    }
                })
                .then(res => res.json())
                .then(data => {
                    this.comment.message = '';
                    this.comment.recipe = '';
                    alert('Comment added!');
                    this.fetchComments();
                })
                .catch(err => console.log(err));
            } else {
                fetch('api/comment', {
                    method: 'put',
                    body: JSON.stringify(this.comment),
                    headers: {
                        'content-type':'application/json'
                    }
                })
                .then(res => res.json())
                .then(data => {
                    this.comment.message = '';
                    this.comment.recipe = '';
                    alert('Comment updated!');
                    this.edit = false;
                    this.fetchComments();
                })
            }
        },

        editComment(comment) {
            this.edit = true;
            this.comment.id = comment.id;
            this.comment.comment_id = comment.id;
            this.comment.uid = comment.uid;
            this.comment.recipe = comment.recipe;
            this.comment.message = comment.message;
        }
    }
}
</script>

