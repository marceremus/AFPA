import "../sass/components/_users.scss";
import template from "./views/users.hbs";

// import $ from "jquery";

const API_URL = "http://jsonplaceholder.typicode.com/users";

function createHTML(data) {

    return template({
        users: data
    });

}

function getUsers() {

    return $.getJSON(API_URL)
        .then(data => createHTML(data));

}

function getUsersHTML() {
    return getUsers();
}

export default getUsersHTML;

export function useMePlease()
{
    return "Je vous remercie et à très bienôt";
}
