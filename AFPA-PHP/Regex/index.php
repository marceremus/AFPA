<?php
if(isset($_POST['mot']))  {
    $mot = htmlspecialchars(trim($_POST['mot']));
}else{
    $mot = "";
}

//$motrecherche="M@rc12345";

//$regex = "/^[A-Z]+@[a-z]/";
//$regex = "/^@\w/";

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>REGEX</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
<div class="container">
    <div>
        <h1>Regex</h1>
    </div>
    <div class="col">
        <form method="POST">
            <div class="form-group">
                <label for="mot">Le mot</label>
                <input type="text" name="mot" class="form-control" id="mot">
            </div>
            <button type="submit" class="btn btn-success">Envoyer</button>
        </form>
    </div>
    <div class="mt-5">
        <?php

        if(preg_match($regex,$mot)){
            ?>
            <div class="alert alert-success" role="alert">
              <p>Super, ce mot correspond au modèle</p>
            </div>
            <?php
        }else{
            ?>
            <div class="alert alert-danger" role="alert">
                <p>Le mot ne correspond pas au modèle</p>
            </div>

            <?php
        }
        ?>
    </div>
</div>

<!-- JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

