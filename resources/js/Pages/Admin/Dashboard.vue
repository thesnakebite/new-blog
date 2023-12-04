<script setup>
    import AdminLayout from '@/Layouts/AdminLayout.vue'
    import { usePage } from '@inertiajs/vue3'

    const { auth } = usePage().props;
</script>

<template>
    <AdminLayout>
        <div class="flex flex-col space-y-10">
            <h1 class="text-4xl">Dashboard</h1>
            <h5 class="text-2xl text-emerald-500">Bienvenido</h5> {{ auth.user.name }}
        </div>
       
    </AdminLayout>
</template>