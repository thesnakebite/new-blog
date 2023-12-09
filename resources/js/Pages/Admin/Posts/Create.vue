<script setup>
    import AdminLayout from '@/Layouts/AdminLayout.vue'
    import { usePage, Link } from '@inertiajs/vue3'
    import { ref } from 'vue'

    import { QuillEditor } from '@vueup/vue-quill'
    import '@vueup/vue-quill/dist/vue-quill.snow.css'
    import VueDatePicker from '@vuepic/vue-datepicker';
    import '@vuepic/vue-datepicker/dist/main.css'

    const { props } = defineProps({
      posts: Array,
    })

    const published_at = ref();
    const textInputOptions = {
        format: 'dd.MM.yyyy HH:mm'
    };
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

    /* .dp__pointer {
        background-color: #2c2e33;
        border: 1px solid #6b7280;
        color: white;
    }

    .dp__outer_menu_wrap, 
    .dp--menu-wrapper {
        background-color: #2c2e33;
    }

    .dp__menu, 
    .dp__menu_index, 
    .dp__theme_light {
        background-color: #2c2e33;
    }

    .p__btn .dp__month_year_select {
        color: white;
    }

    .dp__action_button,
    .dp__action_cancel {
        background-color: black;
        color: white;
    }

    .dp__action_button,
    .dp__action_select {
        background-color: blue;
        color: white;
    } */



.dp__main.dp__theme_light .dp__input_wrap .dp__input {
  background-color: #2c2e33;
  color: white;
}

.dp__main.dp__theme_light .dp__menu.dp__menu_index {
  background-color: #2c2e33;
}

.dp__btn.dp__month_year_select {
    color: white;
}

.dp__calendar_header_item {
    color: white;
}

.dp__cell_inner.dp__pointer.dp__date_hover {
    color: white;
}

.dp__main.dp__theme_light .dp__input::placeholder {
  color: #b0b0b0;
}

.dp__selection_preview {
    color: white;;
}

.dp__action_button,
.dp__action_cancel {
    background-color: black;
    color: white;
}


.dp__main.dp__theme_light .dp__btn.dp--arrow-btn-nav {
  color: #4a90e2;
}

</style>

<template>
    <AdminLayout>
        <div class="page-header">
            <h3 class="page-title">Crear una publicación</h3>
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb bg-inverse-primary">
                    <li class="breadcrumb-item flex-inline items-center justify-center">
                        <Link :href="route('dashboard')">Inicio</Link>
                    </li>
                    <li class="breadcrumb-item" aria-current="page">
                        <Link :href="route('admin.posts.index')">Posts</Link>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Crear</li>
                </ol>
            </nav>
        </div>

        <form class="forms-sample">
            <div class="row">
                <div class="col-md-8 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleTitle">Título de la publicación</label>
                                <input v-model="title" type="text" class="form-control" id="exampleTitle" placeholder="Ingresa aquí el título de la publicación">
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
                                <label for="exampleDate">Fecha de publicación</label>

                                <VueDatePicker 
                                    v-model="published_at" 
                                    placeholder="Empieza a escribir ..."
                                    :text-input="textInputOptions"
                                />
                            </div>
                            <div class="form-group">
                                <label for="exampleExcerpt">Extracto de la publicación</label>
                                <input v-model="excerpt" type="text" class="form-control" id="exampleExcerpt" placeholder="Ingresa aquí el extracto de la publicación">
                            </div>

                            <button type="submit" class="btn btn-primary me-2">Submit</button>
                            <button class="btn btn-dark">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
  </AdminLayout>

</template>
