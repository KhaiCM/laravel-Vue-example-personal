<template>
    <div class="list-user">
        <table class="tbl-list-user">
            <thead>
                <th>id</th>
                <th>Name</th>
                <th>Location</th>
                <th>DOB</th>
            </thead>
            <tbody>
                <tr v-for="(user, key) in userData" :key="key">
                    <td>{{ key }}</td>
                    <td><a v-on:click="selectUser(user)">{{ user.name.title }}</a></td>
                    <td>{{ user.location.city }}</td>
                    <td>{{ user.dob }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
import  data  from './data.Json'
    export default {
    data() {
        return {
            userData: data,
            number: 1410,
            string: 'MTD'
        }
    },
    methods: {
        selectUser(user) {
            this.$emit('userSelected', user, this.number, this.string)
        }
    }
}
</script>

<style lang="scss" scoped>
.tbl-list-user {
    width: 100%;
}
</style>