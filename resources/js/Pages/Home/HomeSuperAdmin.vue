<template>
    <div class="container">
        <div class="bg-white py-10 px-24 mb-8">
            <div class="flex items-center justify-between mb-8">
                <div class="w-3/12 pt-6">
                    <inertia-link :href="route('addUser')">
                        <jet-button class="px-2 py-3 normal-case" style="background-color: #1B3C5D; font-size: 13px; border-radius: 0px; font-weight: 500; letter-spacing: 0px">
                            Add user
                        </jet-button>
                    </inertia-link>
                    <a href="/adminReport">
                        <jet-button class="px-2 py-3 normal-case ml-3" style="background-color: #1B3C5D; font-size: 13px; border-radius: 0px; font-weight: 500; letter-spacing: 0px">
                            Export Excel
                        </jet-button>
                    </a>
                </div>
                <div class="w-3/12">
                    <label style="font-size: 13px;" for="">Pay Date </label>
                    <jet-input type="date" class=" block w-full border-0 py-2 border" style="background-color: #F9F9F9; border-radius: 0px; font-size: 14px;" v-model="pay_date" required placeholder="Pay date" />
                </div>
                <div class="w-3/12">
                    <label style="font-size: 13px;" for="">End Date </label>
                    <jet-input type="date" class=" block w-full border-0 py-2 border" style="background-color: #F9F9F9; border-radius: 0px; font-size: 14px;" v-model="end_date" required placeholder="End date" />
                </div>
                <div class="w-3/12">
                    <label style="font-size: 13px;" for="">Search input </label>
                <div class="flex justify-end">
                <div class="w-60">
                    <jet-input id="search" type="text" class=" block w-full border-0 py-2 border" style="background-color: #F9F9F9; border-radius: 0px; font-size: 14px;" v-model="search" placeholder="Search input" />
                </div>
                <jet-button v-on:click="SearchCompany" class="px-2 py-3 normal-case" style="background-color: #1B3C5D; font-size: 14px; border-radius: 0px; font-weight: 500; letter-spacing: 0px">
                    Search
                </jet-button>
                </div>
                </div>
            </div>
            <div class="flex border-b border-black">
                <div class="w-2/12">
                    <p class="regular-text">
                        Company
                    </p>
                </div>
                <div class="w-3/12">
                    <p class="regular-text">
                        Owner
                    </p>
                </div>
                <div class="w-1/12">
                    <p class="regular-text">
                        Account
                    </p>
                </div>
                <div class="w-2/12">
                    <p class="regular-text">
                        Users
                    </p>
                </div>
                <div class="w-3/12">
                    <p class="regular-text">
                        E-mail
                    </p>
                </div>
                <div class="w-1/12">
                    <p class="regular-text">
                        Action
                    </p>
                </div>
            </div>
            <div class="flex flex-wrap mt-4 mb-10" v-for="(company, index) in companies">
                <div class="w-2/12">
                    <p class="regular-text mb-2" style="font-size: 16px;">
                        {{company.title}}
                    </p>
                </div>
                <div class="w-3/12">
                    <p class="regular-text mb-2" style="font-size: 16px;">
                        {{company.owner.name}}
                    </p>
                    <p class="regular-text mb-2" style="font-size: 16px;">
                        {{company.owner.email}}
                    </p>
                </div>
                <div class="w-1/12">
                    <p class="regular-text mb-2" style="font-size: 16px;">
                        {{company.pay_status ? 'unpaid' : 'paid'}}
                    </p>
                </div>
                <div class="w-2/12">
                    <p class="regular-text mb-2 hover:bg-gray-50 cursor-pointer" style="font-size: 16px;" @click="setUserEdit(user, index)" v-for="user in company.users">
                        {{user.name}}
                    </p>
                </div>
                <div class="w-3/12">
                    <p class="regular-text mb-2" style="font-size: 16px;" v-for="user in company.users">
                        {{user.email}}
                    </p>
                </div>
                <div class="w-1/12   flex">
                    <div class="relative active-icon" v-if="!company.status">
                        <i class="fas fa-minus-circle lg-text hover:text-red-500 cursor-pointer" v-on:click="changeStatus(company)"></i>
                        <div class="tag-for-icon">
                            <p>Disable company</p>
                        </div>
                    </div>
                    <div class="relative active-icon" v-else>
                        <i class="fas fa-check-circle lg-text hover:text-green-500 cursor-pointer" v-on:click="changeStatus(company)"></i>
                        <div class="tag-for-icon">
                            <p>Activate company</p>
                        </div>
                    </div>

                    <div class="relative active-icon ml-2">
                        <i class="far fa-calendar-alt lg-text hover:text-red-500 cursor-pointer" v-on:click="setDetail(company)"></i>
                        <div class="tag-for-icon">
                            <p class="leading-3">Details</p>
                        </div>
                        <!--<Calendar />-->
                        <!--<DatePicker v-model="companies[index].end_date" :id="'picker-' + company.id" v-on:change="Renew($event, company)"-->
                        <!--/>-->
                    </div>
                </div>
                <div class="w-full flex flex-wrap justify-end company-details my-4" v-bind:class="{'active border-b border-black pb-3': detail === company.id}">
                    <div class="w-4/12 p-1 mb-2">
                        <label for="">Company</label>
                        <jet-input type="text" class="mt-2 block w-full border-0 h-14" style="background-color: #F9F9F9; border-radius: 0px;" v-model="companyEdit.title" required placeholder="Company title" />
                    </div>
                    <div class="w-4/12 p-1 mb-2">
                        <label for="">Company owner name</label>
                        <jet-input type="text" class="mt-2 block w-full border-0 h-14" style="background-color: #F9F9F9; border-radius: 0px;" v-model="companyEdit.name" required placeholder="Owner name" />
                    </div>
                    <div class="w-4/12 p-1 mb-2">
                        <label for="">Company owner email</label>
                        <jet-input type="text" class="mt-2 block w-full border-0 h-14" style="background-color: #F9F9F9; border-radius: 0px;" v-model="companyEdit.email" required placeholder="Owner email" />
                    </div>
                    <div class="w-4/12 p-1">
                        <label for="">Job title</label>
                        <jet-input type="text" class="mt-2 block w-full border-0 h-14" style="background-color: #F9F9F9; border-radius: 0px;" v-model="companyEdit.job_title" required placeholder="Job title" />
                    </div>
                    <div class="w-4/12 p-1">
                        <label for="">Phone number</label>
                        <jet-input type="text" class="mt-2 block w-full border-0 h-14" style="background-color: #F9F9F9; border-radius: 0px;" v-model="companyEdit.phone" required placeholder="Phone number" />
                    </div>
                    <div class="w-4/12 p-1 mb-2">
                        <label for="">Company owner password</label>
                        <jet-input type="text" class="mt-2 block w-full border-0 h-14" style="background-color: #F9F9F9; border-radius: 0px;" v-model="companyEdit.password" required placeholder="Owner password" />
                    </div>

                    <div class="w-4/12 p-1">
                        <label for="">Pay Date</label>
                        <jet-input type="date" class="mt-2 block w-full border-0 h-14" style="background-color: #F9F9F9; border-radius: 0px;" v-model="companyEdit.pay_date" required placeholder="Pay date" />
                    </div>
                    <div class="w-4/12 p-1">
                        <label for="">End Date</label>
                        <jet-input type="date" class="mt-2 block w-full border-0 h-14" style="background-color: #F9F9F9; border-radius: 0px;" v-model="companyEdit.end_date" required placeholder="End date" />
                    </div>

                    <div class="w-4/12 p-1 flex items-end justify-end">
                        <jet-button class="ml-4 px-12 py-4 normal-case" style="background-color: #1B3C5D; font-size: 20px; border-radius: 0px; font-weight: 500; letter-spacing: 0px" v-on:click="Renew(companyEdit, index, company.id)">
                            Save
                        </jet-button>
                    </div>
                </div>
            </div>
        </div>
        <!--            User edit modal-->
        <div class="form-alert fixed fade-in" v-if="detailuser">
            <div class="form-block bg-white relative flex justify-center pt-8">
                <div class="absolute cursor-pointer" style="right: 15px; top: 15px;" @click="closeUserEdit">
                    <svg width="50" height="50" viewBox="0 0 50 50" fill="#B9B9C3" xmlns="http://www.w3.org/2000/svg">
                        <path d="M38.9596 36.042C39.793 36.8753 39.793 38.1253 38.9596 38.9587C38.543 39.3753 38.1263 39.5837 37.5013 39.5837C36.8763 39.5837 36.4596 39.3753 36.043 38.9587L25.0013 27.917L13.9596 38.9587C13.543 39.3753 13.1263 39.5837 12.5013 39.5837C11.8763 39.5837 11.4596 39.3753 11.043 38.9587C10.2096 38.1253 10.2096 36.8753 11.043 36.042L22.0846 25.0003L11.043 13.9587C10.2096 13.1253 10.2096 11.8753 11.043 11.042C11.8763 10.2087 13.1263 10.2087 13.9596 11.042L25.0013 22.0837L36.043 11.042C36.8763 10.2087 38.1263 10.2087 38.9596 11.042C39.793 11.8753 39.793 13.1253 38.9596 13.9587L27.918 25.0003L38.9596 36.042Z"
                              fill="#B9B9C3"/>
                        <mask mask-type="alpha" maskUnits="userSpaceOnUse" x="10" y="10" width="30" height="30">
                            <path d="M38.9596 36.042C39.793 36.8753 39.793 38.1253 38.9596 38.9587C38.543 39.3753 38.1263 39.5837 37.5013 39.5837C36.8763 39.5837 36.4596 39.3753 36.043 38.9587L25.0013 27.917L13.9596 38.9587C13.543 39.3753 13.1263 39.5837 12.5013 39.5837C11.8763 39.5837 11.4596 39.3753 11.043 38.9587C10.2096 38.1253 10.2096 36.8753 11.043 36.042L22.0846 25.0003L11.043 13.9587C10.2096 13.1253 10.2096 11.8753 11.043 11.042C11.8763 10.2087 13.1263 10.2087 13.9596 11.042L25.0013 22.0837L36.043 11.042C36.8763 10.2087 38.1263 10.2087 38.9596 11.042C39.793 11.8753 39.793 13.1253 38.9596 13.9587L27.918 25.0003L38.9596 36.042Z"
                                  fill="white"/>
                        </mask>
                    </svg>
                </div>
                <div class="2xl:pb-20 xl:pb-16 pb-8 pt-4 text-center w-full">
                    <p class="2xl:text-4xl xl:text-3xl text-2xl font-bold mb-5" style="color:#5E5873;">
                        Edit user
                    </p>
                    <div class="w-full px-4">
                        <div class="w-full mb-3 px-2">
                            <label for="">Name</label>
                            <jet-input type="text" class="mt-2 block w-full border-0 h-12" style="background-color: #F9F9F9; border-radius: 0px;" v-model="userEdit.name" required placeholder="User name" />
                        </div>
                        <div class="w-full mb-3 px-2">
                            <label for="">Email</label>
                            <jet-input type="text" class="mt-2 block w-full border-0 h-12" style="background-color: #F9F9F9; border-radius: 0px;" v-model="userEdit.email" required placeholder="User email" />
                        </div>
                        <div class="w-full mb-3 px-2">
                            <label for="">Password </label>
                            <jet-input type="text" class="mt-2 block w-full border-0 h-12" style="background-color: #F9F9F9; border-radius: 0px;" v-model="userPassword" required placeholder="User password" />
                        </div>
                        <div class="w-full mb-3 px-2">
                            <label for="">Phone </label>
                            <jet-input type="text" class="mt-2 block w-full border-0 h-12" style="background-color: #F9F9F9; border-radius: 0px;" v-model="userEdit.phone" required placeholder="User phone" />
                        </div>
                        <div class="w-full mb-3 px-2">
                            <label for="">Job title </label>
                            <jet-input type="text" class="mt-2 block w-full border-0 h-12" style="background-color: #F9F9F9; border-radius: 0px;" v-model="userEdit.job_title" required placeholder="Job title" />
                        </div>
                        <jet-button class="mt-4 px-12 py-4 normal-case" style="background-color: #1B3C5D; font-size: 20px; border-radius: 0px; font-weight: 500; letter-spacing: 0px" v-on:click="SaveUser(userEdit)">
                            Save
                        </jet-button>
                    </div>
                </div>
            </div>
        </div>
        <div class="backdrop fixed" v-if="detailuser"></div>
    </div>
