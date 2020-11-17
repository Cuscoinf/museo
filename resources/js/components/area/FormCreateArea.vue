<template>
    <!-- /.modal-content -->
      <!-- Modal -->
      <div class="modal fade show" id="modal-lg" style="display: none; padding-right: 16px;" aria-modal="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content" >
            <div class="modal-header bg-info">
              <h4 class="modal-title">Crear Nueva Area</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">

                <div id="app" class="content">
                <form class="form-horizontal" v-on:submit.prevent="createArea()">

                    <div class="card-body">
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input v-model="nombre" type="text" class="form-control" id="nombre" placeholder="Ingrese nombre" name="nombre">
                            <small class="text-danger" v-if="errors && errors.nombre">
                                *{{ errors.nombre[0] }}
                            </small>
                        </div>
                        <div class="form-group">
                            <label for="slug">Slug</label>
                            <input v-model="slug" type="text" class="form-control" id="slug" placeholder="Ingrese slug" name="slug">
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="submit" class="btn btn-info">Guardar</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    </div>
                </form>

                </div>


            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data() {
            return {
                editMode: false,
                nombre:'',
                slug:'',
                errors: {}
            }
        },

        methods: {
            mostrarModal()
            {
                this.nombre='';
                this.slug='';
                this.errors={};

                 $('#modal-lg').modal('show');

            },
            createArea(){
                const params={
                    nombre: this.nombre,
                    slug: this.slug
                };

                axios.post('/area',params)
                    .then(response=>{
                            this.$emit('created');

                            Toast.fire({
                            icon: 'success',
                            title: 'Area Creada'
                            })

                            $("#modal-lg").modal('hide');//ocultamos el modal
                            $('body').removeClass('modal-open');//eliminamos la clase del body para poder hacer scroll
                            $('.modal-backdrop').remove();//eliminamos el backdrop del modal

                    })
                    .catch(error=> {
                        this.errors=error.response.data.errors;
                        console.log(this.errors.nombre[0]);

                    });
            }
        }
    }
</script>
