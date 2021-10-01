<template>
    <div class="card mb-0">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <label for="investigador" class="control-label">Investigador</label>
                        <el-select id="investigador" v-model="investigador" placeholder="Seleccione">
                            <el-option
                            v-for="item in investigadores"
                            :key="item.id"
                            :label="`${item.nombre} ${item.apPaterno} ${item.apMaterno}`"
                            :value="item.id"
                            >
                            </el-option>
                        </el-select>
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
                        <el-date-picker
                        type="month"
                        v-model="fechaDesde"
                        value-format="yyyy-MM" 
                        format="MM/yyyy"
                        :clearable="false">
                        </el-date-picker>
                    </div>
                    <div class="col-md-3">
                        <label for="hasta" class="control-label">Hasta</label>
                        <el-date-picker
                        type="month"
                        v-model="fechaHasta"
                        value-format="yyyy-MM" format="MM/yyyy"
                        :clearable="false">
                        </el-date-picker>
                    </div>
                </div>
                <div class="row mt-3 mb-3 justify-content-center">
                    <div class="col-md-1">
                        <el-button type="primary" round><i class="fa fa-search"></i> Buscar</el-button>
                    </div>
                    <div class="col-md-1">
                        <el-button type="success" round><i class="fa fa-print"></i> Imprimir</el-button>
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
            value: '',
            investigador:'',
            investigadores: [],
            fechaDesde:'',
            fechaHasta:''
        }
    },

    mounted(){
        axios.get('https://sistema.emisoftserver.com/dataInvestigador').then( (data) => {
            this.investigadores = data.data
        })
    }
}
</script>
<style>
.el-select{
    width: 100%
}
.el-input{
    width: 100% !important;
}
</style>>