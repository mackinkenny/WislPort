<template>
    <app-layout>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <Menu :status="isAdmin" :menuActive="3" />
                <div class="container">
                    <div class="flex">
                        <div class="w-7/12 p-3">
                            <div class="bg-white py-10 px-10 mb-8">
                                <div>
                                    <h2 class="text-left font-bold main-title mb-3">
                                        {{ __('Members') }}
                                    </h2>
                                </div>
                                <div class="text-left" v-if="company.users.length">
                                    <p class="regular-text font-normal mb-3">
                                        {{ __('List of invited participants:') }}
                                    </p>
                                    <div class="rounded-lg px-8 py-5 mt-3" v-for="member in company.users" style="background-color: rgba(91,148,221,0.05);">
                                        <div class="mb-3">
                                            <p class="label-text">
                                                {{ __('name') }}
                                            </p>
                                            <p class="regular-text font-bold">
                                                {{member.name}}
                                            </p>
                                        </div>
                                        <div class="flex">
                                            <div class="w-6/12">
                                                <div class="mb-5">
                                                    <p class="label-text">
                                                        email
                                                    </p>
                                                    <p class="regular-text font-normal">
                                                        {{member.email}}
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="w-6/12">
                                                <div class="mb-5">
                                                    <p class="label-text">
                                                        {{ __('password') }}
                                                    </p>
                                                    <p class="regular-text font-normal">
                                                        *************
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-5/12 p-3">
                            <div class="bg-white py-10 px-10 mb-8">
                                <div>
                                    <h2 class="text-left font-bold main-title mb-3">
                                        {{ __('Invitation') }}
                                    </h2>
                                </div>
                                <div class="text-left">
                                    <p class="regular-text font-normal mb-3">
                                        {{ __('You can add one user roles who will be able to access and amend an open report.') }}
                                    </p>
                                </div>
                                <div class="text-left my-4">
                                    <p class="regular-text  font-bold">
                                        {{ __('Active invites:') }}
                                    </p>
                                    <div class="mt-2">
                                        <div  v-for="invite in company.invites">
                                        <div class="flex" v-if="!invite.status">
                                            <div class="w-9/12 pr-3">
                                                <p class="font-base">
                                                    {{invite.email}}
                                                </p>
                                            </div>
                                            <div class="w-3/12 flex align-middle pt-2">
                                                <i class="fas fa-times hover:text-red-500 cursor-pointer" v-on:click="deleteInvite(invite)"></i>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-left" v-if="(company.invites.length + company.users.length) < 3">
                                    <form @submit.prevent="submit" class="" v-if="invite == true">
                                        <jet-input id="email" type="email" class="mt-2 block w-full border-0 h-14" style="background-color: #F9F9F9; border-radius: 0px;" v-model="email" required autofocus autocomplete="name" placeholder="Email" />
                                        <jet-button class="px-5 py-3 normal-case mt-3"  style="background-color: #1B3C5D; font-size: 20px; border-radius: 0px; font-weight: 500;">
                                            {{ __('Send invite') }}
                                        </jet-button>
                                    </form>
                                    <jet-button class="px-10 py-3 normal-case mt-3" v-else  v-on:click="invite = true"  style="background-color: #1B3C5D; font-size: 20px; border-radius: 0px; font-weight: 500;">
                                        {{ __('To invite') }}
                                    </jet-button>
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
    import JetInput from '@/Jetstream/Input'
    import Swal from 'sweetalert2'

    export default {
        name: "Main",
        components: {
            AppLayout,
            JetButton,
            Menu,
            JetInput,
        },
        props: {
            'status': Object,
            'company': Object,
            'isAdmin': Object
        },
        data: function () {
            return {
                invite: false,
                email: null
            }
        },

        methods: {
            submit(){
                axios.post('/sendInvite', {
                    'email': this.email,
                    'id': this.company.id
                }).then(response => {
                    if (response.data.error){
                        Swal.fire({
                            text: 'This email is already used',
                            backdrop: false,
                            showConfirmButton: false,
                            timer: 1500,
                            position: 'top-end',
                            background: '#dd5e55'
                        });
                    }
                   if (response.data.status){
                       this.company.invites = response.data.invites;
                       Swal.fire({
                           text: 'Invite has been sent',
                           backdrop: false,
                           showConfirmButton: false,
                           timer: 1500,
                           position: 'top-end',
                           background: '#87DDA0'
                       });
                   }
                   this.invite = false;
                });
            },

            deleteInvite: function (invite) {
                axios.post('/deleteInvite', {
                    'id': invite.id
                }).then(response => {
                    if (response.data.status){
                        this.company.invites.splice(this.company.invites.indexOf(invite), 1);
                        Swal.fire({
                            text: 'Invite has been deleted',
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
