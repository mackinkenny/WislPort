<template>
    <app-layout>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <Menu :status="isAdmin" :menuActive="4" />
                <div class="container">
                    <div class="bg-white py-10 px-24 mb-8">
                        <div>
                            <h2 class="text-left font-bold main-title mb-6">
                                {{ __('Whistleblowing Health Check') }}
                            </h2>
                        </div>
                        <div class="text-left">
                            <p class="regular-text font-normal mb-8">
                                {{ __('The tool is broken into four (4) sections with a report available to review and download. There are 40 questions across these chapters, each with a series of sub-questions. Step one is to review the 40 top level questions to determine which questions are applicable or not applicable. Where a question is not applicable, the sub-questions will be removed.') }}
                            </p>
                            <p class="regular-text font-normal mb-8">
                                {{ __('Where questions are applicable, some sub-questions may not be applicable and these can be set as not applicable and will not reflect in the overall scoring for the report.' )}}
                            </p>
                            <p class="regular-text font-normal">
                                {{ __('Each question should be answered based on evidence where available and at the end of each question there is a box for test to justify or qualify any given answers.') }}
                            </p>
                            <div class="text-left">
                                <inertia-link :href="route('blocks', 1)" class="no-underline hover:text-gray-600">
                                <jet-button class="px-10 py-6 normal-case mt-10"  style="background-color: #1B3C5D; font-size: 26px; border-radius: 0px; font-weight: 500;">
                                    {{ check ? __('Continue') : __('Start')}}
                                </jet-button>
                                </inertia-link>
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
            'check'
        ],
        components: {
            AppLayout,
            JetButton,
            Menu
        },
    }
</script>

<style scoped>

</style>
