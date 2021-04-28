<template>
    <div class="table-responsive">
        <table class="table datatable" v-if="(this.area=='herpetologia')">
            <thead>
                <tr>
                    <th>Codigo MHNC</th>
                    <th>Especie</th>
                    <th>Genero</th>
                    <th>Familia</th>
                    <th>Orden</th>
                    <th>Sexo</th>
                    <th>Preservacion</th>
                    <th>Colector</th>
                    <th>Autor</th>
                    <th>Foto</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(especimen, index) in especimenes" :key="index">
                    <td>{{especimen.codigo}}</td>
                    <td>{{especimen.especie}}</td>
                    <td>{{especimen.genero}}</td>
                    <td>{{especimen.familia}}</td>
                    <td>{{especimen.orden}}</td>
                    <td>{{especimen.sexo}}</td>
                    <td>{{especimen.preservacion}}</td>
                    <td>{{especimen.colector}}</td>
                    <td>{{especimen.autor}}</td>
                    <td>{{especimen.foto}}</td>
                    <td><a :href="url+'especimen/'+area+'/'+especimen.id" class="btn btn-primary">Revisar</a></td>
                </tr>
            </tbody>
        </table>
        <table class="table datatable" v-if="(this.area=='maztozoologia')">
            <thead>
                <tr>
                    <th>Codigo MHNC</th>
                    <th>Captura</th>
                    <th>Especie</th>
                    <th>Genero</th>
                    <th>Familia</th>
                    <th>Orden</th>
                    <th>Sexo</th>
                    <th>Colector</th>
                    <th>Identificador</th>
                    <th>Tipo muestra</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(especimen, index) in especimenes" :key="index">
                    <td>{{especimen.codigo}}</td>
                    <td>{{especimen.captura}}</td>
                    <td>{{especimen.especie}}</td>
                    <td>{{especimen.genero}}</td>
                    <td>{{especimen.familia}}</td>
                    <td>{{especimen.orden}}</td>
                    <td>{{especimen.sexo}}</td>
                    <td>{{especimen.colector}}</td>
                    <td>{{especimen.identificador}}</td>
                    <td>{{especimen.tMuestra}}</td>
                    <td><a :href="url+'especimen/'+area+'/'+especimen.id" class="btn btn-primary">Revisar</a></td>

                </tr>
            </tbody>
        </table>
        <table class="table datatable" v-if="(this.area=='ornitologia')">
            <thead>
                <tr>
                    <th>Codigo MHNC</th>
                    <th>Captura</th>
                    <th>Especie</th>
                    <th>Genero</th>
                    <th>Familia</th>
                    <th>Orden</th>
                    <th>Nro Ingreso</th>
                    <th>Nro Colecta</th>
                    <th>Colector</th>
                    <th>Determinado por</th>
                    <th>Estado actual</th>
                    <th>Tipo Preparacion</th>
                    <th>Fecha colecta</th>
                    <th>Foto</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(especimen, index) in especimenes" :key="index">
                    <td>{{especimen.codigo}}</td>
                    <td>{{especimen.tipoCaptura}}</td>
                    <td>{{especimen.especie}}</td>
                    <td>{{especimen.genero}}</td>
                    <td>{{especimen.familia}}</td>
                    <td>{{especimen.orden}}</td>
                    <td>{{especimen.nIngreso}}</td>
                    <td>{{especimen.nColecta}}</td>
                    <td>{{especimen.colector}}</td>
                    <td>{{especimen.identificador}}</td>
                    <td>{{especimen.estadoActual}}</td>
                    <td>{{especimen.tipoPreparacion}}</td>
                    <td>{{especimen.fechaColecta}}</td>
                    <td>{{especimen.foto}}</td>
                    <td><a :href="url+'especimen/'+area+'/'+especimen.id" class="btn btn-primary">Revisar</a></td>
                </tr>
            </tbody>
        </table>
        <table class="table datatable" v-if="(this.area=='decomisados')">
            <thead>
                <tr>
                    <th>Codigo MHNC</th>
                    <th>Captura</th>
                    <th>Especie</th>
                    <th>Genero</th>
                    <th>Familia</th>
                    <th>Orden</th>
                    <th>Colector</th>
                    <th>Identificador</th>
                    <th>Fecha colecta</th>
                    <th>Foto</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(especimen, index) in especimenes" :key="index">
                    <td>{{especimen.codigo}}</td>
                    <td>{{especimen.tipoCaptura}}</td>
                    <td>{{especimen.especie}}</td>
                    <td>{{especimen.genero}}</td>
                    <td>{{especimen.familia}}</td>
                    <td>{{especimen.orden}}</td>
                    <td>{{especimen.colector}}</td>
                    <td>{{especimen.identificador}}</td>
                    <td>{{especimen.fechaColecta}}</td>
                    <td>{{especimen.foto}}</td>
                    <td><a :href="url+'especimen/'+area+'/'+especimen.id" class="btn btn-primary">Revisar</a></td>
                </tr>
            </tbody>
        </table>
    </div>
</template>
<script>
    export default {
        name:"lista-espcimen",
        props:{
            area:{}
        },
        data(){
            return{
                especimenes:[],
                url: "https://museo.sistemacuscovf.com/",
            }
        },
        methods:{
            listar(){
                axios.get(this.url+"especimen-data/"+this.area).then(resp=>{
                    console.log(resp.data)
                    this.especimenes = resp.data
                    this.table()
                })
            },  
            table(){
                $(function(){
                    $('.datatable').DataTable();
                })
            }
        },
        mounted() {
            this.listar()
            console.log("area: "+this.area)
        },
    }
</script>