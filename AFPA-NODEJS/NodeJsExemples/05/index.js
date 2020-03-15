const path = require('path');
const utils = require('util');

var log = utils.format("Le nom de fichier %s", path.basename(__filename));
console.log(log);