</template>

<script>
    import JetInput from '@/Jetstream/Input'
    import JetButton from '@/Jetstream/Button'
    import Swal from 'sweetalert2'
    export default {
        components: {
            JetButton,
            JetInput,
        },
        name: "HomeSuperAdmin",
        props:[
            'comps'
        ],
        data: function (){
            return {
                storage_url: window.location.origin,
                search: null,
                companies: this.comps,
                detail: null,
                detailuser: null,
                userEdit: {
                    id: '',
                    name: '',
                    email: '',
                    password: '',
                    phone: '',
                    job_title: ''
                },
                userPassword: null,
                companyPassword: null,
                pay_date: null,
                end_date: null,
                companyEdit: {
                    title: '',
                    name : '',
                    email: '',
                    pay_date: '',
                    end_date: '',
                    phone: '',
                    job_title: '',

                },
            }
        },
        methods: {
            changeStatus: function (company) {
                if (company.status == 0){
                Swal.fire({
                    title: 'Do you want to disable company?',
                    showCancelButton: true,
                    confirmButtonText: `Disable`,
                }).then((result) => {
                    /* Read more about isConfirmed, isDenied below */
                    if (result.isConfirmed) {
                        axios.get('/CompanyStatus/' + company.id).then(response =>{
                            Swal.fire({
                                text: 'Company has been disabled',
                                backdrop: false,
                                showConfirmButton: false,
                                timer: 1500,
                                position: 'top-end',
                                background: '#dd5e55'
                            });
                            this.companies[this.companies.indexOf(company)].status = !company.status;
                        });


                    }
                });
                }
                else
                {
                    Swal.fire({
                        title: 'Do you want to activate company?',
                        showCancelButton: true,
                        confirmButtonText: `Activate`,
                    }).then((result) => {
                        /* Read more about isConfirmed, isDenied below */
                        if (result.isConfirmed) {
                            axios.get('/CompanyStatus/' + company.id).then(response =>{
                                Swal.fire({
                                    text: 'Company is active',
                                    backdrop: false,
                                    showConfirmButton: false,
                                    timer: 1500,
                                    position: 'top-end',
                                    background: '#87DDA0'
                                });
                                this.companies[this.companies.indexOf(company)].status = !company.status;
                            })
                        }
                    });


                }
            },

            SearchCompany: function () {
                axios.post('/search/company', {
                    search: this.search,
                    pay_date: this.pay_date,
                    end_date: this.end_date,
                }).then(response =>{
                    this.companies = response.data;
                });
            },

            setDetail(company){
                if (this.detail === company.id ){
                    this.detail = null;
                    this.companyEdit.title = '';
                    this.companyEdit.name = '';
                    this.companyEdit.email = '';
                    this.companyEdit.pay_date = '';
                    this.companyEdit.end_date = '';
                    this.companyEdit.phone = '';
                    this.companyEdit.job_title = '';
                }
                else {
                    this.companyEdit.title = company.title;
                    this.companyEdit.name = company.owner.name;
                    this.companyEdit.email = company.owner.email;
                    this.companyEdit.pay_date = company.pay_date;
                    this.companyEdit.end_date = company.end_date;
                    this.companyEdit.phone = company.owner.phone;
                    this.companyEdit.job_title = company.owner.job_title;
                    this.detail = company.id;
                }
            },

            setUserEdit(user, index) {
                    this.userEdit.id = user.id;
                    this.userEdit.index = index;
                    this.userEdit.name = user.name;
                    this.userEdit.email = user.email;
                    this.userEdit.password = user.password;
                    this.userEdit.phone = user.phone;
                    this.userEdit.job_title = user.job_title;
                    this.detailuser = user.id;
            },

            closeUserEdit() {
                this.detailuser = null;
                this.userEdit.id = null;
                this.userEdit.index = null;
                this.userEdit.name = null;
                this.userEdit.email = null;
                this.userEdit.password = null;
                this.userEdit.phone = null;
                this.userEdit.job_title = null;
            },

            Renew(company, index, id){
                axios.post('/renew', {
                    'company':company,
                    'id': id
                }).then(response =>{
                    Swal.fire({
                        text: 'Changes saved',
                        backdrop: false,
                        showConfirmButton: false,
                        timer: 1500,
                        position: 'top-end',
                        background: '#87DDA0'
                    });
                    this.companies[index] = response.data;
                });
            },

            SaveUser(user) {
                axios.post('/UpdateUser', {
                    'user':user,
                }).then(response =>{
                    Swal.fire({
                        text: 'Changes saved',
                        backdrop: false,
                        showConfirmButton: false,
                        timer: 1500,
                        position: 'top-end',
                        background: '#87DDA0'
                    });
                    this.companies[user.index] = response.data;
                    this.closeUserEdit();
                });
            }
        }
    }
</script>

<style scoped>
    .form-alert {
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 100;
    }

    .form-alert .form-block {
        width: 550px;
    }

    .backdrop {
        top: 0%;
        left: 0%;
        width: 100%;
        height: 100%;
        background-color: #000000;
        opacity: 0.5;
        z-index: 50;
    }
</style>
