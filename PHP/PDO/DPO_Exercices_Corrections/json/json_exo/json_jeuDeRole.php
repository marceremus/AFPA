<?php
$jsonSource = "../json_files/jeu_de_role.json";
$jsonContect = file_get_contents($jsonSource);
$jsonDecode = json_decode($jsonContect);

$tabUser = $jsonDecode[0]->data;
foreach ($tabUser as $user){
	echo "<p>id_typeUser : ".$user->id_typeUser." typeName : ".$user->typeName." actived : ".$user->actived."</p>";
}
