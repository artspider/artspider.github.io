const { Schema, model } = require("mongoose");

const OrdenSchema = new Schema({
  os_pisa: String,
  telefono: String,
  direccion: String,
  fecha_liq: Date,
  central: String,
  distrito: String,
  principal: String,
  secundario: String,
  recuperado: Boolean,
  expediente: String,
  id_modem: String,
  id_tipo: String
});

const Orden = model('orden', OrdenSchema);
module.exports = Orden;
