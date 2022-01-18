<template>
    <nav class="" style="background: #1B3C5D!important;">
        <!-- Primary Navigation Menu -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <!-- Logo -->
                    <div class="flex-shrink-0 flex items-center">
                        <inertia-link :href="route('dashboard')">
                            <jet-application-mark class="block w-auto" />
                        </inertia-link>
                    </div>

                    <!-- Navigation Links -->
                    <!--<div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">-->
                    <!--<jet-nav-link :href="route('dashboard')" :active="route().current('dashboard')">-->
                    <!--Dashboard-->
                    <!--</jet-nav-link>-->
                    <!--</div>-->
                </div>

                <div class="sm:flex sm:items-center sm:ml-6">
                    <div class="ml-3 relative">
                        <!-- Teams Dropdown -->
                    </div>

                    <!-- Settings Dropdown -->
                    <div class="ml-3 relative flex">
                        <inertia-link :href="route('/')">
                                        <span class="inline-flex rounded-md mr-3">
                                            <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 hover:text-gray-700 focus:outline-none transition">
                                                <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                        <circle cx="13" cy="8" r="5" stroke="white" stroke-width="2"/>
                                                        <path d="M3 23C4.99609 19.4132 8.72693 17 13 17C17.2731 17 21.0039 19.4132 23 23" stroke="white" stroke-width="2"/>
                                                </svg>
                                                <span class="ml-2 regular-white border-b pb-1 font-normal" style="border-color: rgba(255,255,255,0.2); font-family: 'Barlow';">Sign in</span>
                                            </button>
                                        </span>
                        </inertia-link>
                        <div class="ml-4 flex items-center py-2">
                            <jet-dropdown align="left">
                                <template #trigger>
                                    <div class="flex cursor-pointer items-center" v-if="lan === 'en'" v-on:click="!langMenu">
                                        <img style="max-width:26px; height: auto;" :src="storage_url + '/image/uk.png'" alt="">
                                        <p class="mx-2 regular-white border-b" style="border-color: rgba(255,255,255,0.2);">
                                            English
                                        </p>
                                        <svg width="13" height="8" viewBox="0 0 13 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M6.50002 5.96813L1.45991 0L0.483887 0.816018L6.50002 7.93617L12.5161 0.816018L11.5401 0L6.50002 5.96813Z" fill="white"/>
                                        </svg>
                                    </div>
                                    <div class="flex cursor-pointer items-center" v-if="lan === 'fr'" v-on:click="!langMenu">
                                        <img style="max-width:28px; height: auto;" :src="storage_url + '/image/fr.png'" alt="">
                                        <p class="mx-2 regular-white border-b" style="border-color: rgba(255,255,255,0.2);">
                                            French
                                        </p>
                                        <svg width="13" height="8" viewBox="0 0 13 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M6.50002 5.96813L1.45991 0L0.483887 0.816018L6.50002 7.93617L12.5161 0.816018L11.5401 0L6.50002 5.96813Z" fill="white"/>
                                        </svg>
                                    </div>
                                    <div class="flex cursor-pointer items-center" v-if="lan === 'pt'" v-on:click="!langMenu">
                                        <img style="max-width:28px; height: auto;" :src="storage_url + '/image/pt.png'" alt="">
                                        <p class="mx-2 regular-white border-b" style="border-color: rgba(255,255,255,0.2);">
                                            Portuguese
                                        </p>
                                        <svg width="13" height="8" viewBox="0 0 13 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M6.50002 5.96813L1.45991 0L0.483887 0.816018L6.50002 7.93617L12.5161 0.816018L11.5401 0L6.50002 5.96813Z" fill="white"/>
                                        </svg>
                                    </div>
                                    <div class="flex cursor-pointer items-center" v-if="lan === 'es'" v-on:click="!langMenu">
                                        <img style="max-width:28px; height: auto;" :src="storage_url + '/image/es.png'" alt="">
                                        <p class="mx-2 regular-white border-b" style="border-color: rgba(255,255,255,0.2);">
                                            Spanish
                                        </p>
                                        <svg width="13" height="8" viewBox="0 0 13 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M6.50002 5.96813L1.45991 0L0.483887 0.816018L6.50002 7.93617L12.5161 0.816018L11.5401 0L6.50002 5.96813Z" fill="white"/>
                                        </svg>
                                    </div>
                                </template>
                                <template #content>
                                    <div class="p-3">
                                        <div class="flex mb-1 cursor-pointer lang-switcher" data-google-lang="fr" v-bind:class="{'hidden':lan === 'fr'}">
                                            <img style="max-width:28px; height: auto;" :src="storage_url + '/image/fr.png'" alt="">
                                            <p class="ml-2 regular-text border-b">
                                                French
                                            </p>
                                        </div>
                                        <div class="flex mb-1 cursor-pointer lang-switcher" data-google-lang="en" v-bind:class="{'hidden':lan === 'en'}">
                                            <img style="max-width:28px; height: auto;" :src="storage_url + '/image/uk.png'" alt="">
                                            <p class="ml-2 regular-text border-b">
                                                English
                                            </p>
                                        </div>
                                        <div class="flex mb-1 cursor-pointer lang-switcher" data-google-lang="pt" v-bind:class="{'hidden':lan === 'pt'}">
                                            <img style="max-width:28px; height: auto;" :src="storage_url + '/image/pt.png'" alt="">
                                            <p class="ml-2 regular-text border-b">
                                                Portuguese
                                            </p>
                                        </div>
                                        <div class="flex cursor-pointer lang-switcher" data-google-lang="es" v-bind:class="{'hidden':lan === 'es'}">
                                            <img style="max-width:28px; height: auto;" :src="storage_url + '/image/es.png'" alt="">
                                            <p class="ml-2 regular-text border-b">
                                                Spanish
                                            </p>
                                        </div>
                                    </div>
                                </template>
                            </jet-dropdown>
                        </div>
                    </div>
                </div>

                <!-- Hamburger -->

            </div>
        </div>

        <!-- Responsive Navigation Menu -->
    </nav>
    <jet-authentication-card style="background: #1B3C5D!important;">
        <template #logo>
            <jet-authentication-card-logo />
        </template>

        <jet-validation-errors class="mb-4" />
        <div class="w-full max-w-2xl mt-6 px-24 py-10 bg-white overflow-hidden">
        <form @submit.prevent="submit">
            <div>
                <h1 class="text-center font-bold main-title mb-6">
                    Create account
                </h1>
            </div>
            <div>
                <jet-input id="name" type="text" class="mt-2 block w-full border-0 h-14 shadow-none" style="background-color: #F9F9F9; border-radius: 0px;" :value="form.name" required autofocus autocomplete="name" placeholder="Full name" maxlength="50" disabled/>
            </div>

            <div class="mt-5">
                <jet-input id="email" type="email" class="mt-2 block w-full border-0 h-14 shadow-none" style="background-color: #F9F9F9; border-radius: 0px;" :value="form.email" required placeholder="Email" disabled />
            </div>

            <div class="mt-5">
                <jet-input id="phone" type="text" class="mt-2 block w-full border-0 h-14 shadow-none" style="background-color: #F9F9F9; border-radius: 0px;" onkeypress='return event.charCode >= 48 && event.charCode <= 57 || event.charCode === 43'  v-model="form.phone" required placeholder="Phone" />
            </div>

            <div class="mt-5">
                <jet-input id="title" type="text" class="mt-2 block w-full border-0 h-14 shadow-none" style="background-color: #F9F9F9; border-radius: 0px;" v-model="form.title" required placeholder="Job title" />
            </div>

            <div class="mt-5">
                <jet-input id="password" type="password" class="mt-2 block w-full border-0 h-14 shadow-none" style="background-color: #F9F9F9; border-radius: 0px;" v-model="form.password" required autocomplete="new-password"  placeholder="Password" />
            </div>

            <div class="mt-5">
                <jet-input id="password_confirmation" type="password" class="mt-2 block w-full border-0 h-14 shadow-none" style="background-color: #F9F9F9; border-radius: 0px;" v-model="form.password_confirmation" required autocomplete="new-password"  placeholder="Re-enter password" />
            </div>

            <div class="mt-5" v-if="$page.props.jetstream.hasTermsAndPrivacyPolicyFeature">
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

                <jet-button class="mt-4 px-8 py-5 normal-case" style="background-color: #1B3C5D; font-size: 26px; border-radius: 5px; font-weight: 500; letter-spacing: 1px" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Create
                </jet-button>
            </div>
        </form>
        </div>
        <!--<div class="flex items-center justify-center mt-4">-->
            <!--<p class="mb-0 text-base text-white">-->
                <!--By creating an account, you agree to Privacy Notice.-->
            <!--</p>-->
        <!--</div>-->
        <div class="flex items-center justify-center mt-2 mb-10">
            <p class="text-base text-white">
                Already have an account? <inertia-link :href="route('login')" class="hover:text-gray-50 border-b pb-0" style="border-color: rgba(255,255,255,0.2);">Log in</inertia-link> .
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
    import JetApplicationMark from '@/Jetstream/ApplicationMark'
    import JetBanner from '@/Jetstream/Banner'
    import JetDropdown from '@/Jetstream/Dropdown'
    import JetDropdownLink from '@/Jetstream/DropdownLink'
    export default {
        components: {
            JetAuthenticationCard,
            JetAuthenticationCardLogo,
            JetButton,
            JetInput,
            JetCheckbox,
            JetApplicationMark,
            JetBanner,
            JetDropdown,
            JetDropdownLink,
            JetLabel,
            JetValidationErrors
        },
        props: {
            email: Object,
            code: Object,
            name: Object
        },
        data() {
            return {
                form: this.$inertia.form({
                    name: this.name,
                    email: this.email,
                    password: '',
                    phone: '',
                    title: '',
                    password_confirmation: '',
                    terms: false,
                }),
                lan: "en",
                langMenu: false,
                storage_url: window.location.origin,
            }
        },

        methods: {
            submit() {
                this.form.post(this.route('register'), {
                    onFinish: () => this.form.reset('password', 'password_confirmation'),
                })
            }
        }
    }
</script>
