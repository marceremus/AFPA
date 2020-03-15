const express = require("express");
const app = express();

app.use( express.static("public") );

app.get("/", function(req, res) {

    res.send("Hello world!");

});

app.listen(8080, function() {

    console.log("Serwer został uruchomiony pod adresem http://localhost:8080");

});