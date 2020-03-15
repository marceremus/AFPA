const add = require("./add");
const subtract = require("./subtract");
const multiply = require("./multiply");
const divide = require("./divide");

module.exports = {
    add: add,
    subtract: subtract,
    multiply: multiply,
    divide: divide,
    config: require("./config")
};
