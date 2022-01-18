<template>
    <div class="container">
        <div class="bg-white py-10 px-28 mb-8">
           <div>
               <h2 class="text-left font-bold main-title mb-6">
                   {{ __('Welcome to the WislPort Whistleblowing Programme Tool') }}
               </h2>
           </div>
            <div class="text-left">
                <p class="regular-text font-normal">
                    {{ __('This tool is based around ISO37002, the International Standards Organisations standard for whistleblowing. To be used in conjunction with the other tools in your WislPort subscription, this tool provides you with an annual health check and status report on how well your whistleblowing programme is performing.') }}
                </p>
            </div>
            <div class="text-left">
                <inertia-link :href="route('blocks',1)" class="no-underline hover:text-gray-600">
                <jet-button class="px-10 py-6 normal-case mt-10" style="background-color: #1B3C5D; font-size: 26px; border-radius: 0px; font-weight: 500;">
                    {{ check ? __('Continue') : __('Start')}}
                </jet-button>
                </inertia-link>
            </div>
        </div>
        <div class="bg-white py-10 px-28">
            <div>
                <h2 class="text-left font-bold main-title mb-6">
                    {{ __('When To Use The Tool') }}
                </h2>
            </div>
            <div class="text-left">
                <p class="regular-text font-normal">
                    {{ __('The tool should be used on an annual basis to provide and overview of how your whistleblowing programme is performing. A time should be set aside, usually 1-2 days for one resource to update the answers and therefore create a picture in time that can become a benchmark for continual improvement.') }}
                </p>
            </div>
        </div>
    </div>
</template>

<script>
    import JetButton from '@/Jetstream/Button'
    export default {
        name: "MainUser",
        components: {
            JetButton,
        },
        props: [
            'check'
        ]
    }
</script>

<style scoped>

</style>
