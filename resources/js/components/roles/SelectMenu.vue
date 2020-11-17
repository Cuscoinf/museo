<template>
  <div class="card card-success">
    <div class="card-header ui-sortable-handle" style="cursor: move">
      <h3 class="card-title">
        <i class="ion ion-clipboard mr-1"></i>
        Asignar Permisos
      </h3>
    </div>
    <div class="card-body">
      <div class="form-group">
        <label>Permiso en el Sistema</label>
        <select v-model="idmenu"
          class="form-control select2 select2-hidden-accessible"
          style="width: 100%"
          data-select2-id="1"
          tabindex="-1"
          aria-hidden="true"
        >
          <option v-for="menu in menus" :key="menu.id" :value="menu.id">{{ menu.item }}</option>
        </select>
      </div>
      <button @click="agregarMenu" type="button" class="btn btn-block bg-gradient-info btn-lg">Agregar</button>
      <span>Seleccionado: {{ idmenu }}</span>
    </div>
  </div>
</template>

<script>
export default {
    props: ['usuarioR'],
  data() {
    return {
      menus: {},
      idmenu: "",
    };
  },
  mounted() {
    console.log("Component Select Menu Montado.");
    axios.get("/getmenus").then((data) => {
      this.menus = data.data;
    });
  },
  methods:{
      agregarMenu() {
          console.log("Id Menu Seleccionado: "+this.idmenu);
          const params={
              idMenu: this.idmenu,
              idUser: this.usuarioR.id
          };
          axios.post('/roles',params)
                    .then(response=>{
                            this.$emit('creado');

                            Toast.fire({
                            icon: 'success',
                            title: 'Menu Agregado'
                            })

                    })
                    .catch(error=> {

                        console.log(console.error());

                    });

      }
  }
};
</script>
