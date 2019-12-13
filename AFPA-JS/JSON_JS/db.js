const express = require("express");
let mysql = require("mysql");
let app = express();
let fs = require("fs");

let connection = mysql.createConnection({
    //connectionLimit: 50,
    host: 'localhost',
    port: '8889',
    user: 'root',
    password: 'root',
    database: 'products'
});

function addFile(content) {
    fs.writeFile("data.json", content, function(err) {
        if (err) throw err;
        console.log('File is created successfully.');
    })
}


function getHandlerDatabase(req, res){
    connection.query('SELECT * from products', function(err, rows) {
        connection.end();
        if (!err){
            addFile(JSON.stringify(rows));
        }else{
            console.log('Error while performing Query.');
        }
    })
}

app.get("/",function(req,res){
    getHandlerDatabase(req, res);
});

app.listen(3000);

