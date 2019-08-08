const { Schema, model } = require("mongoose");

const TipoSchema = new Schema({
  nemonico: String,
  descrpcion: String
});

const Tipo = model('tipo', TipoSchema);
module.exports = Tipo;
