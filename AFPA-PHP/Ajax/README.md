# Fonctionnement de Ajax - avec jQuery

## Page index.php

### Action sur les buttons:
  - pour permettre à ajax d'aller chercher l'élément sur lequel je doit agir je crée un div dans lequel j'ajoute id de mon produit:
          `
                <div class="col-3 voirPlus">
                        <button id="<?php echo $produit->produitId ; ?>" class="btn btn-success">Voir +</button>
                </div>
          `      
  - ensuite je prépare l'endroit ou je vais placer l'affichage de la réponse que ajax m'envoie
       ` <div class="col-12" id="blocShox">
                    <h4>Détail de mon produit</h4>
          </div>`
 
## page main.js
<pre>
   // je recherche ma balise id showProduct
            let divShowProdu = $("#showProduct");
  
   // je cache son contenu
             divShowProdu.hide();
   
   // je recherche les buttons d'action; j'obtiens une liste de tous les buttons
             let voirPlusBtn = $(".voirPlus button");
   
   // pour chaque button
              voirPlusBtn.on('click', function() {  
    
    // je place id des buttons dans une variable id
    // this correspond au button sur lequel on click 
        let id = this.id;

    // j'appele la méthode ajax disponible en jQuery
        $.ajax({
   
    // je précise l'adresse url de mon fichier php qui traitera les informations réçues
            url: "src/views/showProduct.php",
            
    // je precise la méthode d'envoie de mon id, ici POST
            method: "POST",
    
    // je précise sous quelle forme je souhaite recevoir mon retour. 
    // Je veux que les informations reçues de ma page php soient sous forme de json
            dataType: "json",
    
    // je précise l'information (ou les informations) que je souhaite envoyer vers mon fichier php
    // ici j'envoie l'objet js, soit mon id
            data: {
                "id": id
            },
    
    // cette partie prend en charge le retour d'information de mon fichier php
    // dans le cas où tout va bien se passer (je reçois des informations de mon fichier php) => success
    // le paramètre "data" stocke mon retour de mon fichier php
            success: function (data) {
            
    // puisque je reçois un retour de mon fichier php
    // j'affiche mon div préalablement caché
            divShowProdu.show();
                
    // je vais maintenant chercher mon block (span) qui me permet 
    // d'afficher les informations reçu de mon fichier php
            let blocShox = $("#blocShox #detail");

    // Etant donnée que j'envoie un tableau (le fichier php m'envoie un tableau)
    // je prends le première élément et je le stocke dans une variable json
            let json = data[0];

    // je prépare mon affichage 
    // j'inserts des données dans mon div qui sera affiché
                     
          let results='<div class="col-12"><p><b>Nom : </b>'+ json.name +'</p></div><div class="col-3"><p><b>Description : </b>'+   json.description +'</p></div><div class="col-3"><p><b>Prix : </b>'+ json.price +' euros</p></div>';

      // j'ajoute le div créé dans mon span 
      blocShox.html(results);
          }
        })
    })
    </pre>
        
