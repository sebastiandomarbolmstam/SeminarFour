<template>
    <div>
        <h2>Comments</h2>
        <h3>Login to add your own comment!</h3>

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
        </div>
    </div>
</template>

<script>
export default {
    props: ['recipe'],
    data() {
        return{
            comments: [],
            comment: {
                id: '',
                uid: '',
                message: '',
                recipe: this.recipe
            },
            comment_id: '',
            pagination: {},
            edit: false
        }
    },

    created() {
        this.fetchComments(this.recipe);
    },

    methods: {

        fetchComments(recipe) {
            let vm = this;
            fetch(`api/comments/${recipe}`)
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
        }
    }
}
</script>
