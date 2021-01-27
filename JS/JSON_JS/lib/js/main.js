/*
    La création d'une api json en utilisant JS
 */

let container = document.querySelector(".container");

function searcheApi(){

    let url = "";

    let searchValue = parseInt(document.querySelector("#search input").value);

    url += "https://api.zippopotam.us/fr/"+searchValue;

    let request = new XMLHttpRequest();

    request.open('GET', url, true);
    request.onload = function() {
        // Begin accessing JSON data here
        let data = JSON.parse(this.response);

        let h = document.createElement("h2");
        let hr = document.createElement("hr");

        if (request.status >= 200 && request.status < 400) {
            h.textContent = "API JSON en JS - traitement des codes postaux";
            container.appendChild(h);
            container.appendChild(hr);

            let div = document.createElement("div");
            div.setAttribute("class", "json");

            for (let i = 0; i < data.places.length; i++) {
                let text = "La ville : " ;
                let p = document.createElement('p');
                text += data.places[i]["place name"] + " de la région : " + data.places[i].state + " , latitude : " + data.places[i].latitude + " et longitude : " + data.places[i].longitude;
                p.append(text);
                div.appendChild(p);
            }

            container.appendChild(div);
        } else {
            let divSearch = document.createElement('span');
            divSearch.setAttribute("class", "erreur");

            if(divSearch.textContent.length > 0 ){
                divSearch.remove(divSearch);
            }else if (isNaN(searchValue)){
                divSearch.textContent = "Vous devez saisir uniquement les chiffres";
            }
            container.appendChild(divSearch);
            console.log('error');
        }

    };

    request.send();
}

function clearText(){
    var elem = document.querySelector("span");

    if(elem != null){
        elem.remove();
    }
    var json = document.querySelector(".json");
    var hr = document.querySelector("hr");
    var hdeux = document.querySelector("h2");


    if(json != null){
        json.remove();
        hr.remove();
        hdeux.remove();
    }
}
