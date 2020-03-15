const calc = require('./calculator');

console.log("Modul main.js");

console.log(calc.add(2,3));
console.log("Le nom du module "+calc.config.name+" et sa version : "+ calc.config.version);
