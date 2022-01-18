<template>
    <div class="flex align-middle justify-center mb-10">
        <div class="rounded-full border-2 border-black p-0.5 flex">
            <inertia-link :href="route('dashboard')" class="no-underline hover:text-gray-600">
            <div class="rounded-full py-1 px-5 menu-point" v-bind:class="{'active-point' : menuActive === 1}">
                <p class="mb-0 text-lg font-semibold">
                    {{ __('Welcome') }}
                </p>
            </div>
            </inertia-link>
            <inertia-link v-if="status" :href="route('account')" class="no-underline hover:text-gray-600">
            <div class="rounded-full py-1 px-5 menu-point" v-bind:class="{'active-point' : menuActive === 2}">
                <p class="mb-0 text-lg font-semibold">
                    {{ __('Account') }}
                </p>
            </div>
            </inertia-link>
            <inertia-link v-if="status" :href="route('members')" class="no-underline hover:text-gray-600">
            <div class="rounded-full py-1 px-5 menu-point" v-bind:class="{'active-point' : menuActive === 3}">
                <p class="mb-0 text-lg font-semibold">
                    {{ __('Members') }}
                </p>
            </div>
            </inertia-link>
            <inertia-link :href="route('tool')" class="no-underline hover:text-gray-600">
            <div class="rounded-full py-1 px-5 menu-point" v-bind:class="{'active-point' : menuActive === 4}">
                <p class="mb-0 text-lg font-semibold">
                    {{ __('Tool') }}
                </p>
            </div>
            </inertia-link>
            <inertia-link :href="route('faq')" class="no-underline hover:text-gray-600">
            <div class="rounded-full py-1 px-5 menu-point" v-bind:class="{'active-point' : menuActive === 5}">
                <p class="mb-0 text-lg font-semibold">
                    F.A.Q
                </p>
            </div>
            </inertia-link>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Menu",
        props:[
            'menuActive',
            'status'
        ]
    }
</script>

<style scoped>

</style>
