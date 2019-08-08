const { ApolloServer, gql } = require("apollo-server");

import mongoose from "mongoose";
mongoose
  .connect("mongodb://localhost/modem-vales", { useNewUrlParser: true })
  .then(() => console.log("MongoDB Connected"))
  .catch(err => console.log(err));

//import Car from './models/Car';
var Tecnico = require("./models/Tecnico").default;

const typeDefs = require("./schema");
const resolvers = require("./resolvers");

const server = new ApolloServer({ typeDefs, resolvers });
server.listen().then(({ url }) => {
  console.log(`🚀  Server ready at ${url}`);
});
