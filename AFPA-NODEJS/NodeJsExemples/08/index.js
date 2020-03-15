const fs = require('fs');
const Console = require('console').Console;
const gzip = require("zlib").createGzip();

var stream = fs.createReadStream('./text.txt');
var logs = fs.createWriteStream('./logs.txt');
var errors = fs.createWriteStream('./errors.txt');
//var myConsole = new Console(logs, errors);
var compressed = fs.createWriteStream("./text.txt.gz");


// myConsole.log("Le premier message ");
// myConsole.log("Le deuxième message ");
// myConsole.error("L'erreur num 1");

// //var data = "";
// stream.on("data", function(chunk){
//     //data += chunk.toString();
//     console.log("La longuer du text "+Math.round(chunk.length/1024)+" kb");
//     //console.log(chunk.toString());
// });
//
// stream.on("end", function(){
//     //console.log(data);
//     console.log("Lecture terminée");
// });
stream.pipe(process.stdout);
console.time("gzip");
stream.pipe(gzip).pipe(compressed).on("close", function(){
    console.timeEnd("gzip");
});
