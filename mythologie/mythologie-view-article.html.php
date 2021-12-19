<?php
session_start();
include_once "bddMythologie/mythologie-bdd.php";
include_once "bddMythologie/bddManager.php";
$data = selectArticleByID($_GET['id'], $db);
$data2 = whoPost($_GET['id'], $db);
$getid = htmlspecialchars($_GET['id']);
$data3 = allCommentaires($getid, $db);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Mythologie Grecque</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <link href="css/styles.css" rel="stylesheet" />
    <link href="css/monstyle.css" rel="stylesheet" />
</head>

<body>
    <?php include_once "mythologie-header.html.php"; ?>

    <?php foreach ($data as $value) { ?>
        <div class="card mb-3 center">
            <img class="card-img-top imgcardA" src="assets/img/<?= htmlspecialchars($value->img_article) ?>" alt="Card image cap">
            <div class="card-body">
                <h2 class="card-title"><?= htmlspecialchars($value->nom_article) ?></h2>
                <p class="card-text"><?= $value->text_article ?></p>
                <p class="card-text"><small class="text-muted"><?= htmlspecialchars($value->date_article) . " - Poster par : " . htmlspecialchars($data2->nom_user) ?></small></p>
            </div>
            <?php
            if ((isset($_COOKIE['admin']) && $_COOKIE['admin'] == "1") || (isset($_SESSION['admin']) && $_SESSION['admin'] == "1")) { ?>

            <!-- BOUTON SUPPR ARTICLE -->
            <a type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Supprimer Article</a>

            <!--MODAL SUUPR ARTICLE -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Suppresion</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Êtes-vous sûr de vouloir supprimer l'article <?= htmlspecialchars($value->nom_article) ?> ?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Annuler</button>
                            <a type="button" class="btn btn-success" href="mythologie-del.php?delete=<?= htmlspecialchars($value->id_article) ?>">Confirmer</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php } ?>
</div>
<?php } ?>

<div class="col-lg-12 center">
    <h4 class="commentaire">Liste des commentaires :</h4>
    <?php foreach ($data3 as $value) {
        $idcom = whoPostCom($value->id_com, $db); ?>
        <div class="card mb-3" id="comms">
            <div class="card-body">
                <p class="auteur">Auteur : </p><?= htmlspecialchars($idcom->nom_user) ?> - <small>Date : <?= $value->date_com ?></small><br>
                <p class="auteur">Message : </p><?= htmlspecialchars($value->text_com) ?>

                <!-- BOUTON SUPPR COM -->
                <?php if (isset($_COOKIE['id']) || isset($_SESSION['id'])) {
                if ($_SESSION['pseudo'] == $idcom->nom_user) { ?>
                <div class="badge bg-danger text-white position-absolute" style="top: .5rem; right: .5rem"><a type="button" data-bs-toggle="modal" data-bs-target="#Modal">&#x274C;</a></div>
                <?php } } ?>
            </div>
        </div>

        <!-- MODAL SUPPR COM -->
        <div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Suppresion</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Êtes-vous sûr de vouloir le commentaire : <?= htmlspecialchars($value->text_com) ?> ?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Annuler</button>
                            <a type="button" class="btn btn-success icon" href="mythologie-delcom.php?delete=<?= htmlspecialchars($value->id_com) ?>">Confirmer</a>
                        </div>
                    </div>
                </div>
            </div>
    <?php } ?>
</div>

<?php if (isset($_COOKIE['id']) || isset($_SESSION['id'])) { ?>
    <div class="col-lg-12 center">
        <form action="mythologie-commentaire.php?id=<?= $data[0]->id_article; ?>" method="POST" enctype="multipart/form-data" id="form_id">
            <div class="form-group">
                <h5><label for="inputMessage">Message :</label></h5>

                <input type="text" name="commentaire" class="form-control" tabindex="4" placeholder="Écris ton commentaire" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block" tabindex="5">Envoyer</button>
        </form>
    </div>
    </div>
<?php } ?>

<?php include_once "mythologie-footer.html.php"; ?>

<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
</body>

</html>