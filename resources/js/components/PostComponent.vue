<template>
    <div class="w-25">
        <CreateComponent></CreateComponent>
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
import SinglePostComponent from "./SinglePostComponent";
import CreateComponent from "./CreateComponent";

export default {
    name: "PostComponent",
    components: {
        SinglePostComponent,
        CreateComponent,
    },
}
</script>

<style scoped>

</style>
