# Différentes fonctions :

### Prepare 

    // $req = $db->prepare("SELECT * FROM signit WHERE email = :email OR password1 = :password1");
    $req = $db->prepare("SELECT email, password1 FROM signit WHERE email = :email AND password1 = :password1");
    // changement des paramétres et controle des champs
    $req->bindParam(":email", $email, PDO::PARAM_STR);
    $req->bindParam(":password1", $pass);
    //execution de la requette

    $req->execute() ;

    while($data = $req->fetchObject()){
        //var_dump($data);
         echo '<p>'.$data->email.'  '.$data->password1.'  </p>';
