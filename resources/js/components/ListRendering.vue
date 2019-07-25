<template>
    <div class="list-rendering">
        <ul>
            <li v-for="(value, key, index) of myInfo" :key="key">
                {{ index }} : {{ key }} - {{ value.name }}
            </li>
        </ul>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                myInfo: {
                    name: 'Chu Minh Khai',
                    age: '2x',
                    country: 'vietnam'
                }
            }
        }
    }
</script>

<style lang="scss" scoped>
</style>