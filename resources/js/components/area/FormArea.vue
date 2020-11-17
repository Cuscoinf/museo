<template>

<div class="container">
     <!-- /.modal-content -->
      <!-- Modal -->
      <div class="modal fade show" id="modal-lg" style="display: none; padding-right: 16px;" aria-modal="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content" >
            <div class="modal-header bg-info">
              <h4 v-if="editMode" class="modal-title">Editar Area</h4>
              <h4 v-else class="modal-title">Crear Area</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">

                <form class="form-horizontal" @submit.prevent="editMode ? updateArea() : createArea()">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nombre">Nombre del área</label>
                            <input v-model="area.nombre" type="text" class="form-control" id="nombre" placeholder="Ingrese nombre" name="nombre">
                            <small class="text-danger" v-if="errors && errors.nombre">
                                *{{ errors.nombre[0] }}
                            </small>
                        </div>
                        <div class="form-group">
                            <label for="slug" hidden>Slug</label>
                            <input v-model="area.slug" type="text" class="form-control" id="slug" placeholder="Ingrese slug" name="slug" hidden>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button v-show="editMode" @click="cargarParametros()" type="submit" class="btn btn-info">Actualizar</button>
                        <button v-show="!editMode" @click="cargarParametros()" type="submit" class="btn btn-info">Guardar</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    </div>
                </form>

            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>

</div>

</template>

<script>
    export default {
        props:['editMode','area'], //recibe editMode del componente padre
        data() {
            return {
                //editMode: false,
                errors: {},
                params: {}
            }
        },
        mounted() {
            console.log('Component form area mounted.');
        },
        methods: {
            cargarParametros(){
                this.params={
                    nombre: this.area.nombre,
                    slug: this.area.slug
                }
            },
            mostrarModal(){
                //this.editMode=editMode; //recibimos el valor por ref
                this.errors={};
                 $('#modal-lg').modal('show');
                //this.area=Object.assign({}, this.area);
            },
            updateArea(){

                axios.put('/area/'+this.area.id,this.params)
                    .then((response)=>{
                        this.$emit('ejecutado');

                        Toast.fire({
                            icon: 'success',
                            title: 'Area Actualizada'
                        })

                        $("#modal-lg").modal('hide');//ocultamos el modal
                        $('body').removeClass('modal-open');//eliminamos la clase del body para poder hacer scroll
                        $('.modal-backdrop').remove();//eliminamos el backdrop del modal

                    })
                    .catch(error=> {
                        this.errors=error.response.data.errors;
                        console.log(this.errors.nombre[0]);

                    });
            },
            createArea(){
                axios.post('/area',this.params)
                    .then(response=>{
                            this.$emit('ejecutado');

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
