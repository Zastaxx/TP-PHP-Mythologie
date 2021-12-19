<?php
include_once "bddMythologie/mythologie-bdd.php";
include_once "bddMythologie/bddManager.php";
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container px-5">
        <a class="navbar-brand" href="index.php">La Mythologie Grecque</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link" href="index.php">Les Articles</a></li>
                <?php if (!isset($_COOKIE['id']) && !isset($_SESSION['id'])) { ?>
                    <li class="nav-item"><a class="nav-link" href="mythologie-view-login.html.php">Connexion / Inscription</a></li>
                    <?php } else {
                    if ((isset($_COOKIE['admin']) && $_COOKIE['admin'] == "1") || (isset($_SESSION['admin']) && $_SESSION['admin'] == "1")) { ?>
                    <li class="nav-item"><a class="nav-link" href="mythologie-view-add.html.php">Ajouter un article</a></li> <?php } ?>
                    <li class="nav-item"><a class="nav-link" href="mythologie-deco.php">Déconnexion</a></li>
                    <li class="nav-item"><a class="nav-link text-danger"><?= $_SESSION['pseudo'] ?> </a></li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>