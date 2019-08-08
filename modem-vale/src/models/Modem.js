const { Schema, model } = require("mongoose");

const ModemSchema = new Schema({
  serie: String,
  barras: String,
  ssid: String,
  pass: String,
  modelo: String,
  id_orden: String,
  asignado:  Boolean,
  recuperado: Boolean
});

const Modem = model('modem', ModemSchema);
module.exports = Modem;
