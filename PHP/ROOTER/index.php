<?php

	require 'vendor/autoload.php';
	require 'src/elements/head.php';

	$router = new AltoRouter();
	$router->setBasePath('/rooter');

	$router->map('GET','/', '/', 'base');
	$router->map('GET','/home', 'home', 'home');
	$router->map('GET|POST','/contact', "contact","contact");
	$router->map('GET|POST','/showDetailsProduct', "showDetailsProduct","showDetailsProduct");
	$router->map('GET|POST','/showDetailsProduct/[i:id]', "showDetailsProduct","showDetailsProductID");
	$router->map('GET|POST','/produits', "produits","produits");
	$router->map('GET|POST','/produits/[i:id]', 'produits#id', 'produits#id');
	$router->map('GET|POST','/articles', "articles","articles");
	$router->map('GET|POST','/articles/[i:id]', 'articles#id',"articles#id");
	$router->map('GET|POST','/articles/[i:id]/[delete|update:action]', 'articlesController#doAction', 'articles_do');
	// match current request
	$match = $router->match();

	if($match["target"] === "produits"){
		require 'src/products.php';
	}elseif($match["target"] === "articles"){
		require 'src/articles.php';
	}elseif($match["target"] === "contact"){
		require 'src/contact.php';
	}elseif($match["target"] === "showDetailsProduct"){
		require 'src/showDetailsProduct.php';
	}elseif($match["target"] === "home"){
		require 'src/home.php';
	}else{
	    require 'src/404.php';
    }

	//dump( $router->getRoutes() );
	//dump( $match['target'] );
	//dump( $match['params'] );
	//dump( $match['name'] );

	require 'src/elements/footer.php';



