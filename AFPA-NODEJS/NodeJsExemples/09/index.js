process.stdout.write("Podaj wiadomość\n> ");

process.stdin.on("readable", function() {

    var line = process.stdin.read();

    if(line === null) {
        return;
    }

    if(line.toString().trim() === "close") {
        return process.exit();
    }

    console.log(line);
    process.stdout.write("Wpisałeś: " + line + "\n> ");

});