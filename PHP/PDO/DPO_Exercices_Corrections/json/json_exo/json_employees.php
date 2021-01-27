<?php

	$jsonSource = '../json_files/employees.json';
	$jsonContent = file_get_contents($jsonSource);
	$jsonDecode = json_decode($jsonContent);
	$emplyees = $jsonDecode->Employees;
	//var_dump($emplyees);

	foreach ($emplyees as $data){
		echo '<p>userId : '.$data->userId.' jobTitleName : '.$data->jobTitleName.' firstName : '.$data->firstName.' lastName : '.$data->lastName.' preferredFullName : '.$data->preferredFullName.' employeeCode : '.$data->employeeCode.' region : '.$data->region.' phoneNumber : '.$data->phoneNumber.' emailAddress : '.$data->emailAddress.'</p>';
	}
