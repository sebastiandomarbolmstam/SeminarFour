<template>
    <button @click="logout" class="btn btn-default">Logout</button>
</template>

<script>
export default {
    methods:{

        logout() {
            axios.post('/logout')
            .then(res => {
                window.location.replace('/');
            })
        }
    }
}
</script>
