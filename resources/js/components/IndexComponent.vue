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
                <ShowComponent :person="person" :ref="`show_${person.id}`"></ShowComponent>
                <EditComponent :person="person" :ref="`edit_${person.id}`"></EditComponent>
            </template>
            </tbody>
        </table>
        <SomeComponent :obj="obj"></SomeComponent>
    </div>
</template>

<script>
import SomeComponent from "./SomeComponent";
import EditComponent from "./EditComponent";
import ShowComponent from "./ShowComponent";

export default {
    name: "IndexComponent",
    components: {
        SomeComponent,
        EditComponent,
        ShowComponent
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
