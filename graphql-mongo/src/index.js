const { ApolloServer, gql } = require("apollo-server");

import mongoose from "mongoose";
mongoose
  .connect("mongodb://localhost/graphql-test", { useNewUrlParser: true })
  .then(() => console.log("MongoDB Connected"))
  .catch(err => console.log(err));

//import Car from './models/Car';
var Car = require("./models/Car").default;

const typeDefs = require("./schema");
const resolvers = require("./resolvers");

const server = new ApolloServer({ typeDefs, resolvers });
server.listen().then(({ url }) => {
  console.log(`🚀  Server ready at ${url}`);
});
