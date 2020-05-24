const Joi = require("joi");
const schema = require("./schemas/User");
const User = require("./models/User");
const Cuenta = require("./models/Cuenta");
//import Prueba from "./models/Prueba";

const resolvers = {
  Query: {
    hello: () => "Hello world!",

    users: (parent, user, context) => {
      console.log(context.req)
      const users = User.find({});
      return users;
    },
    user: async (parent, user) => {
      return await User.findOne({ _id: user._id });
    }
  },

  User: {
    cuentas: (parent, cuenta) => {
      const cuentas = Cuenta.find({ id_user: parent._id });
      return cuentas;
    }
  },

  Mutation: {
    async nuevoUser(parent, { input }) {
      const nuevoUser = new User(input);
      return await nuevoUser.save();
    },

    async signUp(parent, { input }) {
      const nuevoUser = new User(input);
      await Joi.validate(input, schema);
      return nuevoUser.save(input);
    },

    async nuevoCuenta(parent, { input }) {
      const nuevoCuenta = new Cuenta(input);
      return await nuevoCuenta.save();
    }
  }
};

module.exports = resolvers;
