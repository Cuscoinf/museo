<template>

 <div class="container">

     <!-- /.modal-content -->
      <!-- Modal -->
      <div class="modal fade show" id="modal-lg-edit" style="display: none; padding-right: 16px;" aria-modal="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content" >
            <div class="modal-header bg-info">
              <h4 class="modal-title">Editar Area</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">

                <form class="form-horizontal" v-on:submit.prevent="updateArea()">

                    <div class="card-body">
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input v-model="areaedit.nombre" type="text" class="form-control" id="nombre" placeholder="Ingrese nombre" name="nombre">
                            <small class="text-danger" v-if="errors && errors.nombre">
                                *{{ errors.nombre[0] }}
                            </small>
                        </div>
                        <div class="form-group">
                            <label for="slug">Slug</label>
                            <input v-model="areaedit.slug" type="text" class="form-control" id="slug" placeholder="Ingrese slug" name="slug" hidden>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="submit" class="btn btn-info">Guardar</button>
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
        //props:['area'], //recibe area del componente padre
        data() {
            return {
                errors: {},
                areaedit: ''
            }
        },
        mounted() {
            console.log('Component form edit area mounted.')
        },
        methods: {
            mostrarModal(area)
            {
                //console.log("datos por ref: "+area.id);

                /*axios.get('/getArea/'+area.id).then((data)=>{
                    this.areaedit=data.data;
                    console.log("Datos del server: "+this.areaedit.nombre);

                });*/

                this.areaedit='';

                this.errors={};

                 $('#modal-lg-edit').modal('show');
                 this.areaedit=Object.assign({}, area);


            },
            updateArea(){

                const params={

                    nombre: this.areaedit.nombre,
                    slug: this.areaedit.slug,
                };

                axios.put('/area/'+this.areaedit.id,params)
                    .then((response)=>{
                        this.$emit('update');

                        Toast.fire({
                            icon: 'success',
                            title: 'Area Actualizada'
                        })

                        $("#modal-lg-edit").modal('hide');//ocultamos el modal
                        $('body').removeClass('modal-open');//eliminamos la clase del body para poder hacer scroll
                        $('.modal-backdrop').remove();//eliminamos el backdrop del modal

                    })
                    .catch(error=> {
                        this.errors=error.response.data.errors;
                        console.log(this.errors.nombre[0]);

                    });
            }
        },


    }
</script>
