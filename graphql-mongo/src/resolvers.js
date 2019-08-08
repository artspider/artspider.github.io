const Car = require("./models/Car");

const resolvers = {
  Query: {
    allCars: (parent, car) => {
      const cars = Car.find({});
      return cars;
    }
  },
  Mutation: {
    createCar: (parent, car) => {
      const newCar = new Car({ name: car.name });
      return newCar.save();
    }
  }
};

module.exports = resolvers;
