const express = require("express");
const app = express();

app.get("/", function(req, res) {

    res.send("Strona główna!");

});

app.listen(8080, function() {

    console.log("Serwer został uruchomiony pod adresem http://localhost:8080");

});