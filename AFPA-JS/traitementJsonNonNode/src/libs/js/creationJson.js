
let data = [
    {
        "id": 1,
        "name": "iPhone",
        "price": 1000,
        "cathegory": "phone"
    },
    {
        "id": 2,
        "name": "Dell",
        "price": 890,
        "cathegory": "pc"
    },
    {
        "id": 3,
        "name": "Samsung",
        "price": 760,
        "cathegory": "tablette"
    },
];

let alertMessage = document.querySelector('.alert-danger');
alertMessage.hidden = true;


let balProduit = document.querySelector(".produits tbody");

if(typeof(data) !== "undefined") {
    let contenue = "";
    data.forEach(function (produit) {
        console.log(produit);
        contenue += "<tr>";
        contenue += "<td>" + produit.id;
        contenue += "<td>" + produit.name;
        contenue += "<td>" + produit.price;
        contenue += "<td>" + produit.cathegory;
        contenue += "<td>" + addBtnAction("button", "btn-success", "Ajouter", produit.id, null, "./addProduct.html") + " " + addBtn("button", "btn-warning", "Modifier") + " " + addBtn("button", "btn-danger", "Supprimer");
        contenue += "</tr>";
    });
    balProduit.innerHTML = contenue;

    let th = document.getElementsByTagName('th');

    for (let i = 0; i < 4; i++) {
        th[i].addEventListener('click', item(i));
    }

    function item(c) {
        return function () {
            sortTable(c);
        }
    }

    /*
    Source :  https://www.w3schools.com/howto/howto_js_sort_table.asp
     */
    function sortTable(c) {
        var table, rows, switching, i, x, y, shouldSwitch;
        table = document.getElementById("myTable");
        switching = true;
        /* Make a loop that will continue until
        no switching has been done: */
        while (switching) {
            // Start by saying: no switching is done:
            switching = false;
            rows = table.rows;
            /* Loop through all table rows (except the
            first, which contains table headers): */
            for (i = 1; i < (rows.length - 1); i++) {
                // Start by saying there should be no switching:
                shouldSwitch = false;
                /* Get the two elements you want to compare,
                one from current row and one from the next: */
                x = rows[i].getElementsByTagName("TD")[c];
                y = rows[i + 1].getElementsByTagName("TD")[c];
                // Check if the two rows should switch place:
                if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                    // If so, mark as a switch and break the loop:
                    shouldSwitch = true;
                    break;
                }
            }
            if (shouldSwitch) {
                /* If a switch has been marked, make the switch
                and mark that a switch has been done: */
                rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                switching = true;
            }
        }
    }
}else{
    alertMessage.hidden = false;
}

function addBtn(typeBtn, classBtn, valeurBtn) {

    let btn = '<button type="' + typeBtn + '" class="btn ' + classBtn + '" value="' + valeurBtn + '">' + valeurBtn + '</button>';

    return btn;
}

function addBtnAction(typeBtn, classBtn, valeurBtn, id, funActionLis = null, linkAction) {

    let btn = '<button type="' + typeBtn + '" class="btn ' + classBtn + '" onclick="' + funActionLis + '" value="' + id + '">' + valeurBtn + '</button>';

    return btn;
}
