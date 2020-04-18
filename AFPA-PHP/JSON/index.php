<?php

$jsonFileSource = "./json_files/user1.json";

$jsonGetContent = file_get_contents($jsonFileSource);

$jsonResponseData = json_decode($jsonGetContent);

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
        <h1>Liste des utilisateurs - JSON file</h1>
        <hr>
        <br>
        <table class="table table-responsive">
            <thead class="thead-dark">
            <th>Num </th>
            <th>Prénom </th>
            <th>Nom de famille</th>
            <th>Nom utilisateur</th>
            <th>E-mail</th>
            <th>Mot de passe</th>
            <th>Statut</th>
            </thead>
            <?php
            foreach ($jsonResponseData as $data) {
                ?>
                <tr>

                    <td><?= $data->id; ?></td>
                    <td><?= $data->{"first-name"}; ?></td>
                    <td><?= $data->{"last-name"}; ?></td>
                    <td><?= $data->{"display-name"}; ?></td>
                    <td><?= $data->email; ?></td>
                    <td><?= $data->password->value; ?></td>

                    <td>
                        <?php
                        if($data->active == 1){
                            ?>
                            Activé
                            <?php
                        }else{
                            ?>
                            Non activé
                            <?php
                        }
                        ; ?>
                    </td>
                </tr>
                <?php
            }
            ?>
        </table>
    </div>
</div>
<!-- JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

