# Fonctionnement de Ajax - avec jQuery

## Page index.php

### Action sur les buttons :
  - pour permettre à Ajax d'aller chercher l'élément sur lequel je dois agir je crée un div dans lequel j'ajoute id de mon produit :
          `
                <div class="col-3 voirPlus">
                        <button id="<?php echo $produit->produitId ; ?>" class="btn btn-success">Voir +</button>
                </div>
          `      
  - ensuite je prépare l'endroit où je vais placer l'affichage de la réponse que Ajax m'envoie
       ` <div class="col-12" id="blocShox">
                    <h4>Détail de mon produit</h4>
          </div>`
 
## page main.js
<pre>
   // je recherche ma balise id showProduct
            let divShowProdu = $("#showProduct");
  
   // je cache son contenu
             divShowProdu.hide();
   
   // je recherche les buttons d’action ; j'obtiens une liste de tous les buttons
             let voirPlusBtn = $(".voirPlus button");
   
   // pour chaque bouton
              voirPlusBtn.on('click', function() {  
    
    // je place id des buttons dans une variable id
    // this correspond au bouton sur lequel on click 
        let id = this.id;

    // j'appelle la méthode Ajax disponible en jQuery
        $.ajax({
   
    // je précise l'adresse url de mon fichier php qui traitera les informations reçues
            url: "src/views/showProduct.php",
            
    // je précise la méthode d'envoi de mon id, ici POST
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
    // d'afficher les informations reçues de mon fichier php
            let blocShox = $("#blocShox #detail");

    // Étant donné que j'envoie un tableau (le fichier php m'envoie un tableau)
    // je prends le premier élément et je le stocke dans une variable json
            let json = data[0];

    // je prépare mon affichage 
    // j'inserts des données dans mon div qui sera affiché           
          <!--let results='<div class="col-12"><p><b>Nom : </b>'+ json.name +'</p></div><div class="col-3"><p><b>Description : </b>'+   json.description +'</p></div><div class="col-3"><p><b>Prix : </b>'+ json.price +' euros</p></div>';-->

      // j'ajoute le div créé dans mon span 
      blocShox.html(results);
          }
        })
    })
    </pre>

    ### fichier php

            <pre>
                // je vérifier si je reçois bien mon id de mon ajax
                  if(isset($_POST['id'])){
                    // je protège ma variable contre les insertions js 
                    // je supprime les espaces de deux cotés (avant et arrière de mon id)
                    // je transforme ma variable du string vers un nombre (intval)
                      $id = intval(htmlspecialchars(trim($_POST['id'])));
                  }else{
                      $id = "";
                  }

                  // je crée ma connexion à la base de données - j'utilise la fonction créée plus haut
                  $db = connect();

                  // je crée ma requête sql
                  $sql = "SELECT * FROM products WHERE id = :ids";
                  // je la prépare
                  $req = $db->prepare($sql);
                  // je remplace ma variable temporaire ":ids" par la valeur de la variable reçu de mon Ajax (id)
                  $req->bindParam(':ids', $id);
                  // j'exécute ma requête
                  $req->execute();

                  // je crée un tableau dans lequel je souhaite placer les reposes de ma requête sql
                  $results = array();

                  // je vérifie si ma requête sql m'envoie des reposes et le nombre de réponse est > 0
                  if($req->rowCount()>0){

                    // je place les réponses dans une variable $data
                      while($data = $req->fetchObject()){
                        // pour chaque élément trouvé, je le place dans mon tableau préalablement créé
                          array_push($results, $data);
                      }
                  }

                  // je crée le type de ma réponse ici json
                  // car j'ai demandé dans mon Ajax (voir fichier main.js) de m'envoyer la réponse sous forme de json
                  // puis j'affiche ma réponse
                  echo json_encode($results);
            </pre>
        
