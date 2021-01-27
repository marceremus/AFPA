<?php
	namespace produit_book_simple;
	require "Product.php";
	require "Book.php";

	$book = new Product("Livre", "La vie est belle");
	$product_enfant = new Book("Le bon coin", "CD", "Le développement PHP");

	var_dump($book);
	echo '<br>';
	var_dump($product_enfant);
	echo '<br>';
	echo "Le titre du book : ".$book->getType();
	echo '<br>';
	echo "Le nom du book : ".$book->getName();
	echo '<br>';
	echo "Le printTitle du book 2 : ".$product_enfant->printTitle();
	echo '<br>';
	echo "Le type du book 2 : ".$product_enfant->getType();
	echo '<br>';
	echo "Le nom du book 2 : ".$product_enfant->getName();
	echo '<br>';
	echo "La collection du book 2 : ".$product_enfant->getCollection();
	$product_enfant->setCollection("NATAN");
	echo "La collection du book 2 : ".$product_enfant->getCollection();
