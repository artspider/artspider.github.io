const { ApolloServer, gql } = require('apollo-server-azure-functions');

const mongoose = require ('mongoose');
mongoose
  .connect('mongodb://artspider:art750717@ds064748.mlab.com:64748/mhs', { useNewUrlParser: true })
  .then(() => console.log("MongoDB Connected"))
  .catch(err => console.log(err));

const typeDefs =  require('./schema');
const resolvers = require('./resolvers');

const server = new ApolloServer({ typeDefs, resolvers });

exports.graphqlHandler = server.createHandler();
