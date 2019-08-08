//const { Schema, model } = require("mongoose");
const { Schema, model } = require("mongoose");
const { hash } = require('bcryptjs') ;

const CuentaSchema = new Schema({
    tipo: String,
    expira: Date,
    contrasena: String,
    id_user: String
});

CuentaSchema.pre('save', async function() {
    if(this.isModified('contrasena')){
        this.contrasena = await hash(this.contrasena, 10)
    }
})

const Cuenta = model('cuenta', CuentaSchema);
module.exports = Cuenta;