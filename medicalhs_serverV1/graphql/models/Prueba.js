const { Schema, model } = require("mongoose");

const PruebaSchema = new Schema({
    nombre: String
});

const Prueba = model("prueba", PruebaSchema);
module.exports = Prueba;