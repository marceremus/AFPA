const fs = require("fs");
const path = require("path");

var users = require("./usersDb");

function save() {

    fs.writeFile(path.join(__dirname, "usersDb.json"), JSON.stringify(users, null, 4));

}

function copy(obj) {

    return JSON.parse( JSON.stringify(obj) );

}

function getNextId() {

    var lastUser = users[users.length - 1];

    return lastUser ? lastUser.id + 1 : 1;

}

function findUserById(id) {

    var user = null;
    id = parseInt(id);

    users.every(function(u) {

        if(u.id === id) {
            user = u;
            return false;
        }

        return true;

    });

    return user;

}

function addUser(userData) {

    userData.id = getNextId();

    users.push(userData);

    save();

    return getUser(userData.id);

}

function getUser(id) {

    return copy( findUserById(id) );

}

function updateUser(userData) {

    var user = findUserById(userData.id);

    delete userData.id;

    Object.assign(user, userData);

    save();

    return getUser(user.id);

}

function deleteUser(id) {

    var user = findUserById(id),
        index = users.indexOf(user);

    users.splice(index, 1);

    save();

    return copy(user);

}

function listUsers() {

    return copy(users);

}

module.exports = {
    add: addUser,
    get: getUser,
    update: updateUser,
    delete: deleteUser,
    list: listUsers
};