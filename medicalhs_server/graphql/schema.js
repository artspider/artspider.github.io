const { gql } = require ("apollo-server-azure-functions");

const typeDefs = gql`
  type User {
    _id: String!
    nombre: String!
    aPaterno: String!
    aMaterno: String
    fechaNacimiento: String!
    email: String!
    sexo: Int
    peso: Int
    talla: Int
    grupoSanguineo: String
    alergias: String
    tarjetaCreditoDebito: String
    horaDeDormir: String
    tipoDeTrabajo: String
    horarioDeTrabajo: String
    ajusteCostoDeConsulta: Int
    ajusteConsultorioCercano: String
    calle: String
    colonia: String
    ciudad: String
    estado: String
    codigoPostal: Int
    cuentas: [Cuenta]
  }

  type Prueba {
    nombre: String!
  }

  type Cuenta {
    _id: String
    tipo: String
    expira: String
    contrasena: String
    id_user: String
  }

  type Query {
    hello: String
    users: [User!]!
    cuentas: [Cuenta!]!
    user(_id: String): User
    cuenta(_id: String): Cuenta
  }

  type Mutation {
    nuevoUser(input: UserInput): User
    signUp(input: UserInput): User
    nuevoCuenta(input: CuentaInput): Cuenta
  }

  input UserInput {
    nombre: String!
    aPaterno: String!
    aMaterno: String
    fechaNacimiento: String!
    email: String!
    sexo: Int
    peso: Int
    talla: Int
    grupoSanguineo: String
    alergias: String
    tarjetaCreditoDebito: String
    horaDeDormir: String
    tipoDeTrabajo: String
    horarioDeTrabajo: String
    ajusteCostoDeConsulta: Int
    ajusteConsultorioCercano: String
    calle: String
    colonia: String
    ciudad: String
    estado: String
    codigoPostal: Int
  }

  input PruebaInput {
    nombre: String!
  }

  input CuentaInput {
    tipo: String!
    expira: String!
    contrasena: String!
    id_user: String
  }
`;
module.exports = typeDefs;
