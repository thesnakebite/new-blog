<script setup>
    import AdminLayout from '@/Layouts/AdminLayout.vue'
    import { usePage, Link } from '@inertiajs/vue3'
    import { ref, onMounted } from 'vue'

    import { QuillEditor } from '@vueup/vue-quill'
    import '@vueup/vue-quill/dist/vue-quill.snow.css'
    import VueDatePicker from '@vuepic/vue-datepicker';
    import '@vuepic/vue-datepicker/dist/main.css'

    const props = defineProps({
        categories: Array,
        tags: Array
    });

    const category_id = ref('');

    const published_at = ref();
    const textInputOptions = {
        format: 'dd.MM.yyyy HH:mm'
    };

    const select2Element = ref(null);

    onMounted(() => {
        if (select2Element.value) {
            $(select2Element.value).select2();
        }
    })
</script>

<style>

    .ql-container {
        height: 300px !important;
    }

    .ql-editor.ql-blank::before {
        color: #6b7280;
        font-style: italic;
    }

    .ql-editor.ql-blank::placeholder {
        color: #6b7280;
        font-size: 14px;
    }

    .ql-toolbar,
    .ql-container
    {
        border: 1px solid #6b7280 !important;
    }
    
    .dp__main.dp__theme_light .dp__input_wrap .dp__input {
        background-color: transparent;
        color: white;
        font-size: 14px !important;
    }

    .dp__input.dp__input_icon_pad {
        border-radius: 0%;
    }

    .dp__main.dp__theme_light .dp__menu.dp__menu_index {
        background-color: #2c2e33;
    }

    .dp__input.dp__input_icon_pad {
        border: 1px solid #6b7280 !important;
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

    .js-example-basic-single {
        background-color: transparent;
        color: #6b7280;
        font-size: 14px !important;
    }

    .select2-selection.select2-selection--multiple {
        background-color: transparent;
        border-radius: 0%;
        border: 1px solid #6b7280 !important;
        padding-left: 8px;
    }

    .form-control::placeholder {
        color: #6b7280;
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
                        <div class="card-body border-t-2 border-blue-600">
                            <div class="form-group">
                                <label>Título de la publicación</label>
                                <input v-model="title" type="text" class="form-control text-sm bg-transparent" placeholder="Ingresa aquí el título de la publicación">
                            </div>
                            <div class="form-group">
                                <label>Contenido de la publicación</label>
                                <QuillEditor v-model="body" theme="snow" class="text-sm" placeholder="Escribe algo increible..." />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body border-t-2 border-blue-600">
                            <div class="form-group">
                                <label>Fecha de publicación</label>

                                <VueDatePicker 
                                    v-model="published_at" 
                                    placeholder="Empieza a escribir ..."
                                    :text-input="textInputOptions"
                                />
                            </div>
                            <div class="form-group">
                                <label>Categorías</label>
                                <select v-model="category_id" 
                                        class="js-example-basic-single" 
                                        style="width:100%"
                                >
                                    <option class="form-control" 
                                            disabled value="">Selecciona una categoría</option>
                                    <option v-for="category in categories" 
                                            :key="category.id" 
                                            value="category.id">
                                            {{ category.name }}
                                    </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Etiquetas</label>
                                <select v-model="tag"
                                        ref="select2Element"
                                        class="js-example-basic-multiple"
                                        data-placeholder="Selecciona una o varias etiquetas"
                                        multiple="multiple" 
                                        style="width:100%"
                                >
                                    <option v-for="tag in tags" :key="tag.id" value="tag.id">{{ tag.name }}</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Extracto de la publicación</label>
                                <input v-model="excerpt" 
                                       class="form-control bg-transparent border-[1px] border-[#6b7280] rounded-none focus:border-blue-600 focus:border-2" 
                                       placeholder="Ingresa aquí el extracto de la publicación"
                                />
                            </div>

                            <button type="submit" class="btn btn-primary me-2 w-full">Guardar publicación</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </AdminLayout>
</template>
