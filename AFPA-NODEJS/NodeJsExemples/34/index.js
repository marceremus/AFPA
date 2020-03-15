const express = require("express");
const api = require("./api");
const app = express();

app.listen(8080, function() {

    console.log("Serwer został uruchomiony pod adresem http://localhost:8080");

});