<template>
    <!--<app-layout>-->
    <div class="py-12 bg-white min-h-screen">
        <div class="relative py-2">
            <div class="absolute" style="top:5%; right:9%">
                <inertia-link :href="route('tool')">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.186 0.849998L19.336 3.916L13.078 10.174L19.252 16.39L16.186 19.498L9.928 13.324L3.754 19.456L0.688 16.348L6.778 10.174L0.646 4L3.754 0.849998L9.928 6.982L16.186 0.849998Z" fill="black"/>
                    </svg>
                </inertia-link>
            </div>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="text-center mb-8">
                <h2 class="font-bold" style="font-size:32px;">
                    {{ __('Whistleblowing Health Check') }}
                </h2>
            </div>
            <div class="flex align-middle justify-center mb-10">
                <div class="rounded-full border-2 border-black p-0.5 flex">
                    <inertia-link :href="route('blocks', section.id)" v-for="(section, index) in sections" class="no-underline hover:text-gray-600">
                        <div class="rounded-full py-1 px-5 menu-point" v-bind:key="'section-' + index" v-bind:class="{'active-tool-point' : id == section.id}">
                            <p class="mb-0 regular-text font-semibold">
                                {{section.title}}
                            </p>
                        </div>
                    </inertia-link>
                    <div class="rounded-full py-1 px-5 menu-point"  v-if="$page.props.user.roles[0].name === 'Admin'" v-bind:class="{'active-tool-point' : id === 'reports'}">
                        <p class="mb-0 regular-text font-semibold">
                            {{ __('Reports') }}
                        </p>
                    </div>
                    <inertia-link v-if="version != 0" :href="route('report', [1, version ? parseInt(version) : null])" class="no-underline hover:text-gray-600">
                        <div class="rounded-full py-1 px-5 menu-point" v-bind:class="{'active-tool-point' : menuActive === sections.length + 2}">
                            <p class="mb-0 regular-text font-semibold">
                                {{ __('Report') }}
                            </p>
                        </div>
                    </inertia-link>
                </div>
            </div>
            <div class="flex justify-center" v-if="report">
                <div class="w-7/12 space-y-4">
                    <div class="shadow rounded p-6 flex justify-between" :key="index" v-for="(rep, index) in report">
                        <div class="w-4/12">
                            <inertia-link :href="route('report', [1, rep.version])">
                                <p class="mb-0 regular-text font-bold">{{ rep.version }} {{ __('Report') }} <span v-if="rep.active === 1">{{ __('Actual') }}</span> <span class="regular-text font-normal"></span></p>
                            </inertia-link>
                        </div>
                        <div class="w-5/12 text-right">
                            <inertia-link class="regular-text font-medium" v-if="rep.active === 1" :href="route('report.close', cid)">{{ __('Close') }}</inertia-link>
                            <p v-else class="text-base">{{ __('Closed date') }}: {{dateTime(rep.updated_at)}}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex justify-center" v-else>
                <div class="w-7/12">
                    <p class="regular-text font-bold">{{ __('You have no reports') }}</p>
                </div>
            </div>


        </div>
    </div>
    <!--</app-layout>-->
</template>

<script>
    import moment from 'moment'
// import AppLayout from "@/Layouts/AppLayout";
import JetButton from '@/Jetstream/Button'
import Inertia from "@inertiajs/inertia-vue3/src/app";
export default {
    components: {
        Inertia,
        JetButton
        // AppLayout
    },
    props: {
        id: Object,
        sections: Object,
        report: Array,
        sect: Object,
        cid: Object,
        version: Number
    },
    data: function () {
        return {
            storage_url: window.location.origin,
            loading: false,
            check: 0,
        }
    },
    filters: {
        reverse(items) {
            return items.slice().reverse()
        }
    },
    mounted(){
        // document.body.style.background = '#fefefe';
    },
    methods: {
        dateTime(value) {
            return moment(value).format('DD-MM-YYYY');
        },
        pdf: function () {
            this.loading = true;
            var lang = document.getElementById('indicate').getAttribute('data-id');
            axios.get('/pdf/' + this.cid).then(response => {
                this.loading = false;
                document.getElementById('report-link').href = this.storage_url + response.data;
                document.getElementById('report-link').click();
                // window.open(this.storage_url + response.data, '_blank');
            });
        },
        toExcel() {
            window.open(this.route().t.url+'/csv/' + this.cid, '_blank');
        },
        toWord() {
            window.open(this.route().t.url+'/word/' + this.cid, '_blank');
        }
    }
}
</script>

<style scoped>

</style>
