<?php
function connect(){
    try
    {
        $db = new PDO('mysql:host=localhost;dbname=gestionProduit;charset=utf8', 'root', 'root');
        return $db;
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
}


$db = connect();

$sql = "SELECT  products.id as produitId,
                products.name as produitName,
                products.description,
                products.price,
                categories.name as categoryName
        FROM products
        INNER JOIN categories ON products.category_id = categories.id";
$req = $db->prepare($sql);
$req->execute();

$results = array();

if($req->rowCount()>0){
    while($data = $req->fetchObject()){
        array_push($results, $data);
    }
}


?>
<!doctype html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/index.css">

    <title></title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="/">DamienLocation</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
        </ul>
    </div>
</nav>

<div class="container">
    <div class="mt-5 mb-5">
        <h1>Ajax est mon ami </h1>
        <div class="row">
            <?php
            foreach ($results as $produit){

                ?>
                <div class="col-3">
                    <p><?= $produit->produitName ?></p>
                </div>
                <div class="col-3 voirPlus">
                        <button id="<?php echo $produit->produitId ; ?>" class="btn btn-success">Voir +</button>

                </div>
                <?php
            }
            ?>

        </div>
        <div class="mt-5" id="showProduct">
            <div class="row">
                <div class="col-12" id="blocShox">
                    <h4>Détail de mon produit</h4>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="public/js/main.js" ></script>
</body>
</html>