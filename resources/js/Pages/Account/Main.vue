<template>
    <app-layout>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <Menu :status="isAdmin" :menuActive="2" />
                <div class="container">
                    <div class="flex justify-center">
                    <div class="w-7/12 bg-white py-6 px-24 mb-8">
                        <div>
                            <h2 class="text-center font-bold main-title mb-10">
                                {{ __('Account') }}
                            </h2>
                        </div>
                        <div class="flex justify-between px-10">
                            <div>
                                <p class="lg-text mb-3 font-bold">
                                    {{end_date}}
                                </p>
                                <p class="text-base mb-4">
                                    {{ __('Next payment date') }}
                                </p>
                            </div>
                            <div>
                                <p class="lg-text mb-3 font-bold">
                                    {{pay_date}}
                                </p>
                                <p class="text-base mb-4">
                                    {{ __('Last payment date') }}
                                </p>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'
    import JetButton from '@/Jetstream/Button'
    import Menu from '@/Layouts/Menu'
    export default {
        name: "Main",
        props: [
            'isAdmin',
            'pay_date',
            'end_date'
        ],
        components: {
            AppLayout,
            JetButton,
            Menu
        }
    }
</script>

<style scoped>

</style>
