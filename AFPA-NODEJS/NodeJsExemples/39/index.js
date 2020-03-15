const fs = require("fs");
const path = require("path");

function readFile(file, cb) {

    fs.readFile(path.join(__dirname, "files", file), function(err, data) {

        if(err) {
            cb(err);
        } else {
            cb(null, data.toString());
        }

    });

}

readFile("lorem1.txt", function(err, data) {

    if(err) {
        console.log(`Wystąpił błąd: ${err.message}`);
    } else {
        console.log(data);
    }

});