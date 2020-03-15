const http = require("http");

const server = http.createServer(function(req, res) {

    res.end("Hello world!");

});

server.listen(8080, function() {
    console.log("Serwer uruchomiony pod adresem http://localhost:8080");
});