<template>
    <div class="w-25">
        <div>
            <div class="mb-3"><input type="text" v-model="name" placeholder="name" class="form-control"></div>
            <div class="mb-3"><input type="number" v-model="age" placeholder="age" class="form-control"></div>
            <div class="mb-3"><input type="text" v-model="job" placeholder="job" class="form-control"></div>
            <div class="mb-3"><input type="submit" value="Update" class="btn btn-primary"></div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Edit",
    data() {
        return {
            name: null,
            age: null,
            job: null,
        }
    },
    mounted() {
        this.getPerson()
    },
    methods: {
        getPerson() {
            axios.get('/api/people/' + this.$route.params.id)
                .then(res => {
                    this.name = res.data.name
                    this.age = res.data.age
                    this.job = res.data.job
                })
        }
    }
}
</script>

<style scoped>

</style>
