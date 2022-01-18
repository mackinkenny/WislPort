<template>
    <div>
        <Menu :status="status" :menuActive="1" />
        <Main :check="check" />
    </div>
</template>

<script>
    import Main from '@/Pages/Home/MainUser'
    import Menu from '@/Layouts/Menu'
    export default {
        name: "HomeAdminUser",
        props: [
          'status', 'check'
        ],
        data: function () {
            return {
                menuActive: 1,
            }
        },
        components: {
            Main,
            Menu
        },
    }
</script>

<style scoped>

</style>