const { Schema, model } = require("mongoose");

const ValeSchema = new Schema({
  fecha: Date,
  actividad: [Int],
  tecnico: String,
  orden: String
});

const Vale = model('vale', ValeSchema);
module.exports = Vale;
