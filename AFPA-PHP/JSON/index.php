<?php

$jsonFileSource = "./json_files/user1.json";

$jsonGetContent = file_get_contents($jsonFileSource);

$jsonResponseData = json_decode($jsonGetContent);

?>
    <div>
        <h1>Liste des utilisateurs - JSON file</h1>
        <hr>
        <br>
        <table>
            <thead>
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

