const app = new Vue({
  el: "#app",
  data: {
    titulo: "Mis Frutas",
    frutas: [
      {
        nombre: "Manzana",
        cantidad: 10
      },
      {
        nombre: "Pera",
        cantidad: 0
      },
      {
        nombre: "Platano",
        cantidad: 7
      }
    ],
    nuevaFruta: "",
    total: 0
  },
  methods: {
    agregarFruta() {
      this.frutas.push({
        nombre: this.nuevaFruta,
        cantidad: 0
      });
      this.nuevaFruta = "";
    },
    agregarCantidad() {
      this.frutas.cantidad = 0;
    }
  },
  computed: {
    sumarFrutas() {
      this.total = 0;
      for (fruta of this.frutas) {
        this.total = this.total + fruta.cantidad;
      }
      return this.total;
    }
  }
});
