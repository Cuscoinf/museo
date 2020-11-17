<template>
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Roles en el sistema</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body p-0">
      <table class="table table-striped">
        <thead>
          <tr>
            <th style="width: 10px">#</th>
            <th>Menu</th>
            <th>Crear</th>
            <th>Editar</th>
            <th>Eliminar</th>
            <th>Ver</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="menuUser in menusUsers" :key="menuUser.id">
            <td>{{ menuUser.id }}</td>
            <td>{{ menuUser.item }}</td>
            <td>
              <input
                v-model="menuUser.crear"
                @change="check($event, menuUser)"
                type="checkbox"
                class="form-check-input"
              />
            </td>
            <td>
              <input
                v-model="menuUser.editar"
                @change="check($event, menuUser)"
                type="checkbox"
                class="form-check-input"
              />
            </td>
            <td>
              <input
                v-model="menuUser.eliminar"
                @change="check($event, menuUser)"
                type="checkbox"
                class="form-check-input"
              />
            </td>
            <td>
              <input
                v-model="menuUser.ver"
                @change="check($event, menuUser)"
                type="checkbox"
                class="form-check-input"
              />
            </td>
            <td>
              <a
                href="#"
                data-id="menuUser.id"
                @click="deleteMenuUser(menuUser.id)"
              >
                <i class="fa fa-trash red"></i>
              </a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
</template>

<script>
export default {
  props: ["usuarioR"],
  data() {
    return {
      menusUsers: {},
    };
  },
  mounted() {
    console.log("Component list Menu Montado.");

    console.log("Usuario para List es: " + this.usuarioR.name);
    axios.get("/getmenuuser/" + this.usuarioR.id).then((data) => {
      this.menusUsers = data.data;
      console.log(this.menusUsers);
    });
  },
  methods: {
    loadPermisos() {
      axios.get("/getmenuuser/" + this.usuarioR.id).then((data) => {
        this.menusUsers = data.data;
        console.log(this.menusUsers);
      });
    },
    check: function (e, menuUser) {
      console.log(e + "Actializar: " + menuUser.id);
      axios
        .put("/actualizarpermiso/" + menuUser.id, menuUser)
        .then((response) => {
          Toast.fire({
            icon: "success",
            title: "Permiso Actualizado",
          });
          //this.$emit("ejecutado");
          console.log(menuUser);
        })
        .catch((error) => {
          console.log(error);
        });
    },
    deleteMenuUser(id) {
      Swal.fire({
        title: "¿Seguro que quiere eliminar?",
        text: "¡No podrás revertir esto!",
        type: "Cuidado",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Si, Eliminar",
      }).then((result) => {
        if (result.value) {
          //Send Request to server
          axios
            .delete("/roles/" + id)
            .then((response) => {
              Swal.fire("Emilinado!", "Permiso eliminada", "success");
              this.loadPermisos();
            })
            .catch(() => {
              Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Algo salió mal!",
                footer: "<a href>Why do I have this issue?</a>",
              });
            });
        }
      });
    },
  },
};
</script>
