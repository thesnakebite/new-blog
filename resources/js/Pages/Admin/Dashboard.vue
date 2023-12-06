<script setup>
    import AdminLayout from '@/Layouts/AdminLayout.vue'
    import { usePage } from '@inertiajs/vue3'

    const { auth } = usePage().props;
</script>

<template>
    <AdminLayout>
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">Dashboard </h3>
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb bg-inverse-primary">
                        <li class="breadcrumb-item">
                            <a href="#">Inicio</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                    </ol>
                </nav>
            </div>
            <div class="flex flex-col space-y-10">
                <h5 class="text-2xl text-emerald-500">Bienvenido</h5> {{ auth.user.name }}
            </div>
        </div>
    </AdminLayout>
</template>