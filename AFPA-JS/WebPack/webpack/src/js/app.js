import "../sass/main.scss";
import "es6-promise/auto";
import { useMePlease } from "./Users";
// import $ from "jquery";
import getUsersHTML from "./Users";
// import getUsersHTML from "./Users";


let container = $(".container"),
    button = $(".btn");

button.on("click", function() {

    import("./Users")
        .then(function({default: getUsersHTML}){
        getUsersHTML()
            .then(html => {
                container.append(html);
            });

    });

});

console.log(useMePlease());
