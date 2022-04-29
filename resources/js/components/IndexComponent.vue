<template>
    <div>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">Job</th>
                <th scope="col">Delete</th>
            </tr>
            </thead>
            <tbody>
            <template v-for="person in people">
                <tr :class="isEdit(person.id) ? 'd-none': ''">
                    <th scope="row">{{person.id}}</th>
                    <td>{{person.name}}</td>
                    <td>{{person.age}}</td>
                    <td>{{person.job}}</td>
                    <td><a href="#" @click.prevent="changeEditPersonId(person.id, person.name, person.age, person.job)" class="btn btn-success">Edit</a></td>
                    <td><a href="#" @click.prevent="deletePerson(person.id)" class="btn btn-danger">Delete</a></td>
                </tr>
                <edit-component :person="person" :ref="`edit_${person.id}`"></edit-component>
            </template>
            </tbody>
        </table>
        <SomeComponent :obj="obj"></SomeComponent>
    </div>
</template>

<script>
import SomeComponent from "./SomeComponent";
import EditComponent from "./EditComponent";

export default {
    name: "IndexComponent",
    components:{
        SomeComponent,
        EditComponent
    },
    data() {
        return {
            people: null,
            editePersonId: null,
            name: null,
            age: null,
            job: null,
            obj: {
                color: 'yellow',
                number: 50,
                isPublished: false
            }

        }
    },
    mounted() {
        this.getPeople()
        this.$parent.parentLog()
    },
    methods: {
        getPeople() {
            axios.get('/api/people')
                .then(res => {
                    this.people = res.data
                })
        },
        updatePerson(id) {
            this.editePersonId = null
            axios.patch(`/api/people/${id}`, {name: this.name, age: this.age, job: this.job})
                .then(res => {
                    this.getPeople()
                })
        },
        deletePerson(id) {
            axios.delete(`/api/people/${id}`)
                .then(res => {
                    this.getPeople()
                })
        },
        changeEditPersonId(id, name, age, job) {
            this.editePersonId = id
            let editName = `edit_${id}`
            let fullEditeName = this.$refs[editName][0];
            fullEditeName.name = name
            fullEditeName.age = age
            fullEditeName.job = job
        },
        isEdit(id) {
            return this.editePersonId === id
        },
        indexLog() {
            console.log('this is index componetn');
        },

    }
}
</script>

<style scoped>

</style>
