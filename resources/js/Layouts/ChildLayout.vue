<script setup>
import NavLink from "@/Components/NavLink.vue";

</script>

<template>
    <div>
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            <!-- Page Content -->
            <slot />
        </div>
        <div class="bg-gray-100 dark:bg-gray-900 w-full text-center">
            <NavLink :href="route('logout')" class="" method="post" as="button">
                Log Out
            </NavLink>
        </div>
    </div>

</template>
