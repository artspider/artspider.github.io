const { gql } = require('apollo-server');

const typedefs = gql`

type Car {
    _id: String!
    name: String
},

type Query {
    allCars: [Car!]!
},

type Mutation {
    createCar(name: String!): Car!,
}

`;

module.exports = typedefs;
