<?php
?>
<section class="mt-5">

    <div>
        <h1>Page products</h1>
        <div class="row mt-5 pl-5">
            <div class="col-12">
                <?php

                    $articles = array(
                        'id_articles' => 1,
                        'nom_article' => "Article 1",
                        'description_article' => "Description article 1",
                        'price_ht_article' => 20.35,
                        'rate_tva_article' => 20
                    );


                    echo '<p>Id article : '.$articles['id_articles'].'</p>';
                    echo '<p>Nom du produit : '.$articles['nom_article'].'</p>';
                    echo '<p>Description produit : '.$articles['description_article'].'</p>';
                    echo '<p>Taux de TVA : '.$articles['rate_tva_article'].' % </p>';
                    echo '<p>Prix TTC : '.($articles['rate_tva_article']*1.2).'</p>';

                ?>
            </div>
            <div class="col-12">
                <a href="<?php echo $router->generate('showDetailsProduct')?>?id=<?php echo $articles['id_articles']; ?>">
                    <button class="btn btn-primary" type="submit"><i class="fa fa-bars" aria-hidden="true"></i> Lire</button>
                </a>
            </div>
            <?php

            ?>
        </div>
    </div>
</section>
