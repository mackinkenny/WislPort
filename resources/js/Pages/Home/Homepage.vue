<template>
    <app-layout>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <SuperAdminHome :comps="companies" v-if="status" />
                <UserHome :status="isAdmin" :check="check" v-else />
            </div>
        </div>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'
    import UserHome from '@/Pages/Home/HomeAdminUser'
    import SuperAdminHome from '@/Pages/Home/HomeSuperAdmin'
    export default {
        components: {
            AppLayout,
            UserHome,
            SuperAdminHome
        },
        props: [
            'companies',
            'status',
            'isAdmin',
            'check'
        ]
    }
</script>
