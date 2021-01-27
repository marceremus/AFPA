## Connection à la DB

	function connect(){
		try
		{
			$db = new PDO('mysql:host=localhost;dbname=velo;charset=utf8', 'root', 'root');
			return $db;
		}
		catch(Exception $e)
		{
			die('Erreur : '.$e->getMessage());
		}
	}

