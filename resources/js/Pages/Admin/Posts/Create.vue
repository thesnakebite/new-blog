<script setup>
    import AdminLayout from '@/Layouts/AdminLayout.vue'
    import { usePage, Link } from '@inertiajs/vue3'
    import { QuillEditor } from '@vueup/vue-quill'
    import '@vueup/vue-quill/dist/vue-quill.snow.css'

    const { auth } = usePage().props;

    const { props } = defineProps({
      posts: Array,
    })
</script>

<style>

    .ql-container {
        height: 300px !important;
    }

    .ql-editor.ql-blank::before {
        color: #6b7280;
        font-style: italic;
       font-size: 1rem;
    }

    .ql-toolbar,
    .ql-container
    {
        border: 1px solid #6b7280 !important;
    }
</style>

<template>
    <AdminLayout>
        <div class="content-wrapper">

            <div class="page-header">
                <h3 class="page-title">Crear una publicación</h3>
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb bg-inverse-primary">
                        <li class="breadcrumb-item flex-inline items-center justify-center">
                            <Link :href="route('dashboard')">Inicio</Link>
                        </li>
                      <li class="breadcrumb-item" aria-current="page">Posts</li>
                      <li class="breadcrumb-item active" aria-current="page">Crear</li>
                    </ol>
                </nav>
            </div>

          <div class="row">
              <form class="forms-sample">
                  <div class="col-md-8 grid-margin stretch-card">
                      <div class="card">
                          <div class="card-body">
                              <h4 class="card-title text-emerald-200">Rellena todos los campos</h4>
                              <div class="form-group">
                                  <label for="exampleTitle">Título de la publicación</label>
                                  <input v-model="title" type="text" class="form-control" id="exampleTitle" placeholder="Ingresa aquí el título de la publicación">
                              </div>
                              <div class="form-group">
                                  <label for="exampleExcerpt">Extracto de la publicación</label>
                                  <input v-model="excerpt" type="text" class="form-control" id="exampleExcerpt" placeholder="Ingresa aquí el extracto de la publicación">
                              </div>
                              <div class="form-group">
                                  <QuillEditor v-model="body" theme="snow" placeholder="Escribe algo increible..." />
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="col-md-4 grid-margin stretch-card">
                      <div class="card">
                          <div class="card-body">
                              <div class="form-group">
                                  <label for="exampleTitle">Título de la publicación</label>
                                  <input v-model="title" type="text" class="form-control" id="exampleTitle" placeholder="Ingresa aquí el título de la publicación">
                              </div>
                              <button type="submit" class="btn btn-primary me-2">Submit</button>
                              <button class="btn btn-dark">Cancel</button>
                          </div>
                      </div>
                  </div>
              </form>
          </div>
      </div>
  </AdminLayout>

</template>
