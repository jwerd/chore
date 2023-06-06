<script setup>
import NavLink from "@/Components/NavLink.vue";

</script>

<template>
    <div>
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            <!-- Page Content -->
            <slot />
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 text-center">
                    <NavLink :href="route('logout')" class="text-xl" method="post" as="button">
                        Sign Out
                    </NavLink>
                </div>
            </div>
        </div>

    </div>

</template>
