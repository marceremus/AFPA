const fs = require("fs");
const path = require("path");
const http = require("http");

const server = http.createServer(function(req, res) {

    var fileName = null;
    var file = null;

    if(req.url === "/" || req.url === "index.html") {
        fileName = "index.html";
    } else {

    }

});

server.listen(8080, function() {
    console.log("Serwer uruchomiony pod adresem: http://localhost:8080");
});