<?php

	require 'vendor/autoload.php';
	require 'src/config/Config.php';
	require 'src/Models/Form.php';
	require 'src/templates/Elements/head.php';
	require 'src/templates/Elements/footer.php';
	use src\Models\Form;
	
	head('Home');
	if(URI === '/locationVelo/'){
		require 'src/templates/home.php';
	}elseif(URI === '/locationVelo/contact'){
		require 'src/templates/contact.php';
	}elseif(URI === '/locationVelo/login'){
		require 'src/templates/login.php';
	}else{
		require 'src/templates/404.php';
	}

	footer();


