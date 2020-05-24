const { Schema, model } = require("mongoose");

const UserSchema = new Schema({
  nombreUsuario: {
    type: String,
    validate: {
      validator: nombreUsuario => User.doesntExist({ nombreUsuario }),
      message: ({ value }) => `El nombre de usuario ${value} ya esta en uso.`
    }
  },
  nombre: String,
  aPaterno: String,
  aMaterno: String,
  fechaNacimiento: Date,
  email: {
    type: String,
    validate: {
      validator: email => User.doesntExist({ email }),
      message: ({ value }) => `La cuenta ${value} ya esta en uso.`
    }
  },
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

UserSchema.statics.doesntExist = async function (options) {
  return await this.where(options).countDocuments() === 0
}

const User = model("user", UserSchema);
module.exports = User;
