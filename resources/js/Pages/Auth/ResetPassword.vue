<template>
    <jet-authentication-card style="background: #1B3C5D!important;">
        <template #logo>
            <jet-authentication-card-logo />
        </template>
        <div class="w-full max-w-2xl mt-6 px-24 py-10 bg-white shadow-md overflow-hidden">
        <jet-validation-errors class="mb-4" />

        <form @submit.prevent="submit">
            <div>
                <h1 class="text-center font-bold main-title mb-6">
                    Reset Password
                </h1>
            </div>
            <div>
                <!--<jet-label for="email" value="Email" />-->
                <jet-input id="email" type="email"  class="mt-2 block w-full border-0 h-12" style="background-color: #F9F9F9; border-radius: 0px;" v-model="form.email" required placeholder="Email" />
            </div>

            <div class="mt-4">
                <!--<jet-label for="password" value="Password" />-->
                <jet-input id="password" type="password" class="mt-2 block w-full border-0 h-12" style="background-color: #F9F9F9; border-radius: 0px;" v-model="form.password" required autocomplete="new-password" placeholder="Password" />
            </div>

            <div class="mt-4">
                <!--<jet-label for="password_confirmation" value="Confirm Password" />-->
                <jet-input id="password_confirmation" type="password"  class="mt-2 block w-full border-0 h-12" style="background-color: #F9F9F9; border-radius: 0px;" v-model="form.password_confirmation" required autocomplete="new-password" placeholder="Confirm Password"  />
            </div>

            <div class="flex items-center justify-end mt-4">
                <jet-button :class="{ 'opacity-25': form.processing }" style="background-color: #1B3C5D; border-radius: 5px; font-weight: 500;" :disabled="form.processing">
                    Reset Password
                </jet-button>
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
            email: String,
            token: String,
        },

        data() {
            return {
                form: this.$inertia.form({
                    token: this.token,
                    email: this.email,
                    password: '',
                    password_confirmation: '',
                })
            }
        },

        methods: {
            submit() {
                this.form.post(this.route('password.update'), {
                    onFinish: () => this.form.reset('password', 'password_confirmation'),
                })
            }
        }
    }
</script>
