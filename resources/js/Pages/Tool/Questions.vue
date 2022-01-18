<template>
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
                        <inertia-link :href="route('blocks', section.id)" v-for="(section, index) in sections" v-bind:style="[id == section.id ? {'pointer-events': 'none'} : '']" class="no-underline hover:text-gray-600">
                            <div class="rounded-full py-1 px-5 menu-point" v-bind:key="'section-' + index" v-bind:class="{'active-tool-point' : id == section.id}">
                                <p class="mb-0 regular-text font-semibold">
                                    {{section.title}}
                                </p>
                            </div>
                        </inertia-link>

                        <inertia-link  v-if="$page.props.user.roles[0].name === 'Admin'" :href="route('reports', company_id)" class="no-underline hover:text-gray-600">
                            <div class="rounded-full py-1 px-5 menu-point" v-bind:class="{'active-tool-point' : id === 'reports'}">
                                <p class="mb-0 regular-text font-semibold">
                                    {{ __('Reports') }}
                                </p>
                            </div>
                        </inertia-link>
                        <inertia-link v-if="version != 0" :href="route('report',[1, version ? parseInt(version) : null])" class="no-underline hover:text-gray-600">
                        <div class="rounded-full py-1 px-5 menu-point" v-bind:class="{'active-tool-point' : id === 'report'}">
                            <p class="mb-0 regular-text font-semibold">
                                {{ __('Report') }}
                            </p>
                        </div>
                        </inertia-link>
                    </div>
                </div>
                <div class="pt-4" v-if="isLoading">
                    <inertia-link :href="route('blocks',id)" class="no-underline hover:text-gray-600">
                        <p class="text-base font-bold mb-0 pl-7">← {{ __('back to category selection') }}</p>
                    </inertia-link>
                    <div class="flex">
                        <div class="w-8/12 pr-5">
                            <div class="mt-4 mb-20" v-if="menu" v-for="(block, index) in blocks">
                                <div :id="index" >
                                <p class="mb-0 lg-text font-bold pl-7">
                                    {{index + 1}}. {{block.title}}
                                </p>
                                <div class="mt-5" v-for="(question, index2) in block.questions">
                                    <label class="regular-text" :for="'question-' + question.id"><span class="text-gray-300 mr-3">{{index2 + 1}}.</span>{{question.title}}</label>
                                    <div class="flex">
                                        <div class="w-7/12">
                                                <div v-if="datas != []">
                                                    <select class="rounded py-3 px-4 regular-text border-0 w-full ml-7 mt-3"
                                                            name=""
                                                            v-model="datas[index].quest[index2].answer"
                                                            v-on:change="saveReport($event)"
                                                            style="background-color: #F9F9F9;">
                                                        <option value="null">{{ __('Select') }} ...</option>
                                                        <option :value="answer.id"  v-for="answer in question.answers.slice().reverse()">
                                                            {{answer.title}}
                                                        </option>
                                                    </select>
                                                </div>
                                        </div>
                                        <div class="w-1/12 ml-8">
                                            <div v-if="datas != []" v-for="answer in question.answers">
                                                <div class="rounded py-3 px-4 flex align-middle justify-center ml-5 mt-3" style="border: 1px solid rgba(0,0,0,0.2);" v-if="datas[index].quest[index2].answer === answer.id" v-bind:style="{'background-color': answer.color}">
                                                    <span class="text-base">{{answer.score}}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    <div class="mt-4 w-7/12">
                                        <textarea class="rounded py-3 px-4 regular-text border-0 w-full ml-7 mt-3" v-on:change="saveComment($event, block.id)" v-model="comments[index].comment" cols="30" rows="4" style="background-color: #F9F9F9;" maxlength="255" :placeholder=" __('Comments block')"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="flex">
                                <inertia-link :href="route('report',[id, version ? parseInt(version) : null])" class="no-underline hover:text-gray-600">
                                <jet-button class="px-14 py-6 normal-case mt-10 ml-8"  style="background-color: #000000; font-size: 26px; border-radius: 5px; font-weight: 500;">
                                    {{ __('Get the report') }}
                                </jet-button>
                                </inertia-link>
                            </div>
                        </div>
                        <div class="w-4/12">
                            <div class="rounded-lg p-10 mb-8 sticky flex flex-col max-h-96 overflow-y-auto" style="background-color: #F9F9F9; top: 10%;" v-if="menu">
                                <p class="regular-text text-black question-anchor cursor-pointer mb-4" :id="'point-' + index" v-for="(block, index) in blocks" v-on:click="anchor(index)" :class="{'active': wScroll == index}">
                                    {{index + 1}}. {{block.title}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pt-4" v-else>
                    <div class="text-center mt-5">
                        <p class="regular-text">
                            {{ __('Loading') }}...
                        </p>
                    </div>
                </div>
            </div>
        </div>
</template>

<script>
    import JetButton from '@/Jetstream/Button'
    import Swal from 'sweetalert2'

    export default {
        name: "Questions",
        props: {
            blocks: Object,
            sections: Object,
            id: Object,
            company_id: Number,
            reports: Object,
            comms: Object,
            version: Number
        },
        data: function () {
            return {
                wScroll: null,
                menu: false,
                bod: false,
                datas: [],
                isLoading: false,
                comments: [],
            }
        },
        created() {
            window.addEventListener('scroll', this.WindowChange);
        },
        components: {
            // AppLayout,
            JetButton,
        },
        mounted(){
            // document.body.style.background = '#fefefe';
            this.load();
            setTimeout(this.bod = true, 300);
            setTimeout(this.menu = true, 600);
            setTimeout(() => this.isLoading = true,800);
        },
        methods: {
            WindowChange: function (event) {
                var check = null;
                this.blocks.forEach(function(current, index){
                    if (document.getElementById(index)){
                        if (document.getElementById(index).offsetTop - 51 < window.scrollY && (document.getElementById(index).offsetTop + document.getElementById(index).offsetHeight) > window.scrollY){
                            check = index;
                        }
                    }
                });
                this.wScroll = check;
            },


            anchor: function (index) {
                window.scrollTo({
                    top: document.getElementById(index).offsetTop -50,
                    behavior: "smooth"
                });
            },
            checkPosition: function(index) {

                if (document.getElementById(index)){
                    return ((document.getElementById(index).offsetTop - 51 < this.wScroll) && (document.getElementById(index).offsetTop + document.getElementById(index).offsetHeight > this.wScroll));
                }
            },
            load: function () {
                var data = this.datas;
                var comments = this.comments;
                var comms = this.comms;
                var reports = this.reports;
                var check = 0;
                this.blocks.forEach(function (current, index) {
                    data.push({'block': current.id, 'quest': []});
                    comments.push({'block': current.id,'comment': null});
                    current.questions.forEach(function (question) {
                        check = 0;
                        reports.forEach(function (report) {
                             report.questions.forEach(function (quest) {
                                 if (question.id == quest.question){
                                     data[index].quest.push({'question': question.id, 'answer': quest.answer});
                                     check = 1;
                                 }
                             })
                        });
                        if (check == 0){
                            data[index].quest.push({'question': question.id, 'answer': null});
                        }
                    });

                    comms.forEach(function (comm) {
                        if (current.id == comm.block_id) {
                            comments[index].comment = comm.comment;
                        }
                    })
                });
                this.datas = data;
                this.comments = comments;
            },

            saveReport: function (event) {
                axios.get('saveAnswer/' + event.currentTarget.value + '/' + this.company_id).then(response => {
                    if (!response.data.status){
                        Swal.fire({
                            text: 'Error, please try again',
                            backdrop: false,
                            showConfirmButton: false,
                            timer: 1500,
                            position: 'top-end',
                            background: '#dd5e55'
                        });
                    }
                });
            },

            saveComment: function (event, id) {
                axios.get('saveComment/' + event.currentTarget.value + '/' + this.company_id + '/' + id).then(response => {
                    if (!response.data.status){
                        Swal.fire({
                            text: 'Error, please try again',
                            backdrop: false,
                            showConfirmButton: false,
                            timer: 1500,
                            position: 'top-end',
                            background: '#dd5e55'
                        });
                    }
                });
            }
        }
    }
</script>

<style scoped>

</style>
