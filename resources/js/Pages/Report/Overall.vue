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
                        <inertia-link :href="route('blocks', section.id)" v-for="(section, index) in sections"
                                      class="no-underline hover:text-gray-600">
                            <div class="rounded-full py-1 px-5 menu-point" v-bind:key="'section-' + index"
                                 v-bind:class="{'active-tool-point' : id == section.id}">
                                <p class="mb-0 regular-text font-semibold">
                                    {{section.title}}
                                </p>
                            </div>
                        </inertia-link>
                        <inertia-link v-if="$page.props.user.roles[0].name === 'Admin'" :href="route('reports', cid)" class="no-underline hover:text-gray-600">
                            <div class="rounded-full py-1 px-5 menu-point" v-bind:class="{'active-tool-point' : menuActive === sections.length + 1}">
                                <p class="mb-0 regular-text font-semibold">
                                    {{ __('Reports') }}
                                </p>
                            </div>
                        </inertia-link>
                        <div class="rounded-full py-1 px-5 menu-point"
                             v-bind:class="{'active-tool-point' : id === 'report'}">
                            <p class="mb-0 regular-text font-semibold">
                                {{ __('Report') }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center" v-if="reports.length != 0">
                    <div class="w-7/12">
                        <div>
                            <div class="flex justify-center mb-8">
                                <div class="w-full">
                                    <p class="mb-2 lg-text font-bold">
                                        {{ __('Overall Section Summary') }}
                                    </p>
                                    <div class="flex mt-2 border-b border-black">
                                        <div class="w-1/2">
                                            <p class="text-sm mb-2">
                                                {{ __('Section') }}
                                            </p>
                                        </div>
                                        <div class="w-1/2">
                                            <div class="flex">
                                                <div class="w-1/4 flex justify-center">
                                                    <p class="text-sm mb-2">
                                                        {{ __('Score') }} (%)
                                                    </p>
                                                </div>
                                                <div class="w-1/4 flex justify-center">
                                                    <p class="text-sm mb-2">
                                                        {{ __('Trust') }}
                                                    </p>
                                                </div>
                                                <div class="w-1/4 flex justify-center">
                                                    <p class="text-sm mb-2">
                                                        {{ __('Impartiality') }}
                                                    </p>
                                                </div>
                                                <div class="w-1/4 flex justify-center">
                                                    <p class="text-sm mb-2">
                                                        {{ __('Protection') }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex mt-6" v-for="(rep,index) in reports">
                                        <div class="w-1/2 flex align-middle">
                                            <p class="regular-text mb-2 leading">
                                                {{index}}
                                            </p>
                                        </div>
                                        <div class="w-1/2">
                                            <div class="flex">
                                                <div class="w-1/4 flex items-center justify-center">
                                                    <div class="rounded flex items-center justify-center"
                                                         v-if="rep.score"
                                                         v-bind:class="{'high-bg': Math.round(rep.score) > 79, 'medium-bg': (Math.round(rep.score) >= 60 && Math.round(rep.score) <= 79), 'low-bg': Math.round(rep.score) < 60}"
                                                         style="border: 1px solid rgba(0,0,0,0.2); width:60px; height: 60px;">
                                                        <span class="text-base">{{Math.round(rep.score)}}</span>
                                                    </div>
                                                    <div class="rounded flex items-center justify-center" v-else
                                                         style="border: 1px solid rgba(0,0,0,0.2); background-color: #cbd5e0; width:60px; height: 60px;">
                                                    </div>
                                                </div>
                                                <div class="w-1/4 flex items-center justify-center">
                                                    <div class="rounded flex items-center justify-center"
                                                         v-if="rep.trust"
                                                         v-bind:class="{'high-bg': Math.round(rep.trust) > 79, 'medium-bg': (Math.round(rep.trust) >= 60 && Math.round(rep.trust) <= 79), 'low-bg': Math.round(rep.trust) < 60}"
                                                         style="border: 1px solid rgba(0,0,0,0.2); width:60px; height: 60px;">
                                                        <span class="text-base">{{Math.round(rep.trust)}}</span>
                                                    </div>
                                                    <div class="rounded flex items-center justify-center" v-else
                                                         style="border: 1px solid rgba(0,0,0,0.2); background-color: #cbd5e0; width:60px; height: 60px;">
                                                    </div>
                                                </div>
                                                <div class="w-1/4 flex items-center justify-center">
                                                    <div class="rounded flex items-center justify-center"
                                                         v-if="rep.impartiality"
                                                         v-bind:class="{'high-bg': Math.round(rep.impartiality) > 79, 'medium-bg': (Math.round(rep.impartiality) >= 60 && Math.round(rep.impartiality) <= 79), 'low-bg': Math.round(rep.impartiality) < 60}"
                                                         style="border: 1px solid rgba(0,0,0,0.2); width:60px; height: 60px;">
                                                        <span class="text-base">{{Math.round(rep.impartiality)}}</span>
                                                    </div>
                                                    <div class="rounded flex items-center justify-center" v-else
                                                         style="border: 1px solid rgba(0,0,0,0.2); background-color: #cbd5e0; width:60px; height: 60px;">
                                                    </div>
                                                </div>
                                                <div class="w-1/4 flex items-center justify-center">
                                                    <div class="rounded flex items-center justify-center"
                                                         v-if="rep.protection"
                                                         v-bind:class="{'high-bg': Math.round(rep.protection) > 79, 'medium-bg': (Math.round(rep.protection) >= 60 && Math.round(rep.protection) <= 79), 'low-bg': Math.round(rep.protection) < 60}"
                                                         style="border: 1px solid rgba(0,0,0,0.2); width:60px; height: 60px;">
                                                        <span class="text-base">{{Math.round(rep.protection)}}</span>
                                                    </div>
                                                    <div class="rounded flex items-center justify-center" v-else
                                                         style="border: 1px solid rgba(0,0,0,0.2); background-color: #cbd5e0; width:60px; height: 60px;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="my-16">
                                <div class="flex" v-for="(rep, index) in reports">
                                    <div class="w-4/12 py-4 border-r-2 border-gray-500 tracking-tight leading-4">
                                        {{index}}
                                    </div>
                                    <div class="w-8/12 relative">
                                        <div class="flex h-full">
                                            <div class="w-1/4 h-full border-r-2 border-gray-200 py-4"></div>
                                            <div class="w-1/4 h-full border-r-2 border-gray-200 py-4"></div>
                                            <div class="w-1/4 h-full border-r-2 border-gray-200 py-4"></div>
                                            <div class="w-1/4 h-full border-r-2 border-gray-200 py-4"></div>
                                        </div>
                                        <div class="absolute h-full w-full" style="left:0px; top:0px;">
                                            <div class="flex items-center w-full h-full">
                                                <div class="h-6 flex items-center"
                                                     v-bind:class="{'high-bg': Math.round(rep.score) > 79, 'medium-bg': (Math.round(rep.score) >= 60 && Math.round(rep.score) <= 79), 'low-bg': Math.round(rep.score) < 60}"
                                                     :style="{'width': Math.round(rep.score) + '%'}"
                                                     style="border: 1px solid rgba(0,0,0,0.2);">
                                                    <span class="ml-3 w-max">{{Math.round(rep.score)}}%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex">
                                    <div class="w-4/12 py-4 text-right">
                                        0%
                                    </div>
                                    <div class="w-8/12 relative">
                                        <div class="flex h-full">
                                            <div class="w-1/4 h-full py-4 text-right"> 25%</div>
                                            <div class="w-1/4 h-full py-4 text-right"> 50%</div>
                                            <div class="w-1/4 h-full py-4 text-right"> 75%</div>
                                            <div class="w-1/4 h-full py-4 text-right"> 100%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-center mb-8 mt-16">
                                <div class="w-full">
                                    <p class="mb-2 lg-text font-bold">
                                        {{ __('Overall TIP Scoring by Chapter') }}
                                    </p>
                                    <div class="flex mt-2 border-b border-black">
                                        <div class="w-1/2">
                                            <p class="text-sm mb-2">
                                                {{ __('Chapter') }}
                                            </p>
                                        </div>
                                        <div class="w-1/2">
                                            <div class="flex">
                                                <div class="w-1/4 flex justify-center">
                                                    <p class="text-sm mb-2">
                                                        {{ __('Score') }}
                                                    </p>
                                                </div>
                                                <div class="w-1/4 flex justify-center">
                                                    <p class="text-sm mb-2">
                                                        {{ __('Trust') }}
                                                    </p>
                                                </div>
                                                <div class="w-1/4 flex justify-center">
                                                    <p class="text-sm mb-2">
                                                        {{ __('Impartiality') }}
                                                    </p>
                                                </div>
                                                <div class="w-1/4 flex justify-center">
                                                    <p class="text-sm mb-2">
                                                        {{ __('Protection') }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex mt-6" v-for="(rep,index) in chapters">
                                        <div class="w-1/2 flex align-middle">
                                            <p class="regular-text mb-2 leading" v-if="index === 'oc'">
                                                {{ __('Organisational Context') }}
                                            </p>
                                            <p class="regular-text mb-2 leading" v-if="index === 'ls'">
                                                {{ __('Leadership') }}
                                            </p>
                                            <p class="regular-text mb-2 leading" v-if="index === 'pl'">
                                                {{ __('Planning') }}
                                            </p>
                                            <p class="regular-text mb-2 leading" v-if="index === 'sp'">
                                                {{ __('Support') }}
                                            </p>
                                            <p class="regular-text mb-2 leading" v-if="index === 'op'">
                                                {{ __('Operations') }}
                                            </p>
                                            <p class="regular-text mb-2 leading" v-if="index === 'pe'">
                                                {{ __('Performance Evalutions') }}
                                            </p>
                                            <p class="regular-text mb-2 leading" v-if="index === 'ci'">
                                                {{ __('Continual Improvement') }}
                                            </p>
                                        </div>
                                        <div class="w-1/2">
                                            <div class="flex">
                                                <div class="w-1/4 flex items-center justify-center">
                                                    <div class="rounded flex items-center justify-center"
                                                         v-if="rep.score"
                                                         v-bind:class="{'high-bg': Math.round(rep.score) > 79, 'medium-bg': (Math.round(rep.score) >= 60 && Math.round(rep.score) <= 79), 'low-bg': Math.round(rep.score) < 60}"
                                                         style="border: 1px solid rgba(0,0,0,0.2); width:60px; height: 60px;">
                                                        <span class="text-base">{{Math.round(rep.score)}}</span>
                                                    </div>
                                                    <div class="rounded flex items-center justify-center" v-else
                                                         style="border: 1px solid rgba(0,0,0,0.2); background-color: #cbd5e0; width:60px; height: 60px;">
                                                    </div>
                                                </div>
                                                <div class="w-1/4 flex items-center justify-center">
                                                    <div class="rounded flex items-center justify-center"
                                                         v-if="rep.trust"
                                                         v-bind:class="{'high-bg': Math.round(rep.trust) > 79, 'medium-bg': (Math.round(rep.trust) >= 60 && Math.round(rep.trust) <= 79), 'low-bg': Math.round(rep.trust) < 60}"
                                                         style="border: 1px solid rgba(0,0,0,0.2); width:60px; height: 60px;">
                                                        <span class="text-base">{{Math.round(rep.trust)}}</span>
                                                    </div>
                                                    <div class="rounded flex items-center justify-center" v-else
                                                         style="border: 1px solid rgba(0,0,0,0.2); background-color: #cbd5e0; width:60px; height: 60px;">
                                                    </div>
                                                </div>
                                                <div class="w-1/4 flex items-center justify-center">
                                                    <div class="rounded flex items-center justify-center"
                                                         v-if="rep.impartiality"
                                                         v-bind:class="{'high-bg': Math.round(rep.impartiality) > 79, 'medium-bg': (Math.round(rep.impartiality) >= 60 && Math.round(rep.impartiality) <= 79), 'low-bg': Math.round(rep.impartiality) < 60}"
                                                         style="border: 1px solid rgba(0,0,0,0.2); width:60px; height: 60px;">
                                                        <span class="text-base">{{Math.round(rep.impartiality)}}</span>
                                                    </div>
                                                    <div class="rounded flex items-center justify-center" v-else
                                                         style="border: 1px solid rgba(0,0,0,0.2); background-color: #cbd5e0; width:60px; height: 60px;">
                                                    </div>
                                                </div>
                                                <div class="w-1/4 flex items-center justify-center">
                                                    <div class="rounded flex items-center justify-center"
                                                         v-if="rep.protection"
                                                         v-bind:class="{'high-bg': Math.round(rep.protection) > 79, 'medium-bg': (Math.round(rep.protection) >= 60 && Math.round(rep.protection) <= 79), 'low-bg': Math.round(rep.protection) < 60}"
                                                         style="border: 1px solid rgba(0,0,0,0.2); width:60px; height: 60px;">
                                                        <span class="text-base">{{Math.round(rep.protection)}}</span>
                                                    </div>
                                                    <div class="rounded flex items-center justify-center" v-else
                                                         style="border: 1px solid rgba(0,0,0,0.2); background-color: #cbd5e0; width:60px; height: 60px;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="my-16">
                                <div class="flex" v-for="(rep, index) in chapters">
                                    <div class="w-4/12 py-4 border-r-2 border-gray-500 tracking-tight leading-4 h-28 flex items-center">
                                        <p class="regular-text mb-2 leading" v-if="index === 'oc'">
                                            {{ __('Organisational Context') }}
                                        </p>
                                        <p class="regular-text mb-2 leading" v-if="index === 'ls'">
                                            {{ __('Leadership') }}
                                        </p>
                                        <p class="regular-text mb-2 leading" v-if="index === 'pl'">
                                            {{ __('Planning') }}
                                        </p>
                                        <p class="regular-text mb-2 leading" v-if="index === 'sp'">
                                            {{ __('Support') }}
                                        </p>
                                        <p class="regular-text mb-2 leading" v-if="index === 'op'">
                                            {{ __('Operations') }}
                                        </p>
                                        <p class="regular-text mb-2 leading" v-if="index === 'pe'">
                                            {{ __('Performance Evalutions') }}
                                        </p>
                                        <p class="regular-text mb-2 leading" v-if="index === 'ci'">
                                            {{ __('Continual Improvement') }}
                                        </p>
                                    </div>
                                    <div class="w-8/12 relative">
                                        <div class="flex h-full">
                                            <div class="w-1/4 h-full border-r-2 border-gray-200 py-4"></div>
                                            <div class="w-1/4 h-full border-r-2 border-gray-200 py-4"></div>
                                            <div class="w-1/4 h-full border-r-2 border-gray-200 py-4"></div>
                                            <div class="w-1/4 h-full border-r-2 border-gray-200 py-4"></div>
                                        </div>
                                        <div class="absolute h-full w-full" style="left:0px; top:0px; z-index: 1000;">
                                            <div class="flex items-center w-full h-full">
                                                <div class="h-6 flex items-center"
                                                     :style="{'width': Math.round(rep.score) + '%'}"
                                                     style="border: 1px solid rgba(0,0,0,0.2); background-color: #bccdff;">
                                                    <span v-if="Math.round(rep.score) != 0" class="ml-3">{{Math.round(rep.score)}}% - {{ __('Score') }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="absolute h-full w-full" style="left:0px; top:24px; z-index: 1000;">
                                            <div class="flex items-center w-full h-full">
                                                <div class="h-6 flex items-center"
                                                     :style="{'width': Math.round(rep.trust) + '%'}"
                                                     style="border: 1px solid rgba(0,0,0,0.2); background-color: #d2918e;">
                                                    <span v-if="Math.round(rep.trust) != 0" class="ml-3">{{Math.round(rep.trust)}}% - {{ __('Trust') }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="absolute h-full w-full" style="left:0px; top:48px; z-index: 1000;">
                                            <div class="flex items-center w-full h-full">
                                                <div class="h-6 flex items-center"
                                                     :style="{'width': Math.round(rep.impartiality) + '%'}"
                                                     style="border: 1px solid rgba(0,0,0,0.2); background-color: #93d899;">
                                                    <span v-if="Math.round(rep.impartiality) != 0" class="ml-3">{{Math.round(rep.impartiality)}}% - {{ __('Impartiality') }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="absolute h-full w-full" style="left:0px; top:72px; z-index: 1000;">
                                            <div class="flex items-center w-full h-full">
                                                <div class="h-6 flex items-center"
                                                     :style="{'width': Math.round(rep.protection) + '%'}"
                                                     style="border: 1px solid rgba(0,0,0,0.2); background-color: #d8d899;">
                                                    <span v-if="Math.round(rep.protection) != 0" class="ml-3">{{Math.round(rep.protection)}}% - {{ __('Protection') }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex mt-5">
                                    <div class="w-4/12 py-4 text-right">
                                        0%
                                    </div>
                                    <div class="w-8/12 relative">
                                        <div class="flex h-full">
                                            <div class="w-1/4 h-full py-4 text-right"> 25%</div>
                                            <div class="w-1/4 h-full py-4 text-right"> 50%</div>
                                            <div class="w-1/4 h-full py-4 text-right"> 75%</div>
                                            <div class="w-1/4 h-full py-4 text-right"> 100%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-4/12 p-3 ml-5">
                        <div class="rounded-lg py-10 px-10 mb-8 sticky" style="background-color: #F9F9F9;top: 10%;">
                            <div class="text-left" v-for="section in sections">
                                <inertia-link :href="route('report', [section.id, version ? parseInt(version) : null])"
                                              class="no-underline hover:text-gray-600">
                                    <p class="regulat-text font-bold mb-3 cursor-pointer">
                                        {{section.title}}
                                    </p>
                                </inertia-link>
                            </div>
                            <div class="text-left">
                                <inertia-link :href="route('overall/report', version ? version : null)">
                                    <p class="regulat-text font-bold mb-3 cursor-pointer">
                                        {{ __('Overall reports') }}
                                    </p>
                                </inertia-link>
                            </div>

                            <div class="">
                                <jet-button class="px-14 py-3 normal-case justify-center mt-3 w-full" style="background-color: #000000; border-radius: 5px; font-weight: 500; font-size: 16px;" v-if="!loading" v-on:click="pdf">
                                    {{ __('Download PDF') }}
                                </jet-button>
                                <jet-button class="px-14 py-3 normal-case justify-center mt-3 w-full" style="background-color: #000000; border-radius: 5px; font-weight: 500; font-size: 16px;" v-if="!loading" v-on:click="toExcel">
                                    {{ __('Download Excel') }}
                                </jet-button>
                                <jet-button class="px-14 py-3 normal-case justify-center mt-3 w-full" style="background-color: #000000; border-radius: 5px; font-weight: 500; font-size: 16px;" v-if="!loading" v-on:click="toWord">
                                    {{ __('Download Word') }}
                                </jet-button>
                                <jet-button class="px-14 py-3 normal-case justify-center mt-3 w-full" style="background-color: #000000; border-radius: 5px; font-weight: 500; font-size: 16px;" v-if="loading">
                                    <div class="lds-ring"><div></div><div></div><div></div><div></div></div>
                                </jet-button>
                                <a id="report-link" href="#" style="display:none;" download></a>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex  justify-center py-4" v-else>
                    <div class="w-7/12">
                        <p class="mb-2 lg-text font-bold" v-for="section in sections">
                            <span v-if="section.id == sect"> {{ __('Section') }} {{sect}}. {{section.title}}</span>
                        </p>
                        <p class="regular-text text-left mt-2">{{ __('Nothing to show') }}</p>
                    </div>
                    <div class="w-4/12 p-3 ml-5">
                        <div class="rounded-lg py-10 px-10 mb-8 sticky" style="background-color: #F9F9F9;top: 10%;">
                            <div class="text-left" v-for="section in sections">
                                <inertia-link :href="route('report', section.id)"
                                              class="no-underline hover:text-gray-600">
                                    <p class="regular-text font-bold mb-3 cursor-pointer">
                                        {{section.title}}
                                    </p>
                                </inertia-link>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!--</app-layout>-->
</template>

<script>
    // import AppLayout from "@/Layouts/AppLayout";
    import JetButton from '@/Jetstream/Button'
    import Inertia from "@inertiajs/inertia-vue3/src/app";

    export default {
        name: "Main",
        components: {
            Inertia,
            JetButton,
            // AppLayout
        },
        props: {
            id: Object,
            sections: Object,
            reports: Object,
            sect: Object,
            cid: Object,
            chapters: Object,
            version: Number
        },
        data: function () {
            return {
                storage_url: window.location.origin,
                loading: false,
            }
        },
        mounted() {
            // document.body.style.background = '#fefefe';
        },
        methods: {
            pdf: function () {
                this.loading = true;
                const url = this.version ? '/pdf/' + this.cid + '/'+this.version : '/pdf/' + this.cid;
                axios.get(url).then(response => {
                    this.loading = false;
                    document.getElementById('report-link').href = this.storage_url + response.data;
                    document.getElementById('report-link').click();
                    // window.open(this.storage_url + response.data, '_blank');
                });
            },
            toExcel() {
                const url = this.version ? '/csv/' + this.cid + '/'+this.version : '/csv/' + this.cid;
                window.open(this.route().t.url + url, '_blank');
            },
            toWord() {
                const url = this.version ? '/word/' + this.cid + '/'+this.version : '/word/' + this.cid;
                window.open(this.route().t.url + url, '_blank');
            }
        }
    }
</script>

<style scoped>

</style>
