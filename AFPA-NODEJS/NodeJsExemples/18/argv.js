const args = process.argv.slice(2);

function argv(arg) {

    var index = args.indexOf("--" + arg);

    if(index !== -1 && args[index + 1] !== undefined) {
        return args[index + 1];
    } else {
        return null;
    }

}

function validateArgs(args) {

    var valid = true;

    args.forEach(function(arg) {

        if(!argv(arg)) {
            valid = false;
        }

    });

    return valid;

}

module.exports = {
    get: argv,
    validate: validateArgs
};