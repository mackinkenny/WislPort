<template>
    <jet-authentication-card style="background: #1B3C5D!important;">
        <template #logo>
            <jet-authentication-card-logo />
        </template>
        <div class="w-full max-w-2xl mt-6 px-24 py-10 bg-white shadow-md overflow-hidden">
        <div class="mb-4 text-sm text-gray-600">
            Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.
        </div>

        <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
            {{ status }}
        </div>

        <jet-validation-errors class="mb-4" />

        <form @submit.prevent="submit">
            <div>
                <!--<jet-label for="email" value="Email" />-->
                <jet-input id="email" type="email" class="mt-2 block w-full border-0 h-12" style="background-color: #F9F9F9; border-radius: 0px;" v-model="form.email" required placeholder="Email" />
            </div>

            <div class="flex items-center justify-center mt-4">
                <jet-button style="background-color: #1B3C5D; border-radius: 5px; font-weight: 500;" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Reset password
                </jet-button>
            </div>
            <div class="mt-4 flex justify-center">
            <inertia-link :href="route('login')" class="no-underline hover:text-gray-600">
                <p class="regular-text font-normal mb-0">back to login</p>
            </inertia-link>
            </div>
        </form>
        </div>
    </jet-authentication-card>
</template>

<script>
    import JetAuthenticationCard from '@/Jetstream/AuthenticationCard'
    import JetAuthenticationCardLogo from '@/Jetstream/AuthenticationCardLogo'
    import JetButton from '@/Jetstream/Button'
    import JetInput from '@/Jetstream/Input'
    import JetLabel from '@/Jetstream/Label'
    import JetValidationErrors from '@/Jetstream/ValidationErrors'

    export default {
        components: {
            JetAuthenticationCard,
            JetAuthenticationCardLogo,
            JetButton,
            JetInput,
            JetLabel,
            JetValidationErrors
        },

        props: {
            status: String
        },

        data() {
            return {
                form: this.$inertia.form({
                    email: ''
                })
            }
        },

        methods: {
            submit() {
                this.form.post(this.route('password.email'))
            }
        }
    }
</script>
