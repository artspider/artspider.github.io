import Joi from "joi";

 const schema = Joi.object().keys({
    nombre: Joi.string()
    .min(5)
    .max(15)
    .required()
});

//export default schema;
module.exports = schema;