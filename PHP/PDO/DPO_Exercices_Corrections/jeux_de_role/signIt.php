<?php
	session_start();

	if(isset($_SESSION['actived'])){
		$actived = $_SESSION['actived'];
    }else{
		$actived = "";
    }

?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <title>Document</title>
</head>
<body>
<div class="container">
    <section>
        <h2>Sign it</h2>
        <hr>
        <div>
			<?php

				if($actived === (string)0){
					?>
                    <span>Le type d'utilisateur n'est pas actif</span>
					<?php
				}
			?>
        </div>
        <div id="signIt">
            <form action="verifPassword.php" method="POST">
                <div class="form-group">
                    <label for="email">Email adresse : </label>
                    <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Votre email">
                </div>
                <div class="form-group">
                    <label for="password">Mot de pass</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Mot de passe">
                </div>
                <div id="btn">
                    <a href="#"><button type="submit" class="btn btn-danger">Abandonner</button></a>
                    <button type="submit" class="btn btn-success">Connectez vous</button>
                </div>
            </form>
        </div>
    </section>
</div>
<?php
	session_destroy();
?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
