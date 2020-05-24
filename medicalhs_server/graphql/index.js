const { ApolloServer, gql } = require("apollo-server-express");
const mongoose = require("mongoose");
const createHandler = require("azure-function-express").createHandler;
const express = require("express");
const session = require("express-session");
const MongoStore = require("connect-mongo")(session);

mongoose
  .connect("mongodb://localhost/medialhs1", { useNewUrlParser: true })
  .then(() => console.log("MongoDB Connected"))
  .catch(err => console.log(err));

const db = mongoose.connection;
const typeDefs =  require("./schema");
const resolvers =  require("./resolvers");
const { configure } =  require("protobufjs");

const app = express();
app.disable("x-powered-by");

app.use(
  session({
    name: "sid",
    secret: "ssh!secret!",
    store: new MongoStore({ mongooseConnection: db }),
    resave: false,
    saveUninitialized: false,
    cookie: {
      maxAge: 1000 * 60 * 60 * 2,
      sameSite: true,
      secure: process.env.NODE_ENV === "production"
    }
  })
);

const server = new ApolloServer({
  typeDefs,
  resolvers,
  cors: false,
  playground: configure.playground
    ? false
    : {
        settings: {
          "request.credentials": "include"
        }
      },
  context: ({ req, res }) => ({
    req,
    res
  })
});
//server.applyMiddleware({ app });

module.exports = createHandler();
