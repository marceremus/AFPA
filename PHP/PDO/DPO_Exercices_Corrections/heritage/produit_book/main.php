<?php
	require "Product.php";
	require "Book.php";

	$book = new Product("book", 10.10, "book");
	$book2 = new Book("Book2", 29.90);

	var_dump($book2->printTitle());
	echo '<br>';
	var_dump($book2);
	echo '<br>';
	var_dump($book);

