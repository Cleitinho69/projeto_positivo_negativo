<template>
  <div>
    <telaMostrar :mensagem="mensagem" :color="color" />
    <form @submit.prevent="enviar">
      <input type="number" id="numero" v-model="edtNumero" />
      <input type="submit" value="Enviar" id="enviar" />
    </form>
  </div>
</template>

<style scoped>
form {
  display: flex;
  align-items: center;
  flex-direction: column;
}

#numero {
  border: 1px solid #000;
  padding: 5px;
  margin-right: 5px;

  font-size: 16px;
  border-radius: 10px;
}

#enviar {
  margin: 15px;

  width: 100px;
  height: 30px;

  padding: 5px 10px;
  font-size: 16px;
  border-radius: 10px;
  background-color: #000;
  color: #fff;
}
</style>

<style>
* {
  margin: 0;
  padding: 0;
  border: none;
  outline: none;
}

body,
html {
  width: 100vw;
  height: 100vh;

  display: flex;
  justify-content: center;
  align-items: center;
}
</style>

<script>
import { useForm } from "@inertiajs/vue3";
import telaMostrar from "@/Components/telaMostrar.vue";

export default {
  name: "Welcome",
  data() {
    return {
      edtNumero: "",
    };
  },
  components: {
    telaMostrar,
  },
  props: {
    mensagem: String,
    color: String,
  },
  methods: {
    enviar() {
      const form = useForm({
        numero: this.edtNumero,
      });

      form.get("/");
    },
  },
  mounted() {
    var inputNumero = document.getElementById("numero");
    inputNumero.focus();
  },
};
</script>