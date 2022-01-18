<template>
    <jet-authentication-card style="background: #1B3C5D!important;">
        <template #logo>
            <jet-authentication-card-logo />
        </template>

        <jet-validation-errors class="mb-4" />
        <div class="w-full max-w-2xl mt-6 px-24 py-10 bg-white shadow-md overflow-hidden">
            <form @submit.prevent="submit">
                <div>
                    <h1 class="text-center font-bold main-title mb-6">
                        Create account
                    </h1>
                </div>
                <div>
                    <jet-input id="name" type="text" class="mt-2 block w-full border-0 h-14" style="background-color: #F9F9F9; border-radius: 0px;" v-model="form.name" required autofocus autocomplete="name" placeholder="Full name" />
                </div>

                <div class="mt-4">
                    <jet-input id="email" type="email" class="mt-2 block w-full border-0 h-14" style="background-color: #F9F9F9; border-radius: 0px;" v-model="form.email" required disabled placeholder="Email" />
                </div>

                <div class="mt-4">
                    <jet-input id="phone" type="text" class="mt-2 block w-full border-0 h-14" style="background-color: #F9F9F9; border-radius: 0px;" v-model="form.phone" required placeholder="Phone" />
                </div>

                <div class="mt-4">
                    <jet-input id="job_title" type="text" class="mt-2 block w-full border-0 h-14" style="background-color: #F9F9F9; border-radius: 0px;" v-model="form.job_title" required placeholder="Job title" />
                </div>

                <div class="mt-4">
                    <jet-input id="password" type="password" class="mt-2 block w-full border-0 h-14" style="background-color: #F9F9F9; border-radius: 0px;" v-model="form.password" required autocomplete="new-password"  placeholder="Password" />
                </div>

                <div class="mt-4">
                    <jet-input id="password_confirmation" type="password" class="mt-2 block w-full border-0 h-14" style="background-color: #F9F9F9; border-radius: 0px;" v-model="form.password_confirmation" required autocomplete="new-password"  placeholder="Re-enter password" />
                </div>

                <div class="mt-4" v-if="$page.props.jetstream.hasTermsAndPrivacyPolicyFeature">
                    <jet-label for="terms">
                        <div class="flex items-center">
                            <jet-checkbox name="terms" id="terms" v-model:checked="form.terms" />

                            <div class="ml-2">
                                I agree to the <a target="_blank" :href="route('terms.show')" class="underline text-sm text-gray-600 hover:text-gray-900">Terms of Service</a> and <a target="_blank" :href="route('policy.show')" class="underline text-sm text-gray-600 hover:text-gray-900">Privacy Policy</a>
                            </div>
                        </div>
                    </jet-label>
                </div>
                <div class="flex items-center justify-center mt-8">
                    <!--<inertia-link :href="route('login')" class="underline text-sm text-gray-600 hover:text-gray-900">-->
                    <!--Already registered?-->
                    <!--</inertia-link>-->

                    <jet-button class="mt-4 px-8 py-5 normal-case" style="background-color: #1B3C5D; border-radius: 5px; font-weight: 500; font-size: 26px;" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                        Create
                    </jet-button>
                </div>
            </form>
        </div>
        <div class="flex items-center justify-center mt-4">
            <p class="mb-0 text-base text-white">
                By creating an account, you agree to Privacy Notice.
            </p>
        </div>
        <div class="flex items-center justify-center mt-2 mb-10">
            <p class="text-base text-white">
                Already have an account? <inertia-link :href="route('login')" class="hover:text-gray-600 border-b pb-0" style="border-color: rgba(255,255,255,0.2);">Log in</inertia-link> .
            </p>
        </div>
    </jet-authentication-card>
</template>

<script>
    import JetAuthenticationCard from '@/Jetstream/AuthenticationCard'
    import JetAuthenticationCardLogo from '@/Jetstream/AuthenticationCardLogo'
    import JetButton from '@/Jetstream/Button'
    import JetInput from '@/Jetstream/Input'
    import JetCheckbox from "@/Jetstream/Checkbox";
    import JetLabel from '@/Jetstream/Label'
    import JetValidationErrors from '@/Jetstream/ValidationErrors'

    export default {
        components: {
            JetAuthenticationCard,
            JetAuthenticationCardLogo,
            JetButton,
            JetInput,
            JetCheckbox,
            JetLabel,
            JetValidationErrors
        },
        props: {
            email: Object,
            id: Object,
            code: Object
        },
        data() {
            return {
                form: this.$inertia.form({
                    name: '',
                    email: this.email,
                    phone: '',
                    job_title: '',
                    password: '',
                    password_confirmation: '',
                    terms: false,
                    company: this.id,
                    code: this.code,
                })
            }
        },

        methods: {
            submit() {
                this.form.post(this.route('register/user'), {
                    onFinish: () => this.form.reset('password', 'password_confirmation'),
                })
            }
        }
    }
</script>

<style scoped>

</style>
