const { Schema, model }  = require('mongoose');


const CarSchema = new Schema({
  name: String
});

const Car = model('car', CarSchema);
module.exports =  Car;
