<template>
    <div class="card mb-0">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <label for="investigador" class="control-label">Investigador</label>
                        <select id="investigador" class="form-control">
                            
                        </select>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="periodo" class="control-label">Periodo</label>
                            <el-select id="periodo" v-model="value" placeholder="Seleccione">
                                <el-option 
                                v-for="item in opciones" 
                                :key="item.value" 
                                :label="item.label"
                                :value="item.value"
                                >
                                </el-option>
                            </el-select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="desde" class="control-label">Desde</label>
                        <select id="desde" class="form-control">
                           
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label for="hasta" class="control-label">Hasta</label>
                        <select id="hasta" class="form-control">
                        </select>
                    </div>
                </div>
                <div class="row mt-3 mb-3 justify-content-center">
                    <div class="col-md-1">
                        <button class="btn btn-primary"><i class="fa fa-search"></i> Buscar</button>
                    </div>
                    <div class="col-md-1">
                        <button class="btn btn-success"><i class="fa fa-print"></i> Imprimir</button>
                    </div>
                </div>
                <div class="row mt-5 mb-5">
                  <table class="table">
                    <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Nro Solicitud</th>
                            <th>Fecha</th>
                            <th>Investigador</th>
                            <th>Titulo de investigacion</th>
                            <th></th>
                        </tr>
                    </thead>
                  </table>
                </div>
            </div>
        </div>
</template>
<script>
export default {
    data(){
        return{
            opciones: [{
                value: 'Entre meses',
                label: 'Entre meses'
            },
            {
                value: 'Entre fechas',
                label: 'Entre fechas'
            },
            {
                value: 'Por mes',
                label: 'Por mes'
            }],
            value: ''
        }
    }
}
</script>
<style>
.el-select{
    width: 100%
}
</style>>