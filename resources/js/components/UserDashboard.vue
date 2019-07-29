<template>
    <div class="user-dashboard">
        <hr>
        <div class="list-user-comp">
            <h4>List User</h4>
            <ListUser v-on:userSelected="childrenSelectUser('text', ...arguments)"></ListUser>
        </div>
        <hr>
        <div class="user-detail-comp">
            <h4>User Detail</h4>
            <UserDetail v-bind:userDetailInfo="userSelectFormChild"></UserDetail>
        </div>
    </div>
</template>

<script>
import ListUser from './ListUser.vue'
import UserDetail from './UserDetail.vue'
export default {
    components: {
        ListUser,
        UserDetail
    },
    data() {
        return {
            userSelectFormChild : {}
        }
    },
    methods: {
        childrenSelectUser(test, user, number, string) {
            console.log(test)
            console.log(user)
            console.log(number)
            console.log(string)
            this.userSelectFormChild = user
        }
    }
}
</script>

<style lang="scss" scoped>
</style>