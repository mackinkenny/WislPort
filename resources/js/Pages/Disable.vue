<template>
    <div class="h-screen flex items-center justify-center bg-white">
        <div class="text-center">
        <p class="text-2xl font-bold">
            You're company was disabled
        </p>

        <jet-button class="px-5 py-3 normal-case mt-3 font-medium" style="background-color: #1B3C5D; border-radius: 5px; font-weight: 500;" v-on:click="logout">
            Return to login
        </jet-button>
        </div>
    </div>
</template>

<script>
    import JetButton from '@/Jetstream/Button'
    export default {
        name: "Disable",
        components: {
            JetButton,
        },
        methods: {
            logout() {
                this.$inertia.post(route('logout'));
            },
        }
    }
</script>

<style scoped>

</style>