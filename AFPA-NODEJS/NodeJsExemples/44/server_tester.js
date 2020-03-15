const http = require("http");

function getData() {

    var req = http.request("http://localhost:8080", function(res) {

        var data = "";

        res.on("data", function(chunk) {
            data += chunk.toString();
        });

        res.on("end", function() {
            console.log(data);
        });

    });

    req.end();

}

var interval = setInterval(getData, 100);

setTimeout(function() {
    clearInterval(interval);
}, 30000);