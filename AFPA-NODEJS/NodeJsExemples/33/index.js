const express = require("express");
const hbs = require("express-handlebars");
const bodyParser = require("body-parser");
const users = require("./users");
const api = require("./api");
const app = express();

app.engine("handlebars", hbs({defaultLayout: "main"}));
app.set("view engine", "handlebars");

app.use( express.static("public") );
app.use( bodyParser.json() );

app.use("/api", api);

app.get("/", function(req, res) {

    res.render("home", {
        title: "Lista użytkowników",
        users: users.list()
    });

});

app.listen(8080, function() {

    console.log("Serwer został uruchomiony pod adresem http://localhost:8080");

});



















