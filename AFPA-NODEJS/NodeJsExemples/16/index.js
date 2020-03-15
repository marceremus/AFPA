const fs = require("fs");
const path = require("path");

function file(filename) {
    return path.join(__dirname, "files", filename);
}