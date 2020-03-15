const EventEmitter = require("events").EventEmitter;
const fs = require("fs");

function readFile(path) {

    var ev = new EventEmitter();

    fs.readFile(path, function(err, data) {

        if(err) {
            ev.emit("error", err);
        } else {
            ev.emit("data", data);
        }

    });

    return ev;

}

function readFileSync(path) {

    return fs.readFileSync(path);

}

module.exports = {
    readFile,
    readFileSync
};