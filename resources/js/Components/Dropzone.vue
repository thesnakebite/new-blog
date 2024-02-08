<script setup>
    import { ref } from 'vue';

    const active = ref(false);

    const toggleActive = () => {
        active.value = !active.value;
    }


</script>


<style scoped lang="scss">
    .dropzone {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        row-gap: 16px;
        border: 2px dashed #6b7280;
        color: #6b7280;
        transition: 0.3 ease all;

        label {
            padding: 8px 12px;
            color: #fff;
            background-color: #41b883;
            transition: 0.3 ease all;
        }

        input {
            display: none;
        }
    }

        .active-dropzone {
            border-color: #41b883;
            background-color: #41b883;
            color: white;
            transition: 0.3 ease all;

            label {
                background-color: #fff;
                color: #41b883;
        }
        
    }
</style>

<template>
    <div @dragenter.prevent="toggleActive"
         @dragleave.prevent="toggleActive"
         @dragover.prevent
         @drop.prevent="toggleActive"
          :class="{
            'active-dropzone' : active
          }"
          class="dropzone"
    >
        <span>Arrastre aquí los archivos</span>
        <span>o</span>
        <label for="dropzoneFile">Seleccione archivo</label>
        <input type="file" id="dropzoneFile" class="dropzoneFile" />
    </div>

</template>