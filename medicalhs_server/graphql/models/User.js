const { Schema, model } = require("mongoose");

const UserSchema = new Schema({
  nombreUsuario: String,
  nombre: String,
  aPaterno: String,
  aMaterno: String,
  fechaNacimiento: Date,
  email: String,
  contrasena: String,
  sexo: Number,
  peso: Number,
  talla: Number,
  grupoSanguineo: String,
  alergias: String,
  tarjetaCreditoDebito: String,
  horaDeDormir: String,
  tipoDeTrabajo: String,
  horarioDeTrabajo: String,
  ajusteCostoDeConsulta: Number,
  ajusteConsultorioCercano: String,
  calle: String,
  colonia: String,
  ciudad: String,
  estado: String,
  codigoPostal: Number
});

const User = model("user", UserSchema);
module.exports = User;
