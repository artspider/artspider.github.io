const { gql } = require("apollo-server");
const { GraphQLDate } = require('graphql-iso-date');

const typedefs = gql`
  type Tecnico {
    _id: String!
    nombre: String
    expediente: String
    ordenes: [Orden]
  }

  type Modem {
    _id: String!
    serie: String
    barras: String
    ssid: String
    pass: String
    modelo: String
  }

  type Orden {
    _id: String!
    os_pisa: String!
    telefono: String!
    direccion: String
    #fecha_liq: String
    fecha_liq: GraphQLDate
    central: String!
    distrito: String!
    principal: String!
    secundario: String!
    recuperado: Boolean!
    expediente: String!
    id_modem: String!
    id_tipo: String!
  }

  type Tipo {
    _id: String!
    nemonico: String!
    descrpcion: String
  }

  type Query {
    tecnicos: [Tecnico!]!
    modems: [Modem!]!
    ordenes: [Orden!]!
    tecnico(expediente: String!): Tecnico
    modem(serie: String!): Modem
    orden(os_pisa: String): Orden
  }

  type Mutation {
    nuevoTecnico(input: TecnicoInput): Tecnico
    nuevoModem(input: ModemInput): Modem
    nuevaOS(input: OrdenInput): Orden
  }

  input TecnicoInput {
    nombre: String
    expediente: String
  }

  input ModemInput {
    serie: String!
    barras: String
    ssid: String
    pass: String
    modelo: String
  }

  input OrdenInput {
    os_pisa: String!
    telefono: String!
    direccion: String
    fecha_liq: String
    central: String!
    distrito: String!
    principal: String!
    secundario: String!
    recuperado: Boolean!
    expediente: String!
    id_modem: String!
    id_tipo: String!
  }
`;

module.exports = typedefs;
