<script setup>
    import { ref, watch } from 'vue'
    import AdminLayout from '@/Layouts/AdminLayout.vue'
    import { usePage, useForm, router } from '@inertiajs/vue3'
    import { QuillEditor } from '@vueup/vue-quill'
    import '@vueup/vue-quill/dist/vue-quill.snow.css'
    import VueDatePicker from '@vuepic/vue-datepicker';
    import '@vuepic/vue-datepicker/dist/main.css'
    import VueMultiselect from 'vue-multiselect';

    const props = defineProps({
        post: Array,
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

    function submit() {
      form.post(route('admin.posts.update'), {
        onSuccess: () => form.reset()
      })
    }

    watch(() => form.title, (newTitle, oldTitle) => {
        console.log('Nuevo título:', newTitle);
        console.log('Antiguo título:', oldTitle);

    if (!oldTitle) {
        form.title = 'Valor por defecto';
    }
});

        
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
        <h1 class="flex justify-center items-center min-h-screen">
            <span class="text-3xl text-gray-500">Editar publicación de {{ post.title }}</span>
        </h1>
        
    </AdminLayout>
</template>