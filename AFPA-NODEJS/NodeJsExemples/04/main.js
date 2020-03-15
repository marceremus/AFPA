const addjs = require("./add");
console.log(addjs.add(1,6));
console.log(addjs.multi(2,6));
console.log(addjs.division(6,6));
addjs.number = 112221;

const  calculator = require('./calculator');

// console.log("Le chemin vers " + __filename);
// console.log("Le chemin vers " + __dirname);
// console.log(message);
 console.log(calculator.add.number);
