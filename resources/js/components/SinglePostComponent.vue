<template>
    <div>
        Single Post
        Name: {{ name1 }}
        <button @click="sayHallo">Hello</button>
        <button @click="sayHi">Hi</button>

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
    methods: {
        sayHallo() {
            console.log('Hello')
        },
        sayHi() {
            console.log('Hi')
        },
    }
}
</script>

<style scoped>

</style>
