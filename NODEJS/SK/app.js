

// ----------------------------  11   --------------------------------------------
// var readline = require('readline');
// var rl = readline.createInterface({
//     input : process.stdin,
//     output: process.stdout
// });
//
// rl.question('Comment appeles tu?', function(answer){
//     rl.setPrompt('Quelle technologie preferez vous?');
//     rl.prompt();
//     rl.on('line', function(response){
//         console.log(response);
//     });
//     //console.log(answer);
//     //rl.close();
// });

// ----------------------------  10   --------------------------------------------
// var currentTime = 0;
// var interval = setInterval(function(){
//     currentTime += 1000;
//     console.log(currentTime/1000)
// }, 1000);
//
// setTimeout(function(){
//     clearInterval(interval);
// }, 10000);

// ----------------------------  9   --------------------------------------------

// //process.stdout.write('Hello \n');
// process.stdout.write('Que est votre prénom? \n');
//
// process.stdin.on('data', function(name){
//     console.log("Hello " + name.toString());
//     //process.abort();
// });


// ----------------------------  8   --------------------------------------------

// var exit = function(){
//     console.log(process.argv)
// };
// exit();

// var exit = setTimeout(function(){
//     process.abort();
// }, 2000);

//console.log(process.platform);
// console.log(process.mainModule);
//console.log(process.env);
//console.log(process);

// ----------------------------  7   --------------------------------------------
// let events = require('events');
// let emiter = new events.EventEmitter();
//
// emiter.on('userRegister', function(name){
//     console.log("Hello user "+name+", you are connected")
// }); // lisener
//
// // emiter.on('userRegister', function(name){
// //     console.log("Hello user "+name+", you are connected")
// // }); // lisener
// //
// // emiter.on('userRegister', function(name){
// //     console.log("Hello user "+name+", you are connected")
// // }); // lisener
//
//     emiter.emit('userRegister', 'Tata');

// ----------------------------  6   --------------------------------------------
// let events = require('events');
// let emiter = new events.EventEmitter();
//
// emiter.once('userRegister', showUser); // lisener
//
// function showUser(){
//     console.log("Hello user, you are connected")
// };
//
// emiter.emit('userRegister');
// emiter.emit('userRegister');
// emiter.emit('userRegister');
// emiter.emit('userRegister');

// ----------------------------  5   --------------------------------------------
// let events = require('events');
// let emiter = new events.EventEmitter();
//
// emiter.on('userRegister', showUser);
//
// function showUser(){
//     console.log("Hello user, you are connected")
// };
//
// emiter.emit('userRegister');

// ----------------------------  4   --------------------------------------------
// function showInfo(collback){
//     console.log('La fonction collback');
//     setTimeout(function(){
//         collback();
//     }, 2000)
// }
//
// showInfo(function(){
//     console.log('La fonction collback a été executée')
// });


// ----------------------------  3   --------------------------------------------
// let path = require('path');
// let infos = require('./info.js');
// infos.info();
// infos.welcom();

// ------------------------------  2  ------------------------------------------
//let basname = path.basename('user/files/documents/index.js');
//console.log(basname);

// ------------------------------  1  ----------------------------------------
// const welcom = require('./function.js');
// welcom();
