<script setup>
import { computed } from 'vue'
import { usePage } from '@inertiajs/vue3'
import ParentLayout from '@/Layouts/ParentLayout.vue'
import ChildLayout from '@/Layouts/ChildLayout.vue'

const user = usePage().props.auth.user;

const layout_switch = computed(() => {
    return user.parent ? ParentLayout : ChildLayout
})
</script>

<template>
    <component :is="layout_switch">
        <slot />
    </component>
</template>
