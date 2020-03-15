const Puller = require('./puller');

var puller = new Puller("http://api.exemple.com");

function printData(data){
    console.log("Les données reçues"+data.data+" de l'adresse url suivant : "+data.url);
}

puller.on("data", printData);

puller.pull();

setTimeout(function(){
    puller.stop(printData)
}, 5000);

// const Event = require('events');
// var emiter = new Event();
// // emiter.on("message", function(msg){
// //     console.log("Le message : " + msg)
// // });
// //
// // emiter.emit("message", " hello world ");
//

