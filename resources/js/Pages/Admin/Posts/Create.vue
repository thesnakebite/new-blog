<script setup>
    import AdminLayout from '@/Layouts/AdminLayout.vue'
    import { Link, useForm } from '@inertiajs/vue3'
    import { ref, watch } from 'vue'

    import { QuillEditor } from '@vueup/vue-quill'
    import '@vueup/vue-quill/dist/vue-quill.snow.css'
    import VueDatePicker from '@vuepic/vue-datepicker';
    import '@vuepic/vue-datepicker/dist/main.css'

    import VueMultiselect from 'vue-multiselect';

    const props = defineProps({
        categories: Array,
        tags: Array,
    });

    const selectedTags = ref([]);

    watch(selectedTags, (newSelectedTags) => {
        form.tags = newSelectedTags.map(tag => tag.id);
    }, { deep: true });

    const handleSelect = (newTag) => {
        if (!selectedTags.value.map(t => t.id).includes(newTag.id)) {
            selectedTags.value.push(newTag);
        }
    }

    const handleRemove = (tagToRemove) => {
        selectedTags.value = selectedTags.value.filter(tag => tag.id !== tagToRemove.id);
    }

    const form = useForm({
        title: null,
        body: null,
        published_at: null,
        category: '',
        tags: [],
        excerpt: null,
    })
    
</script>

<style>
    input.form-control {
        border: 1px solid #6b7280;
    }

    .form-control::placeholder {
        color: #6b7280;
    }

    /* Quill Editor */
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
    
    /* Datepicker */
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

    /* Categorías */
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

    /* Tags */
    .multiselect__tags {
        background-color: transparent !important;
        border-radius: 0% !important;
        border: 1px solid #6b7280 !important;
    }

    .multiselect__placeholder {
        color: #6b7280 !important;
    }
</style>

<style src="vue-multiselect/dist/vue-multiselect.css"></style>

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

        <form @submit.prevent="form.post('/admin/posts')" class="forms-sample">
            <div class="row">
                <div class="col-md-8 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body border-t-2 border-blue-600">
                            <!-- Título -->
                            <div class="form-group">
                                <label>Título de la publicación</label>
                                <input v-model="form.title" 
                                       class="form-control text-sm bg-transparent rounded-none focus:border-blue-600 focus:border-2" 
                                       placeholder="Ingresa aquí el título de la publicación"
                                >
                                <label v-if="form.errors.title" class="error mt-2 text-danger">{{ form.errors.title }}</label>
                            </div>
                            <!-- Contenido del post -->
                            <div class="form-group">
                                <label>Contenido de la publicación</label>
                                <QuillEditor 
                                    v-model:content="form.body"
                                    :content-type="'html'" 
                                    theme="snow" 
                                    class="text-sm" 
                                    placeholder="Escribe algo increible..." 
                                />
                                <label v-if="form.errors.body" class="error mt-2 text-danger">{{ form.errors.body }}</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body border-t-2 border-blue-600">
                            <!-- Fecha del post -->
                            <div class="form-group">
                                <label>Fecha de publicación</label>

                                <VueDatePicker 
                                    v-model="form.published_at" 
                                    placeholder="Empieza a escribir ..."
                                    :text-input="textInputOptions"
                                />
                            </div>
                            <!-- Categorías -->
                            <div class="form-group">
                                <label>Categorías</label>
                                <select v-model="form.category" 
                                        class="js-example-basic-single w-full"
                                >
                                    <option class="form-control" 
                                            disabled value="">Selecciona una categoría</option>
                                    <option v-for="category in categories"
                                            :key="category.id" 
                                            :value="category.id">
                                            {{ category.name }}
                                    </option>
                                </select>
                                <label v-if="form.errors.category" class="error mt-2 text-danger">{{ form.errors.category }}</label>
                            </div>
                            <!-- Etiquetas -->
                            <div class="form-group">
                                <label>Etiquetas</label>
                                <VueMultiselect
                                    class="focus:border-blue-600 focus:border-2"
                                    v-model="selectedTags"
                                    :options="tags"
                                    :multiple="true"
                                    :taggable="true"
                                    :close-on-select="true"
                                    :clear-on-select="true"
                                    :preserve-search="true"
                                    @tag="handleSelect"
                                    placeholder="Selecciona una o varias etiquetas"
                                    label="name"
                                    track-by="id"
                                    @select="handleSelect"
                                    @remove="handleRemove"
                                />
                            </div>
                            <!-- Extracto -->
                            <div class="form-group">
                                <label>Extracto de la publicación</label>
                                <input v-model="form.excerpt" 
                                       class="form-control bg-transparent border-[2px] border-[#6b7280] rounded-none focus:border-blue-600 focus:border-2" 
                                       placeholder="Ingresa aquí el extracto de la publicación"
                                />
                                <label v-if="form.errors.excerpt" class="error mt-2 text-danger">{{ form.errors.excerpt }}</label>
                            </div>

                            <button class="btn btn-primary me-2 w-full">Guardar publicación</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </AdminLayout>
</template>
