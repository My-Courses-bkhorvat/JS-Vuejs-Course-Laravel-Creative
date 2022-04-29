<template>
    <div>
        <CreateComponent></CreateComponent>
        <IndexComponent ref="index"></IndexComponent>
        <div>
            <!--            <table class="table">-->
            <!--                <thead>-->
            <!--                <tr>-->
            <!--                    <th scope="col">#</th>-->
            <!--                    <th scope="col">Name</th>-->
            <!--                    <th scope="col">Age</th>-->
            <!--                    <th scope="col">Job</th>-->
            <!--                </tr>-->
            <!--                </thead>-->
            <!--                <tbody>-->
            <!--                <tr v-for="person in persons">-->
            <!--                    <th scope="row">{{ person.id }}</th>-->
            <!--                    <td>{{ person.name }}</td>-->
            <!--                    <td>{{ person.age }}</td>-->
            <!--                    <td>@{{ person.job }}</td>-->
            <!--                </tr>-->
            <!--                </tbody>-->
            <!--            </table>-->
        </div>

    </div>
</template>

<script>
import CreateComponent from "./CreateComponent";
import IndexComponent from "./IndexComponent";

export default {
    name: "PostComponent",
    components: {
        CreateComponent,
        IndexComponent,
    },
    mounted() {
        console.log(this.$refs.index.indexLog())

    },
    methods: {
        parentLog(){
            console.log('This is parent components')
        }
    },
}
</script>

<style scoped>

</style>
