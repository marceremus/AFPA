const http = require("http");

const server = http.createServer(function(req, res) {

    res.end("Hello World!");

});

server.listen(8000, function() {

    console.log("Serwer uruchomiony pod adresem http://localhost:8000");

});