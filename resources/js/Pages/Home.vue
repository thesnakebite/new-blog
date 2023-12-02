<script setup>
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
    laravelVersion: {
        type: String,
        required: true,
    },
    phpVersion: {
        type: String,
        required: true,
    },
});
</script>

<template>
    <div class="flex justify-center items-center min-h-screen">
        <h1 class="text-5xl text-emerald-800 font-extrabold">Hello</h1>
    </div>
    
    
</template>
