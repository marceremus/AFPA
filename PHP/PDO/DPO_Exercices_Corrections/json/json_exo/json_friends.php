<?php
	$jsonSource = "../json_files/friends.json";
	$jsonContent = file_get_contents($jsonSource);
	$jsonDecode = json_decode($jsonContent);

	foreach ($jsonDecode as $data){
		$friends = $data->friends;
		foreach ($friends as $friend){
			echo '<p>'.$friend->id.' '.$friend->name.'</p>';
		}
		echo '<hr>';
	}
