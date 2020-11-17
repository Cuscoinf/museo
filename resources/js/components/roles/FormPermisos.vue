<template>
    <div class="row">
        <div class="col-md-4">
            <select-menu :usuarioR="usuario" @creado="reloadPermisos"></select-menu>
        </div>
        <div class="col-md-8">
            <list-permisos ref="ejecutarEvento" :usuarioR="usuario"></list-permisos>
        </div>
    </div>
</template>

<script>
export default {
    props: ['usuario'],
    data() {
    return {
      usuarioSelect: ''
    };
  },
  mounted() {
    console.log("Component Form Permisos.");
    console.log("usuario Recibido en Form."+this.usuario.name);
  },
  methods: {
      reloadPermisos()
      {

          this.$refs.ejecutarEvento.loadPermisos();
      }
  }


}
</script>
