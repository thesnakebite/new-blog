<script setup>
    import AdminLayout from '@/Layouts/AdminLayout.vue'
    import { usePage } from '@inertiajs/vue3';

    const { auth } = usePage().props;

    const { props } = defineProps({
      posts: Array,
    })
</script>

<style scoped>
</style>

<template>
  <AdminLayout>
    <Head title="Publicaciones" />
      <div class="content-wrapper">
        <div class="page-header">
          <h3 class="page-title">Todas las publicaciones</h3>
            <nav aria-label="breadcrumb" role="navigation">
              <ol class="breadcrumb bg-inverse-primary">
                <li class="breadcrumb-item flex-inline items-center justify-center">
                  <Link :href="route('dashboard')">Inicio</Link>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Posts</li>
              </ol>
            </nav>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table id="order-listing" class="table">
                                <thead>
                                    <tr>
                                      <th>Id #</th>
                                      <th>Título</th>
                                      <th>Extracto</th>
                                      <th>Usuario</th>
                                      <th>Acciones</th>
                                      <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="post in posts" :key="post.id">
                                        <td>{{ post.id }}</td>
                                        <td>{{ post.title }}</td>
                                        <td>{{ post.excerpt }}</td>
                                        <td>Tokyo</td>
                                        <td>
                                          <div class="flex items-center space-x-2">
                                            <label class="btn btn-outline-primary">
                                              <i class="fa fa-pencil-square-o"></i>
                                              Editar
                                            </label>
                                            <label class="btn btn-outline-danger">
                                              <i class="fa fa-times-rectangle"></i>
                                              Borrar
                                            </label>
                                          </div>
                                        </td>
                                        <td>
                                          <button class="btn btn-outline-primary">View</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </AdminLayout>

</template>
