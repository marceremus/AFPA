<?php
require_once 'src/views/elements/head.php';
require_once 'src/views/elements/footer.php';
require 'src/config/config.php';
require 'src/models/connect.php';

head();

$db = connection();

if(isset($_POST['mes'])){

    $text = $_POST['mes'];

    $sqlInsert = "INSERT INTO chat(message) VALUES(:text)";

    $req = $db->prepare($sqlInsert);
    $req->bindParam(':text', $text);
    $req->execute();

}

$message = array();

$sql = "SELECT * FROM chat ORDER BY datemessage DESC";

$req = $db->prepare($sql);  
$req->execute();

while($data = $req->fetchObject()){
    array_push($message, $data->message);
}


?>
    <h1>Mini - Chat</h1>
    <hr>
    <div>
        <form method="post">
            <div class="form-group">
                <label for="message">Votre message</label>
                <input type="text" name="mes" class="form-control" id="message">

            </div>
            <button type="submit" class="btn btn-outline-dark">Envoyer</button>
        </form>
    </div>
    <div id="message" class="mt-5">
        <?php
        foreach ($message as $mes){
            ?>
            <p class="p-3 card"><?=  $mes; ?></p>
            <?php
        }
        ?>
    </div>
<?php
footer();