<template>
    <div id="my-text">
        This is my text
    </div>
</template>

<script>
    export default {
        data() {
            return {
                message: 'Hello World'
            }
        },
        created() {
            console.log(this.message)

            console.log(document.getElementById('my-text').innerHTML)
        }
    }
</script>

<style lang="scss" scoped>
</style>