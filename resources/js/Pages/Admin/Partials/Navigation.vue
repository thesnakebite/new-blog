<script setup>
    import { Link, usePage } from '@inertiajs/vue3'

    const { auth } = usePage().props;

    const { url } = usePage();

    const isActive = (routeName) => {
        return url.startsWith(route(routeName));
    };

</script>

<template>
    <ul class="nav">
        <li class="nav-item profile">
            <div class="profile-desc">
                <div class="profile-pic">
                    <div class="count-indicator">
                        <img class="img-xs rounded-circle " src="/adminlte/assets/images/faces/face15.jpg" alt="">
                        <span class="count bg-success"></span>
                    </div>
                    <div class="profile-name">
                        <h5 class="mb-0 font-weight-normal">
                            {{ auth.user.name }}
                        </h5>
                        <span>Gold Member</span>
                    </div>
                </div>
                <a href="#" id="profile-dropdown" data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
                <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                    <a href="#" class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-settings text-primary"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-onepassword  text-info"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-calendar-today text-success"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
                        </div>
                    </a>
                </div>
            </div>
        </li>
        <li class="nav-item nav-category">
            <span class="nav-link">Navegación</span>
        </li>
        <li class="nav-item menu-items" :class="{'active': isActive('dashboard')}">
        <a class="nav-link"
              :href="route('dashboard')"
        >
            <span class="menu-icon">
            <i class="mdi mdi-view-dashboard"></i>
            </span>
            <span class="menu-title">Inicio</span>
        </a>
        </li>
        <li class="nav-item menu-items" :class="{'active': isActive('admin.posts.index')}">
            <a class="nav-link" data-bs-toggle="collapse" href="#page-layouts" aria-expanded="false" aria-controls="page-layouts">
                <span class="menu-icon">
                    <i class="mdi mdi-view-list"></i>
                </span>
                <span class="menu-title">Blog</span>
                    <i class="menu-arrow"></i>
            </a>
            <div class="visible" id="page-layouts">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" 
                           :href="route('admin.posts.index')"
                        >
                        Ver todos los posts
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" 
                           :href="route('admin.posts.create')"
                        >
                        Crear un post
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item menu-items">
        <a class="nav-link" data-bs-toggle="collapse" href="#sidebar-layouts" aria-expanded="false" aria-controls="sidebar-layouts">
            <span class="menu-icon">
            <i class="mdi mdi-crosshairs-gps"></i>
            </span>
            <span class="menu-title">Usuarios</span>
            <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="sidebar-layouts">
            <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="pages/layout/compact-menu.html">Compact menu</a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/layout/sidebar-collapsed.html">Icon menu</a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/layout/sidebar-hidden.html">Sidebar Hidden</a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/layout/sidebar-hidden-overlay.html">Sidebar Overlay</a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/layout/sidebar-fixed.html">Sidebar Fixed</a></li>
            </ul>
        </div>
        </li>
    </ul>
</template>