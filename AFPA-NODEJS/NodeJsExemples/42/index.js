const path = require("path");
const readFile = require("./readfile").readFile;
const readFileSync = require("./readfile").readFileSync;

var file = readFile(path.join(__dirname, "files", "lorem1.txt"));

file
    .on("data", function(data) {
        console.log( data.toString() );
    })
    .on("error", function(err) {
        console.log(err);
    });

console.log("To będzie pierwszy console.log");