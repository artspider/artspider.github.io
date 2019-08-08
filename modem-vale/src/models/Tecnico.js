const { Schema, model } = require("mongoose");

const TecnicoSchema = new Schema({
  nombre: String,
  expediente: String
});

const Tecnico = model('tecnico', TecnicoSchema);
module.exports = Tecnico;
