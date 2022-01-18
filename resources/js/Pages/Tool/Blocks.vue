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
                        <inertia-link v-if="$page.props.user.roles[0].name === 'Admin'" :href="route('reports', company_id)" class="no-underline hover:text-gray-600">
                            <div class="rounded-full py-1 px-5 menu-point" v-bind:class="{'active-tool-point' : menuActive === sections.length + 1}">
                                <p class="mb-0 regular-text font-semibold">
                                    {{ __('Reports') }}
                                </p>
                            </div>
                        </inertia-link>
                        <inertia-link v-if="version != 0" :href="route('report', [1, version ? parseInt(version) : null])" class="no-underline hover:text-gray-600">
                        <div class="rounded-full py-1 px-5 menu-point" v-bind:class="{'active-tool-point' : menuActive === sections.length + 1}">
                            <p class="mb-0 regular-text font-semibold">
                                {{ __('Report') }}
                            </p>
                        </div>
                        </inertia-link>
                    </div>
                </div>
                <div class="flex justify-end">
                    <div class="w-9/12">
                    <p class="pl-8 text-base font-bold mb-4" style="font-size: 24px;" v-if="status">
                        {{ __('Check the questions that apply to you:') }}

                    </p>
                        <form @submit.prevent="submit" v-if="blocks">
                        <div class="mb-3" v-for="(block, index) in blocks">
                            <input :id="block.id" type="checkbox" class="mr-4" v-on:change="setValue(block, $event)" :checked="ids.indexOf(block.id) !== -1" :disabled="status !== true ">
                            <label class="regular-text font-medium" :for="block.id">{{block.title}} </label>
                        </div>
                        </form>
                        <p class="pl-8 text-red-600  mb-4" style="font-size: 16px; font-weight: 500;" v-if="!status">
                            {{ __('Your Company Admin sets all section questions. Please click on the highlighted section and press the confirm button to proceed.') }}
                        </p>
                        <jet-button v-on:click="submit" class="px-14 py-6 normal-case mt-10 ml-8" v-bind:class="{'disable-btn': selected.length === 0}"  style="background-color: #000000; font-size: 26px; border-radius: 5px; font-weight: 500;">
                            {{ __('Confirm') }}
                        </jet-button>
                    </div>
                </div>
            </div>
        </div>
    <!--</app-layout>-->
</template>

<script>
    // import AppLayout from '@/Layouts/AppLayout'
    import JetButton from '@/Jetstream/Button'
    import Inertia from "@inertiajs/inertia-vue3/src/app";
    export default {
        name: "Blocks",
        props: {
            blocks: Object,
            sections: Object,
            id: Object,
            ids: Object,
            status: Object,
            company_id: Number,
            version: Number
        },
        data: function () {
            return {
                selected: [],
            }
        },
        components: {
            Inertia,
            // AppLayout,
            JetButton,
        },
        mounted(){
            // document.body.style.background = '#fefefe';
            this.selected = this.ids;
        },
        methods: {
            setValue: function (block, event) {
                if (this.status == true){
                if(event.currentTarget.checked == true){
                    this.selected.push(block.id);
                }
                else
                {
                    this.selected.splice(this.selected.indexOf(block.id),1);
                }
                }
            },
            submit: function () {
                this.$inertia.get('/tools', this.selected);
            }
        }
    }
</script>
