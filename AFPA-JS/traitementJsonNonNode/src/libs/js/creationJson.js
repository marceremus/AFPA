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

let balProduit = document.querySelector(".produits tbody");

    let tr = document.createElement('tr');
data.forEach(function(produit){

    console.log(produit);

    let td = document.createElement('td');

    td.innerHTML = produit.id;
    td.innerHTML = produit.name;
    td.innerHTML = produit.price;
    td.innerHTML = produit.cathegory;


    tr.appendChild(td);

});
    balProduit.appendChild(tr)



