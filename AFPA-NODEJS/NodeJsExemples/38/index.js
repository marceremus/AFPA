const Puller = require("./puller");

var puller = new Puller("http://example.com/data/");

function printData(data) {

    console.log(`Otrzymane dane: ${data.data} z adresu: ${data.url}`);

}

puller.on("data", printData);

puller.pull();

setTimeout(function() {

    puller.stop(printData);

}, 5000);