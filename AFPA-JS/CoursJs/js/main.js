let div = document.createElement('div'),
body = document.querySelector('body'),
text = document.createElement('p');

div.appendChild(text);
body.append(div);


// -------------------------  WHILE  -------------------------------------

//var number = 10;
//
// while(number > 0){
//     //console.log(number);
//     number --;
// }

// var secretNumber = 2;
//
// while(prompt("Saisissez un chiffre") != secretNumber){
//     alert("Essayez à nouveau");
// }
//
// alert("Yes vous avez trouvé");

// -----------------------------  DO WHILE -------------------------------

//
// do{
// console.log(number);
//     number ++;
// }while (number < 20);

// ---------------------------------  FOR  ----------------------------------

// for (var i = 1; i <= 5; i++) {
//     console.log(i);
// }

var tableau = ['Axel','Math', 'Pierre'];

for( prenom of tableau){
	//console.log(prenom);
}


for(prenom in tableau){
	//console.log(prenom);
}


var tableauObj = [
	{
     firstName: "Pierre",
     lastName: "Dupont",
     age: 32
	},
	{
     firstName: "Michel",
     lastName: "Durant",
     age: 32
	}
];

console.log(tableauObj);

for(prenom in tableauObj){
	/*let content = `${firstName} ${lastName}`;
	let p = document.querySelector('div p');
	p.innerText = content;*/
	//document.append(content);
	console.log(tableauObj[prenom].firstName);
	console.log(tableauObj[prenom].lastName);
	//console.log(`${prenom.firstName} ${prenom.lastName}`);
}

// ----------------------------  FOR IN - OBJ  ----------------------------

// var person = {
//     firstName: "Pierre",
//     lastName: "Dupont",
//     age: 32
// };
//
// for(var per in person){
//     console.log(per + " de la personne : " + person[per]);
// }

// for (var i = 0; i < 20; i++) {
//
//     if((i%2) === 0){
//         continue;
//     }
//
//     console.log(i);
// }

// ---------------------------------  TABLES  ----------------------------------
// var num = [2,3,6,20,0,52,11],
//     constraintZero = false;
//
// for (var i = 0; i < num.length; i++) {
//     console.log(num[i]);
//
//     if(num[i] === 0){
//         constraintZero = true;
//         break;
//     }
// }
//
// console.log(constraintZero);

// -------------------------  OBJ  ----------------------------------

// var person = {
//     "first-name": "Tomasz",
//     lastName: "Kowalski",
//     age: 32
// };
//
// console.log(person["last-name"]);
// person["job"] = "programista";
//
// delete person.age;
//
// console.log(person);
//
// var person2 = person;
//
// person2.age = 23;

// --------------------  OBJ  et function ------------------------

// var person = {
//     firstName: "Jan",
//     lastName: "Kowalski",
//     sayHello: function() {
//         console.log("Cześć! Mam na imię " + this.firstName);
//     },
//     setFirstName: function(firstName) {
//         this.firstName = firstName;
//     }
// };
//
// person.sayHello();
// person.setFirstName("Robert");
// person.sayHello();

// ----------------------------  OBJ comparaison obj  ----------------------------------
//
// var person = {
//     firstName: "Maciej",
//     lastName: "Kowalski"
// };
//
// var person2 = {
//     firstName: "Maciej",
//     lastName: "Kowalski"
// };
//
// var person3 = person2;
//
// console.log(person === person2);
// console.log(person3 === person2);

// ----------------------------  OBJ array  ----------------------------------

// var numbers = [1, 3, 4, 5, 6];
//
// console.log(numbers[2]);
// console.log("longeur " + numbers.length);
//
// var things = [{firstName: "Anna"}, 2, 2 + 8];
// console.log(things[0].firstName);
// things[0].firstName = "Robert";
// console.log(things[0].firstName);
// console.log(things[2]);
//
// var arrays = [[2, 3, 4], [4, 2, 1, ["Jan"]]];
// console.log(arrays[1][3][0]);

// ------------------------  Ajout des éléments au tableau  ------------------

// var arr = [];
//
// arr[0] = "Kasia";
// arr[1] = "Tomek";
// console.log(arr);
//
// arr[arr.length] = "Piotrek";
// console.log(arr);
//
// // ajout à la fin du tableau
// arr.push("Monika");
// console.log(arr);
//
// // ajout au debut du tableau
// arr.unshift("Patryk");
// console.log(arr);
//
// console.log(arr.length);

