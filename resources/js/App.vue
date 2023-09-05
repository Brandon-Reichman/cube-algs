<template>
    <div class="vue-stuff">
        <p>Click me to add</p>
        <button @click="count++">{{ count }}</button>
    </div>
</template>

<script>
    export default {
        name: "App",
        data() {
            return {
                count: 0,
            }
        }
    }
</script>

<style scoped>
.vue-stuff{
    text-align: center;
    margin:auto;
}
</style>
