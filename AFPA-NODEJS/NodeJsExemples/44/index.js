const app = require("express")();

app.get("/", function(req, res) {

    res.send(`Witaj! To zapytanie obsługuje process o PID: ${process.pid}`);

});

app.listen(8080, function() {

    console.log(`Serwer został uruchomiony pod adresem http://localhost:8080 i jest obsługiwany przez process o PID: ${process.pid}`);

});