<template>
    <div>
    </div>
</template>

<script>

export default {
    name: "SameComponent",

    data() {
        return {
        }
    },
    mounted() {
        this.$parent.$parent.parentLog()
    },
    methods: {

    }
}
</script>

<style scoped>

</style>
