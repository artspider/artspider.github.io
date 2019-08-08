const Joi = require("joi");

const schema = Joi.object().keys({
  nombre: Joi.string()
    .min(5)
    .max(15)
    .required()
    .label("Nombre"),
  aPaterno: Joi.string()
    .min(5)
    .max(15)
    .required(),
  aMaterno: Joi.string()
    .min(5)
    .max(15),
  fechaNacimiento: Joi.date().iso(),
  email: Joi.string()
    .email()
    .required(),
  sexo: Joi.number(),
  peso: Joi.number(),
  talla: Joi.number(),
  grupoSanguineo: Joi.string(),
  alergias: Joi.string(),
  tarjetaCreditoDebito: Joi.string(),
  horaDeDormir: Joi.string(),
  tipoDeTrabajo: Joi.string(),
  horarioDeTrabajo: Joi.string(),
  ajusteCostoDeConsulta: Joi.number(),
  ajusteConsultorioCercano: Joi.string(),
  calle: Joi.string(),
  colonia: Joi.string(),
  ciudad: Joi.string(),
  estado: Joi.string(),
  codigoPostal: Joi.number()
});

//export default schema;
module.exports = schema;
