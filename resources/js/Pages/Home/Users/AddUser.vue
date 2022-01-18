<template>
    <div class="container">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="container">
                    <div class="flex justify-center">
                        <form @submit.prevent="submit" class="w-7/12 bg-white py-6 px-5 mb-8 relative">
                            <div class="absolute left-4 top-4">
                                <inertia-link :href="route('dashboard')">
                                    Return to list
                                </inertia-link>
                            </div>
                            <div>
                                <h2 class="text-center font-bold main-title mb-10">
                                    Add new User
                                </h2>
                            </div>
                            <div class="px-5 flex flex-wrap">
                                <div class="w-1/2 pr-2">
                                <div>
                                    <label for="">Full name</label>
                                    <jet-input id="name" type="text" class="mt-2 block w-full border-0 h-14 shadow-none" style="background-color: #F9F9F9; border-radius: 0px;" v-model="form.name" required placeholder="Full name" maxlength="50"/>
                                </div>

                                <div class="mt-5">
                                    <label for="">Email</label>
                                    <jet-input id="email" type="email" class="mt-2 block w-full border-0 h-14 shadow-none" style="background-color: #F9F9F9; border-radius: 0px;" v-model="form.email" required placeholder="Email" />
                                </div>

                                <div class="mt-5">
                                    <label for="">Phone</label>
                                    <jet-input id="phone" type="text" class="mt-2 block w-full border-0 h-14 shadow-none" style="background-color: #F9F9F9; border-radius: 0px;" onkeypress='return event.charCode >= 48 && event.charCode <= 57 || event.charCode === 43'  v-model="form.phone" required placeholder="Phone" />
                                </div>

                                <div class="mt-5">
                                    <label for="">Company</label>
                                    <jet-input id="title" type="text" class="mt-2 block w-full border-0 h-14 shadow-none" style="background-color: #F9F9F9; border-radius: 0px;" v-model="form.title" required placeholder="Company" />
                                </div>
                                    <div class="mt-5">
                                        <label for="">Job title</label>
                                        <jet-input id="job_title" type="text" class="mt-2 block w-full border-0 h-14 shadow-none" style="background-color: #F9F9F9; border-radius: 0px;" v-model="form.job_title" required placeholder="Job title" />
                                    </div>
                                </div>
                                <div class="w-1/2 pl-2">
                                <div>
                                    <label for="">Pay date</label>
                                    <jet-input type="date" class="mt-2 block w-full border-0 h-14 shadow-none" style="background-color: #F9F9F9; border-radius: 0px;" v-model="form.pay_date" required placeholder="Pay date" />
                                </div>
                                <div class="mt-5">
                                    <label for="">End date</label>
                                    <jet-input type="date" class="mt-2 block w-full border-0 h-14 shadow-none" style="background-color: #F9F9F9; border-radius: 0px;" v-model="form.end_date" required placeholder="Pay date" />
                                </div>
                                <div class="mt-5">
                                    <label for="">Password</label>
                                    <jet-input id="password" type="password" class="mt-2 block w-full border-0 h-14 shadow-none" style="background-color: #F9F9F9; border-radius: 0px;" v-model="form.password" required autocomplete="new-password"  placeholder="Password" />
                                </div>

                                <div class="mt-5">
                                    <label for="">Re-enter password</label>
                                    <jet-input id="password_confirmation" type="password" class="mt-2 block w-full border-0 h-14 shadow-none" style="background-color: #F9F9F9; border-radius: 0px;" v-model="form.password_confirmation" required autocomplete="new-password"  placeholder="Re-enter password" />
                                </div>
                                    <div class="mt-5">
                                        <div class="flex justify-center items-end mt-8">
                                            <jet-button :class="{ 'opacity-25': form.processing }"
                                                        :disabled="form.processing"
                                                        class="mt-5 px-8 py-5 w-full normal-case" style="background-color: #1B3C5D; font-size: 26px; border-radius: 5px; font-weight: 500; letter-spacing: 1px">
                                                Create
                                            </jet-button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <jet-validation-errors class="my-4 text-center" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import JetButton from "@/Jetstream/Button";
    import JetInput from "@/Jetstream/Input";
    import JetValidationErrors from '@/Jetstream/ValidationErrors'

    export default {
        name: "AddUser",
        components: {
            JetButton,
            JetInput,
            JetValidationErrors
        },
        data: function () {
            return {
                form: this.$inertia.form({
                    name: '',
                    email: '',
                    password: '',
                    password_confirmation: '',
                    phone: '',
                    title: '',
                    job_title: '',
                    pay_date: '',
                    end_date: '',
                })
            }
        },

        methods: {
            submit() {
                this.form.post(this.route('storeUser'), {
                    onFinish: () => this.form.reset('password', 'password_confirmation'),
                })
            }
        }
    }
</script>

<style scoped>

</style>
