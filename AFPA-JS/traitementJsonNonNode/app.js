var XMLHttpRequest = require("xmlhttprequest").XMLHttpRequest;

var requestURL = 'https://mdn.github.io/learning-area/javascript/oojs/json/superheroes.json';

var movie = function(){
    return 'movie';
}


var xmlhttp = new XMLHttpRequest();

xmlhttp.onreadystatechange = function() {
    if (this.readyState === 4 && this.status === 200) {
        var myArr = JSON.parse(this.responseText);
        console.log(myArr);
        console.log(myArr.squadName);
        console.log(myArr.members[0].name);
    }
};

xmlhttp.open("GET", requestURL, true);
xmlhttp.send();

//console.log(movie());
