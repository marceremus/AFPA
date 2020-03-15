const express = require("express");
const hbs = require("express-handlebars");
const app = express();

app.engine("handlebars", hbs({defaultLayout: "main"}));
app.set("view engine", "handlebars");

app.use( express.static("public") );

app.get("/", function(req, res) {

    res.render("home", {
        title: "Wyślij wiadomość"
    });

});

app.listen(8080, function() {

    console.log("Serwer został uruchomiony pod adresem http://localhost:8080");

});