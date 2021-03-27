<template>

<div class="container">

    <button v-if="permisos.crear" type="button" class="btn btn-info btn-lg" data-toggle="modal" @click="createModalWindow()">
        Crear Nueva Area
    </button>
    <h1 v-else>NO tiene Permisos</h1>
    <div class="card-body p-0">
          <table class="table table-striped">
            <thead>
              <tr>
                <th style="width: 10px">#</th>
                <th>Nombre</th>
                <th>Fecha de Creacion</th>
                <th>Fecha de Actualizacion</th>
              </tr>
            </thead>
            <tbody>
                    <tr v-for="area in areas" :key="area.id">
                        <td>{{area.id}}</td>
                        <td>{{area.nombre}}</td>
                        <td>{{area.created_at}}</td>
                        <td>{{area.updated_at}}</td>
                        <td>
                            <a v-if="permisos.editar" href="#" data-id="area.id" @click="editModalWindow(area)">
                                <i class="fa fa-edit blue"></i>
                            </a>
                            |
                            <a v-if="permisos.eliminar" href="#" data-id="area.id" @click="deleteUser(area.id)">
                                <i class="fa fa-trash red"></i>
                            </a>
                        </td>
                    </tr>
            </tbody>
          </table>
        </div>

        <!--form-Edit-area ref="eventoHijo" @update="loadAreas"></form-Edit-area>
        <form-create-area ref="eventoHijoCreate" @created="loadAreas"></form-create-area -->
        <form-area ref="eventoForm" :editMode="editMode" :area="area" @ejecutado="loadAreas"></form-area>

</div>
</template>


<script>

export default {
        props: ['usuario','permisos'],
        data() {
            return {
                areas: {},
                area:'',
                editMode: false
            }
        },
        mounted() {

            console.log('montado List areas');
            console.log('Usuario: ' + this.usuario);
            console.log('PERMISOS: ' + this.permisos.crear);
            axios.get('/getAreas').then((data)=>{
                this.areas=data.data;

            });
        },
        methods: {

            loadAreas(){
                axios.get('/getAreas').then((data)=>{
                this.areas=data.data;

                });
            },

            deleteUser(id) {
            Swal.fire({
              title: '¿Seguro que quiere eliminar?',
              text: "¡No podrás revertir esto!",
              type: 'Cuidado',
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Si, Eliminar'
            }).then((result) => {

              if (result.value) {
                //Send Request to server
                axios.delete('/area/'+id)
                    .then((response)=> {
                            Swal.fire(
                              'Emilinado!',
                              'Area eliminada',
                              'success'
                            )
                    this.loadAreas();

                    }).catch(() => {
                        Swal.fire({
                          icon: 'error',
                          title: 'Oops...',
                          text: 'Algo salió mal!',
                          footer: '<a href>Why do I have this issue?</a>'
                        })
                    })
                }

            })
          },

          createModalWindow() {
              this.editMode=false;
              //this.$refs.eventoHijoCreate.mostrarModal();
              this.area=Object.assign('');
              this.$refs.eventoForm.mostrarModal();
          },
           editModalWindow(area){
              this.editMode=true;
              this.area=area;
              this.area=Object.assign({}, this.area); //para que nose actualiza en la grilla miestras se escribe en el modal
              //this.$refs.eventoHijo.mostrarModal(area); //enviamos el area selecionada al compenete hijo editar
              this.$refs.eventoForm.mostrarModal();
          }
        },
}
</script>
