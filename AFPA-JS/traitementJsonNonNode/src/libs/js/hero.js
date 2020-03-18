// la ligne suivante est valable si nous utilisons node js
//var XMLHttpRequest = require("xmlhttprequest").XMLHttpRequest;

let alertMessage = document.querySelector('.alert-danger');
alertMessage.hidden = true;

// je place l'adresse dans une variable
const requestURL = 'https://mdn.github.io/learning-area/javascript/oojs/json/superheroes.json';

// je initialise l'objet XMLHttpRequeste
let xmlhttp = new XMLHttpRequest();

// sur l'objet xmlhttp, j'effectue les operations et uniquement lorsque la connexion est prete
xmlhttp.onreadystatechange = function () {
    // je vérifie si sur ma connexion le statut est égale à 200 et si la réponse est prete 4
    if (this.readyState === 4 && this.status === 200) {

        // je m'assure que la réponse est de type json puis je la place dans la variable data
        let data = JSON.parse(this.responseText);
        //console.log(data);

        // je recherche la balise hero dans ma page
        let hero = document.querySelector('#hero');

        // je crée une balise div
        let divMembre = document.createElement('div');

        // ajouter le nom de la class
        divMembre.classList.add("member");

        // créer un élément h2
        let h2 = document.createElement('h2');

        // ajout du titre de l'équipe
        h2.innerHTML = data.squadName;

        // ajouter la div à la div hero
        hero.appendChild(divMembre);

        // ajouter du titre h2 à la div
        divMembre.appendChild(h2);

        // créer un élement p
        let equipeContainer = document.createElement('p');

// ajout à l'élément p de la valeur (data)
        equipeContainer.innerHTML = "Nom de l'équipe : " + data.squadName + ", la ville de l'équipe : " + data.homeTown + ", créé en " + data.formed + ", le titre " + data.secretBase;

        // ajout de la balise p dans la div membre
        divMembre.appendChild(equipeContainer);

        // création de la balise ul
        let ul = document.createElement('ul');

        // je place la réponse (un tableau) dans une variable
        let tabMemebre = data.members;

        // je parcure un tableau
        for (let i = 0; i < tabMemebre.length; i++) {

            // je crée un élément li
            let li = document.createElement('li');

            // je place les données dans le li
            li.innerHTML = "<b>" + tabMemebre[i].name + "</b>  " + tabMemebre[i].age + "ans, nom de couverture :  " + tabMemebre[i].secretIdentity;

            // je place le contenue (li) dans la balise ul
            ul.appendChild(li);
        }

        // je place le contenue du ul dans ma div
        divMembre.appendChild(ul);

    }
};
alertMessage.hidden = true;
if(typeof(requestURL) === "undefined"){
    alertMessage.hidden = false;
}
// j'ouvre la connexion
xmlhttp.open("GET", requestURL, true);
// j'envoie la réponse
xmlhttp.send();


