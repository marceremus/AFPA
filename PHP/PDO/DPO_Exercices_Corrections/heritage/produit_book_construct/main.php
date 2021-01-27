<?php
	namespace produit_book_construct;
	require "Product.php";
	require "Book.php";

	$book = new Product("Livre de poche", 22.99);
	$book2 = new Book("Livre de nuit", 21.25);

	echo "Titre : ".$book2->printTitle();
	echo '<br>';
	echo "PrintTitle : ".$book2->printTitle();
	echo '<br>';
	echo "Get name : book : ".$book->getName();
	echo '<br>';
	echo "Get name : book2 : ".$book2->getName();

