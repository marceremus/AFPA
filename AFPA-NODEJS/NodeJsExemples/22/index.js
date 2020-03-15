const fs = require("fs");
const path = require("path");
const http = require("http");

const MIME_TYPES = {
    ".html": "text/html",
    ".css": "text/css",
    ".jpg": "image/jpeg"
};

const server = http.createServer(function(req, res) {

    var fileName = null;
    var file = null;

    if(req.url === "/" || req.url === "/index.html") {
        fileName = "index.html";
    } else {
        fileName = req.url.slice(1);
    }

    file = fs.createReadStream(path.join(__dirname, "public", fileName));

    file.on("error", function(err) {

        res.writeHead(404, "Not Found");
        res.end();

    });

    res.writeHead(200, {"Content-Type": MIME_TYPES[path.extname(fileName)]});

    file.pipe(res);

});

server.listen(8080, function() {
    console.log("Serwer uruchomiony pod adresem: https://localhost:8080");
});