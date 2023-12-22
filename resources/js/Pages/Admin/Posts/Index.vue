<script setup>
    import { ref } from 'vue'
    import AdminLayout from '@/Layouts/AdminLayout.vue'
    import { usePage, useForm } from '@inertiajs/vue3'

    const { auth } = usePage().props;

    const { props } = defineProps({
      posts: Array,
    })

    const form = useForm({
        title: null,
    })
</script>

<style scoped>
</style>

<template>
  <AdminLayout>
    <Head title="Publicaciones" />
      
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
            <div class="card-body border-t-2 border-blue-600">
              <div class="row">
                <div class="col-sm-12 col-md-6"></div>
                <div class="col-sm-12 col-md-6 pb-6">
                    <button
                      data-bs-toggle="modal" data-bs-target="#exampleModal"
                      class="btn btn-outline-primary btn-fw pull-right">
                      Crear publicación
                    </button>
                </div>
              </div>
              
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
                                          <button class="btn btn-outline-primary">Ver</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal starts -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-md" role="document">
              <form @submit.prevent="form.post('/admin/posts/store')" class="forms-sample">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Agregar el título de tu nueva publicación</h5>
                    <button type="button" class="close" data-bs-dismiss="modal">
                      <span aria-hidden="true">×</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="form-group">
                        <input 
                                class="form-control text-sm bg-transparent rounded-none focus:border-blue-600 focus:border-2" 
                                placeholder="Ingresa aquí el título de la publicación"
                        >
                        <label v-if="form.errors.title" class="error mt-2 text-danger">{{ form.errors.title }}</label>
                    </div>
                  </div>
                  <div class="modal-footer">
                      <button class="btn btn-success">Crear publicación</button>
                      <button type="button" class="btn btn-outline-light" data-bs-dismiss="modal">Cancel</button>
                  </div>
                </div>
              </form>
            </div>
        </div>
  </AdminLayout>

</template>
