<?php

	$jsonFileSource = "../json_files/products.json";

	$jsonGetContent = file_get_contents($jsonFileSource);

	$jsonResponseData = json_decode($jsonGetContent);

	//var_dump($jsonResponseData);

	foreach ($jsonResponseData as $key => $data){
		$tab = $data->_id;

		echo "Name : ".$data->{"product_name"}."  Supplier : ".$data->{"supplier"}.' Prix : '.$data->{"quantity"}.' Unit cost : '.$data->{"unit_cost"}.' id: '.$tab->oid.'<br>';

	}
