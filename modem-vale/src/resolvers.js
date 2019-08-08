const Tecnico = require("./models/Tecnico");
const Modem = require("./models/Modem");
const Orden = require("./models/Orden");

const resolvers = {
  Query: {
    tecnicos: (parent, tecnico) => {
      const tecnicos = Tecnico.find({});
      return tecnicos;
    },
    tecnico: async (parent, tecnico) => {
      return await Tecnico.findOne({ expediente: tecnico.expediente });
    },
    modems: (parent, modem) => {
      const modems = Modem.find({});
      return modems;
    },
    modem: async (parent, modem) => {
      return await Modem.findOne({ serie: modem.serie });
    },
    orden: async (parent, orden) => {
      return await Orden.findOne({ os_pisa: orden.os_pisa });
    },
    ordenes: (parent, orden) => {
      const ordenes = Orden.find({});
      return ordenes;
    }
  },
  Tecnico: {
    ordenes: (parent, orden) => {
      const ordenes = Orden.find({ expediente: parent.expediente });
      return ordenes;
    }
  },
  Mutation: {
    async nuevoTecnico(parent, { input }) {
      const nuevoTecnico = new Tecnico(input);
      return await nuevoTecnico.save();
    },
    async nuevoModem(parent, { input }) {
      const nuevoModem = new Modem(input);
      return await nuevoModem.save();
    },
    async nuevaOS(parent, { input }) {
      const nuevaOS = new Orden(input);
      return await nuevaOS.save();
    }
  }
};

module.exports = resolvers;
