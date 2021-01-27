<?php

	$jsonFileSource = "../json_files/user1.json";

	$jsonGetContent = file_get_contents($jsonFileSource);

	$jsonResponseData = json_decode($jsonGetContent);

	foreach ($jsonResponseData as $data){
		echo $data->name."<br>";
		echo $data->{"first-name"}."<br>";
		echo $data->{"last-name"}."<br>";
		echo $data->{"display-name"}."<br>";
		echo $data->email."<br>";
		echo $data->password->value."<br>";
		echo $data->active."<br>";
	}
