<?php
require_once 'src/views/elements/head.php';
require_once 'src/views/elements/footer.php';


head();
?>
    <h1>Mini - Chat</h1>
    <hr>
    <div>
        <form>
            <div class="form-group">
                <label for="message">Votre message</label>
                <input type="text" class="form-control" id="message">

            </div>
            <button type="submit" class="btn btn-outline-dark">Envoyer</button>
        </form>
    </div>
    <div id="message" class="mt-5">
        <p class="p-3 card"></p>
    </div>
<?php
footer();