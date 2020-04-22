<?php

    //dump($_GET);
    if(isset($_GET["id"])){
        $id = htmlspecialchars(trim($_GET["id"]));
    }else{
        $id = '';
    }

    $articles = array(
        'id_articles' => 1,
        'nom_article' => "Article 1",
        'description_article' => "Description article 1",
        'price_ht_article' => 20.35,
        'rate_tva_article' => 20
    );

?>
<section class="mt-5">
    <div>
        <h3>Show Details Product</h3>
    </div>
    <div>
        <?php

            echo '<p>Id article : '.$articles['id_articles'].'</p>';
            echo '<p>Nom du produit : '.$articles['nom_article'].'</p>';
            echo '<p>Description produit : '.$articles['description_article'].'</p>';
            echo '<p>Taux de TVA : '.$articles['rate_tva_article'].' % </p>';
            echo '<p>Prix TTC : '.($articles['rate_tva_article']*1.2).'</p>';


        ?>
    </div>
</section>

