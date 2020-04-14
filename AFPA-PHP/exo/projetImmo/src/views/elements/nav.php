<?php

function nav($src){
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="/">DamienLocation</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $src; ?>location.php">Location</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $src; ?>contact.php">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $src; ?>agence.php">Agence</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $src; ?>login.php">Login</a>
                </li>
            </ul>
        </div>
    </nav>
<?php
}
