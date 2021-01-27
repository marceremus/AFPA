<?php

	$jsonFileSource = "../json_files/nomJsonData.json";

	$jsonGetContent = file_get_contents($jsonFileSource);

	$jsonResponseData = json_decode($jsonGetContent);

	//var_dump($jsonResponseData);

	foreach ($jsonResponseData as $data){
		echo " Id : ".$data->_id." <br>Age: ".$data->age." <br>eyeColor : ".$data->eyeColor."<br>Name:  ".$data->name."<br>Company:  ".$data->company."<br>Email:  ".$data->email."<br>Phone:  ".$data->phone."<br>Adresse:  ".$data->address."<br>About:  ".$data->about."<br><hr>";
	}