// ---------------------  Suppression des éléments du tableau   -------------------------
//
// var arr = ["Tomek", "Ania", "Jacek", "Mariusz"];
//
//  console.log(arr.length);
//
//  //arr.length = 2;
//
//  console.log(arr);
//
//  //delete arr[2];
//  console.log(arr);
// // suppression du dernier éléments du tableau
//  //var last = arr.pop();
//  console.log(arr);
//  //console.log(last);
//  // supprime le premier éléments du tableau
//  //var first = arr.shift();
// console.log(arr);
//
// //var lastTwo = arr.splice(1, 1);
// //var lastTwo = arr.splice(-2, 2);
// var lastTwo = arr.splice(-2, 2, "Piotr", "Andrzej");
// console.log(arr);

// -----------------------  Array 2 dimenssions  ----------------------------

// var numbers = [2, 3, 17, 32, 28, 9];
//     text = "Wylosowane liczby to: ";
//
// var arrLength = numbers.length;
//
// // for(var i = 0; i < arrLength; i++) {
// //     text += numbers[i];
// //     if(i !== arrLength - 1) {
// //         text += ", ";
// //     }
// // }
//
// console.log(text);
//
// var arr = [["Tom", "Dupont", 23], ["Marie", "Cateau", 30], ["Jack", "Morow", 38]];
//
// for(var i = 0; i < arr.length; i++) {
//
//  console.log("Data");
//
//  for(var j = 0; j < arr[i].length; j++) {
//   console.log(arr[i][j]);
//  }
//  console.log("-------------");
// }

// ----------------------------  function MAP  -----------------------------
//
// var numbers = [2, 3, 17, 32, 28, 9];
//
// //var tab = numbers.map(x=> x * 2);
// var tab = numbers.map(function(x){
//  return x * 2
// });
// console.log(numbers);
// console.log(tab);

// ---------------------- Function filter  ----------------------------------

// var words = ['spray', 'limit', 'elite', 'exuberant', 'destruction', 'present'];
// var newTab = words.filter(word=>word.length > 5);
// console.log(words);
// console.log(newTab);

// ------------------------  Array SORT   --------------------------------

// const months = ['Mars', 'Janvier', 'Février', 'Décembre', 'Octobre'];
//
// function compare(a, b) {
//  if (a < b){
//   return -1;
//  }else if (a > b){
//   return 1;
//  }else{
//   return 0;
//  }
// }
//
// months.sort((a,b) => {
//  return a > b;
// });
//
// console.log(months);

// ----------------------------    ----------------------------------

// var text = "Hello";
//
// sayHello();
//
// function sayHello() {
//  var text = "Welcome";
//  console.log(text);
// }
//
// var sayHello2 = function() {
//  console.log("Hello sayHello2!");
// };
// sayHello2();
//
// var sayHello3 = function hello(){
//  console.log(hello);
//
//  console.log("Hey!");
//
// };
// sayHello3();

// ----------------------------    ----------------------------------

// console.log(square(2));
//
// function square(num){
//     return num * num;
// }
//
// function sum(a, b){
//     return a + b;
// }
//
// console.log(sum(2,5));
// //console.log(sum(2)); // return NaN car le b est un undefined
// // var b;
// // console.log(b);
//
// var person = {
//     firstName: "Tom",
//     lastName: "Dupont"
// };
//
// function sayHello(obj) {
//     obj.firstName = "Pierre";
//     return "Hi , " + obj.firstName + " " + obj.lastName;
// }
//
// console.log(sayHello(person));

// ----------------------------    ----------------------------------

// function sum1(num1, num2) {
//
//     console.log(arguments);
//     console.log(arguments[1]);
//     if(arguments.length === 2 && typeof num1 === "number" && typeof num2 === "number") {
//         return num1 + num2;
//     } else {
//         return "Veuillez saisir des chiffres";
//     }
//
// }
//
// console.log(sum1(2,5));
// console.log(sum1(2,"5"));
//
// function sum() {
//
//     var total = 0;
//
//     for(var i = 0; i < arguments.length; i++) {
//         total += arguments[i];
//     }
//
//     return total;
//
// }
//
// console.log( sum(2, 3, 5, 6, 10) );

// ------------------------  Function anonime - auto load    ---------------------------

