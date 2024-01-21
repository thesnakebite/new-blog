<script setup>
    import { useForm } from '@inertiajs/vue3';

    const form = useForm({
        title: null,
    })

    function submit() {
        form.post(route('admin.posts.store'), {
            onSuccess: () => {
                form.reset();
                $('#exampleModal').modal('hide');
                $('body').removeClass('modal-open');
                $('.modal-backdrop').remove();
            }
        });
    }
</script>

<template>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <form @submit.prevent="submit" class="forms-sample">
                <div class="modal-dialog modal-md" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Agregar el título de tu nueva publicación</h5>
                                <button type="button" class="close" data-bs-dismiss="modal">
                                  <span aria-hidden="true">×</span>
                                </button>
                        </div>
                        <div class="modal-body">
                          <div class="form-group">
                              <input v-model="form.title"
                                     class="form-control text-sm bg-transparent rounded-none focus:border-blue-600 focus:border-2" 
                                     placeholder="Ingresa aquí el título de la publicación"
                              >
                              <label v-if="form.errors.title" class="error mt-2 text-danger">{{ form.errors.title }}</label>
                          </div>
                        </div>
                        <div class="modal-footer">
                            
                            <button :disabled="form.processing" 
                                    class="btn btn-success"
                            >
                                {{ form.processing ? 'Enviando...' : 'Crear publicación'  }}
                            </button>
                            <button type="button" class="btn btn-outline-light" data-bs-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
</template>