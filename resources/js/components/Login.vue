<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Login</div>
                    <div class="card-body">
                        <form @submit.prevent="login()" class="mb-3">
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-lable text-md-right">Email Address</label>
                                <div class="col-md-6">
                                    <input class="form-control" v-model="data.email" placeholder="Username"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                                <div class="col-md-6">
                                    <input type="password" v-model="data.password" placeholder="Password">
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button class="btn btn-default" type="submit">Login</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data: function(){
        return {
            data: {
                email: '',
                password: ''
            }
        }
    },
    

    methods:{

        login() {
            axios.post('/login', this.data)
            .then(res => {
                window.location.replace('home');
            })
            .catch(function (error) {
                console.log(error);
            })
        }
    }
}
</script>

