<template>
    <div>
        <jet-banner />

        <div class="min-h-screen">
            <nav style="background: #1B3C5D;">
                <!-- Primary Navigation Menu -->
                <div class="max-w-7xl mx-auto px-4 py-3 sm:px-6 lg:px-8">
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

                        <div class="hidden sm:flex sm:items-center sm:ml-6">
                            <div class="ml-3 relative">
                                <!-- Teams Dropdown -->
                                <jet-dropdown align="right" width="60" v-if="$page.props.jetstream.hasTeamFeatures">
                                    <template #trigger>
                                        <span class="inline-flex rounded-md">
                                            <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:bg-gray-50 hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition">
                                                <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                        <circle cx="13" cy="8" r="5" stroke="black" stroke-width="2"/>
                                                        <path d="M3 23C4.99609 19.4132 8.72693 17 13 17C17.2731 17 21.0039 19.4132 23 23" stroke="black" stroke-width="2"/>
                                                </svg>
                                                {{ $page.props.user.current_team.name }}

                                                <!--<svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">-->
                                                    <!--<path fill-rule="evenodd" d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />-->
                                                <!--</svg>-->
                                            </button>
                                        </span>
                                    </template>

                                    <template #content>
                                        <div class="w-60">
                                            <!-- Team Management -->
                                            <template v-if="$page.props.jetstream.hasTeamFeatures">
                                                <div class="block px-4 py-2 text-xs text-gray-400">
                                                    Manage Team
                                                </div>

                                                <!-- Team Settings -->
                                                <jet-dropdown-link :href="route('teams.show', $page.props.user.current_team)">
                                                    Team Settings
                                                </jet-dropdown-link>

                                                <jet-dropdown-link :href="route('teams.create')" v-if="$page.props.jetstream.canCreateTeams">
                                                    Create New Team
                                                </jet-dropdown-link>

                                                <div class="border-t border-gray-100"></div>

                                                <!-- Team Switcher -->
                                                <div class="block px-4 py-2 text-xs text-gray-400">
                                                    Switch Teams
                                                </div>

                                                <template v-for="team in $page.props.user.all_teams" :key="team.id">
                                                    <form @submit.prevent="switchToTeam(team)">
                                                        <jet-dropdown-link as="button">
                                                            <div class="flex items-center">
                                                                <svg v-if="team.id == $page.props.user.current_team_id" class="mr-2 h-5 w-5 text-green-400" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                                                <div>{{ team.name }}</div>
                                                            </div>
                                                        </jet-dropdown-link>
                                                    </form>
                                                </template>
                                            </template>
                                        </div>
                                    </template>
                                </jet-dropdown>
                            </div>

                            <!-- Settings Dropdown -->
                            <div class="ml-3 relative flex">
                                <jet-dropdown align="right" width="48">
                                    <template #trigger>
                                        <button v-if="$page.props.jetstream.managesProfilePhotos" class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                            <img class="h-8 w-8 rounded-full object-cover" :src="$page.props.user.profile_photo_url" :alt="$page.props.user.name" />
                                        </button>

                                        <span v-else class="inline-flex rounded-md">
                                            <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 hover:text-gray-700 focus:outline-none transition">
                                                <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                        <circle cx="13" cy="8" r="5" stroke="white" stroke-width="2"/>
                                                        <path d="M3 23C4.99609 19.4132 8.72693 17 13 17C17.2731 17 21.0039 19.4132 23 23" stroke="white" stroke-width="2"/>
                                                </svg>
                                                <span class="ml-2 regular-white border-b pb-1 font-normal" style="border-color: rgba(255,255,255,0.2); font-family: 'Barlow';">{{ $page.props.user.name }}</span>
                                            </button>
                                        </span>
                                    </template>

                                    <template #content>
                                        <!-- Account Management -->
                                        <div class="block px-4 py-2 text-xs text-gray-400">
                                           {{ __('Manage Account') }}
                                        </div>

                                        <jet-dropdown-link :href="route('profile.show')">
                                            Profile
                                        </jet-dropdown-link>

                                        <jet-dropdown-link :href="route('api-tokens.index')" v-if="$page.props.jetstream.hasApiFeatures">
                                            API Tokens
                                        </jet-dropdown-link>

                                        <div class="border-t border-gray-100"></div>

                                        <!-- Authentication -->
                                        <form @submit.prevent="logout">
                                            <jet-dropdown-link as="button">
                                                {{ __('Log Out') }}
                                            </jet-dropdown-link>
                                        </form>
                                    </template>
                                </jet-dropdown>

                                <div class="ml-4 flex items-center" v-if="!route().current('profile.show') && $page.props.user.roles[0].name !== 'SuperAdmin'">
                                    <jet-dropdown align="left">
                                        <template #trigger>
                                        <div class="flex cursor-pointer items-center" v-if="lan === 'en'" v-on:click="!langMenu">
                                        <img style="max-width:28px; height: auto;" :src="storage_url + '/image/uk.png'" alt="">
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
                                            <div class="flex mb-1 cursor-pointer" @click="setLang('fr')" v-bind:class="{'hidden':lan === 'fr'}">
                                                <img style="max-width:28px; height: auto;" :src="storage_url + '/image/fr.png'" alt="">
                                                <p class="ml-2 regular-text border-b">
                                                    French
                                                </p>
                                            </div>
                                            <div class="flex mb-1 cursor-pointer" @click="setLang('en')" v-bind:class="{'hidden':lan === 'en'}">
                                                <img style="max-width:28px; height: auto;" :src="storage_url + '/image/uk.png'" alt="">
                                                <p class="ml-2 regular-text border-b">
                                                    English
                                                </p>
                                            </div>
                                            <div class="flex mb-1 cursor-pointer" @click="setLang('pt')" v-bind:class="{'hidden':lan === 'pt'}">
                                                <img style="max-width:28px; height: auto;" :src="storage_url + '/image/pt.png'" alt="">
                                                <p class="ml-2 regular-text border-b">
                                                    Portuguese
                                                </p>
                                            </div>
                                            <div class="flex cursor-pointer" @click="setLang('es')" v-bind:class="{'hidden':lan === 'es'}">
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
                        <div class="-mr-2 flex items-center sm:hidden">
                            <button @click="showingNavigationDropdown = ! showingNavigationDropdown" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition">
                                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                    <path :class="{'hidden': showingNavigationDropdown, 'inline-flex': ! showingNavigationDropdown }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                    <path :class="{'hidden': ! showingNavigationDropdown, 'inline-flex': showingNavigationDropdown }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Responsive Navigation Menu -->
                <div :class="{'block': showingNavigationDropdown, 'hidden': ! showingNavigationDropdown}" class="sm:hidden">
                    <div class="pt-2 pb-3 space-y-1">
                        <!--<jet-responsive-nav-link :href="route('dashboard')" :active="route().current('dashboard')">-->
                            <!--Dashboard-->
                        <!--</jet-responsive-nav-link>-->
                    </div>

                    <!-- Responsive Settings Options -->
                    <div class="pt-4 pb-1 border-t border-gray-200">
                        <div class="flex items-center px-4">
                            <div v-if="$page.props.jetstream.managesProfilePhotos" class="flex-shrink-0 mr-3" >
                                <img class="h-10 w-10 rounded-full object-cover" :src="$page.props.user.profile_photo_url" :alt="$page.props.user.name" />
                            </div>

                            <div>
                                <div class="font-medium text-base text-gray-800">{{ $page.props.user.name }}</div>
                                <div class="font-medium text-sm text-gray-500">{{ $page.props.user.email }}</div>
                            </div>
                        </div>

                        <div class="mt-3 space-y-1">
                            <jet-responsive-nav-link :href="route('profile.show')" :active="route().current('profile.show')">
                                Profile
                            </jet-responsive-nav-link>

                            <jet-responsive-nav-link :href="route('api-tokens.index')" :active="route().current('api-tokens.index')" v-if="$page.props.jetstream.hasApiFeatures">
                                API Tokens
                            </jet-responsive-nav-link>

                            <!-- Authentication -->
                            <form method="POST" @submit.prevent="logout">
                                <jet-responsive-nav-link as="button">
                                    {{ __('Log Out') }}

                                </jet-responsive-nav-link>
                            </form>

                            <!-- Team Management -->
                            <template v-if="$page.props.jetstream.hasTeamFeatures">
                                <div class="border-t border-gray-200"></div>

                                <div class="block px-4 py-2 text-xs text-gray-400">
                                    Manage Team
                                </div>

                                <!-- Team Settings -->
                                <jet-responsive-nav-link :href="route('teams.show', $page.props.user.current_team)" :active="route().current('teams.show')">
                                    Team Settings
                                </jet-responsive-nav-link>

                                <jet-responsive-nav-link :href="route('teams.create')" :active="route().current('teams.create')">
                                    Create New Team
                                </jet-responsive-nav-link>

                                <div class="border-t border-gray-200"></div>

                                <!-- Team Switcher -->
                                <div class="block px-4 py-2 text-xs text-gray-400">
                                    Switch Teams
                                </div>

                                <template v-for="team in $page.props.user.all_teams" :key="team.id">
                                    <form @submit.prevent="switchToTeam(team)">
                                        <jet-responsive-nav-link as="button">
                                            <div class="flex items-center">
                                                <svg v-if="team.id == $page.props.user.current_team_id" class="mr-2 h-5 w-5 text-green-400" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                                <div>{{ team.name }}</div>
                                            </div>
                                        </jet-responsive-nav-link>
                                    </form>
                                </template>
                            </template>
                        </div>
                    </div>
                </div>
            </nav>

            <!-- Page Heading -->
            <!--<header class="bg-white shadow" v-if="$slots.header">-->
                <!--<div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">-->
                    <!--<slot name="header"></slot>-->
                <!--</div>-->
            <!--</header>-->

            <!-- Page Content -->
            <main>
                <slot></slot>
            </main>
        </div>
    </div>
</template>

<script>
    import JetApplicationMark from '@/Jetstream/ApplicationMark'
    import JetBanner from '@/Jetstream/Banner'
    import JetDropdown from '@/Jetstream/Dropdown'
    import JetDropdownLink from '@/Jetstream/DropdownLink'
    import JetNavLink from '@/Jetstream/NavLink'
    import JetResponsiveNavLink from '@/Jetstream/ResponsiveNavLink'

    export default {
        components: {
            JetApplicationMark,
            JetBanner,
            JetDropdown,
            JetDropdownLink,
            JetNavLink,
            JetResponsiveNavLink,
        },
        mounted(){
            document.body.style.background = 'linear-gradient(180deg, #F2C3C5 0%, #EC99A4 100%);';
        },
        data() {
            return {
                storage_url: window.location.origin,
                showingNavigationDropdown: false,
                lan: this.$page.props.lang,
                langMenu: false,
            }
        },

        methods: {
            switchToTeam(team) {
                this.$inertia.put(route('current-team.update'), {
                    'team_id': team.id
                }, {
                    preserveState: false
                })
            },

            logout() {
                this.$inertia.post(route('logout'));
            },

            setLang(lang) {
                this.$inertia.visit('/lang/'+lang);
            }
        }
    }
</script>