// (function() {
//
//     var arr = [1, 45, 22, 31, 3];
//
//     arr.sort(function(a, b) {
//
//         return a - b;
//
//     });
//
//     function sayHello(text, getName) {
//
//         var result = text + getName();
//
//         return result;
//
//     }
//
//     console.log( sayHello("Hello , ", function() {
//         return "Pierre";
//     }) );
//
// })();

// ----------------------------    ----------------------------------

// function f(firstName, lastName) {
//
//     arguments.callee.counter = arguments.callee.counter ? arguments.callee.counter : 1;
//
//     return firstName + " " + lastName + ", funkcja wywołana po raz " + arguments.callee.counter++;
//
// }
//
// console.log( f.length );

// ----------------------------  DATE  ----------------------------------

// var d = new Date();
// var d2 = new Date(12312413123);
// var d3 = new Date(2015, 0, 16, 12, 23, 55, 989);
//
// console.log( d3.getFullYear() ); // année
// console.log( d3.getMonth() ); // mois
// console.log( d3.getDate() ); // jour
// console.log( d3.getHours() ); // heur
// console.log( d3.getMinutes() ); // minutes
// console.log( d3.getMilliseconds() ); // ms
// console.log( d3.getDay() ); // jour de la semaine
// console.log( d3.getTime() );
//
// console.log( d3.toString() );
// console.log( d3.toLocaleString() );
//
// console.log( d3.getDate() + "." + (d3.getMonth() + 1) + "." + d3.getFullYear() );
//
// d3.setFullYear(2020);
//
// console.log( d3.getFullYear() );
//
// var d4 = new Date("Fri Jan 16 2015 12:23:55 GMT+0100 (CET)");
//
// console.log(d4);

// ---------------------------- REGEX   ----------------------------------

// // var regex = /a+/gi;
//
// var regex = new RegExp("a+", "ig");
//
// var n = "Anitha";
//
// console.log( n.replace(regex, "p") );
//
// // renvoie true false si la lettre a été trouvée
// console.log( regex.test("élément") );
// console.log( regex.test("camera") );

// ----------------------------  TRY/CATCH  --------------------------------

// function searchDb() {
//
//     console.log("Ouverture de la connexion");
//
//     db.search();
//
//     console.log("Fermeture de la connexion");
//
// }
//
// try {
//     searchDb();
// } catch(e) {
//     console.log("Vous avez une erreur : " + e.message);
// } finally {
//     console.log("Fin de la connexion");
// }

// ----------------------------    ----------------------------------

// var isChrome = navigator.userAgent.match(/chrome/i);
//
// console.log("Nazwa aplikacji: " + navigator.appName);
// console.log("Wersja aplikacji: " + navigator.appVersion);
// console.log("Ciąg User-Agent: " + navigator.userAgent);
// console.log("Platforma systemowa: " + navigator.platform);
// console.log("Język przeglądarki: " + navigator.language);
// console.log("Status onLine: " + navigator.onLine);

// ---------------------------- Ajout partials    ----------------------------------

// var list1 = document.querySelector("#list1"),
//     list2 = document.querySelector("#list2");
//
// var li = document.createElement("li"),
//     text = document.createTextNode("Treść");
//
// li.appendChild(text);
//
// // list1.appendChild(li);
// // list1.insertBefore(li, list1.querySelector("li:nth-child(2)"));
// // list1.appendChild(list1.querySelector("li:first-child"));
// // list2.removeChild(list2.querySelector(":last-child"));
// //list1.replaceChild(li, list1.querySelector(":last-child"));

// ----------------------------  Access aux partials  ----------------------------------

//
// var list = document.querySelector("#list");
//
// var children = list.childNodes;
// var elementChildren = list.children;
//
// var first = list.firstChild;
// var firstElement = list.firstElementChild;
//
// var last = list.lastChild;
// var lastElement = list.lastElementChild;
//
// var second = firstElement.nextSibling;
// var secondElement = firstElement.nextElementSibling;
//
// var lastButOne = lastElement.previousSibling;
// var lastButOneElement = lastElement.previousElementSibling;
//
// var parent = second.parentNode;
//
// secondElement.parentNode.removeChild(secondElement);

// ----------------------------    ----------------------------------
// ----------------------------    ----------------------------------
// ----------------------------    ----------------------------------
// ----------------------------    ----------------------------------
// ----------------------------    ----------------------------------
// ----------------------------    ----------------------------------
// ----------------------------    ----------------------------------
// ----------------------------    ----------------------------------
// ----------------------------    ----------------------------------
