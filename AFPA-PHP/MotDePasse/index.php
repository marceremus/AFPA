<?php

if(isset($_POST['mdp'])){
    $mdp = password_hash(htmlspecialchars(trim($_POST['mdp'])), PASSWORD_BCRYPT);
}else{
    $mdp = '';
}
/*
if(isset($_POST['email'])){
    $email = htmlspecialchars(trim($_POST['mdp']));
}else{
    $email = '';
}

// Insert int user
$sql = "INSERT INTO matable (mdp, email) VALUES ($mdp, $email)";
$reqInsertUser = $db->prepare($sql);
$reqInsertUser->execute();

// SELECT

$sqlSelectUser = "SELECT COUNT(email) FROM matable WHERE mdp = :mdp AND email = :email AND idUser = :ids";
$reqSelectUser = $db->prepare($sql);
$reqSelectUser->bindParam(':mdp', $mdp);
$reqSelectUser->bindParam(':email', $email);
$reqSelectUser->bindParam(':ids', $id);
$reqSelectUser->execute();

$retureMDP = $reqInsertUser->fetchObject();

if($retureMDP ===1 ){
    return 'OK';
}else{
    return 'Not ok';
}
*/

// Source :  https://www.php.net/manual/fr/function.password-hash.php

// cost - détermine le coût algorithmique qui doit être utilisé. Des exemples de
// ces valeurs peuvent être trouvés sur la page de la documentation de la fonction
// 12 par default

$options = [
    'cost' => 12,
];

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Json - PHP</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
<div class="container">
    <div>
        <h1>Traitement des mots de passes.</h1>
    </div>
    <div class="col">
        <form method="POST">
            <div class="form-group">
                <label for="mdp">Password</label>
                <input type="password" name="mdp" class="form-control" id="mdp">
            </div>
            <button type="submit" class="btn btn-success">Envoyer</button>
        </form>
    </div>
    <div>
        <p>Sans hash => <?= $mdp; ?></p>
        <p>MD5 => <?= MD5($mdp); ?></p>
        <p>SHA1 => <?= hash('SHA1', $mdp); ?></p>
        <p>SHA512 => <?= hash('SHA512', $mdp); ?></p>
        <p>PASSWORD_BCRYPT => <?= password_hash($mdp, PASSWORD_BCRYPT);; ?></p>



    </div>
</div>

<!-- JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

