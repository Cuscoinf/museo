<template>

    <div class="container">
     <!-- /.modal-content -->
      <!-- Modal -->
      <div class="modal fade show" id="modal-lg" style="display: none; padding-right: 16px;" aria-modal="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content" >
            <div class="modal-header bg-info">
              <h4 class="modal-title">Asignar Rol y Permisos</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">

                <form class="form-horizontal">
                    <div class="card-body">
                        <div class="form-group">
                        <label>Rol de Usuario</label>
                        <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                            <option selected="selected" data-select2-id="3">CURADOR</option>
                            <option>ADMINISTRADOR</option>
                            <option>INVESTIGADOR</option>
                            <option>DIRECTOR</option>
                        </select>
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
         props:['usuario'], //recibe area del componente padre
        data() {
            return {
                errors: {},
                areaedit: ''
            }
        },
        mounted() {
            console.log('Component form roles mounted.')
        }
    }
</script>
