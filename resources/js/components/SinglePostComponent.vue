<template>
    <div>
        Single Post
        Name: {{ name1 }}
    </div>
</template>

<script>

export default {
    name: "SinglePostComponent",

    data() {
        return {
            name1: 'Vasia',
            age: 20,
            boolean: false,
            someNull: null,
            arr: [
                [

                ]
            ],
            obj: {
                personName: 'Ivan'
            }
        }
    },
}
</script>

<style scoped>

</style>
