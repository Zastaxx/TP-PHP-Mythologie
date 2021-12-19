<?php session_start();
include_once "bddMythologie/mythologie-bdd.php";
include_once "bddMythologie/bddManager.php";
$data = allArticle($db);

?>
<!DOCTYPE html>
<html lang="fr">

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

    <!-- Page Content-->
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 align-items-center my-5">
            <div class="col-lg-7"><img class="img-fluid rounded mb-4 mb-lg-0" src="https://talivera.fr/actualites/wp-content/uploads/2021/03/Copie-de-Design-sans-titre-8.png" alt="..." /></div>
            <div class="col-lg-5">
                <h1 class="font-weight-light">Lorem ipsum</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet nihil cupiditate facere voluptas omnis quisquam aliquid saepe repellendus dicta suscipit, ducimus sunt atque nam et error quia illo, corporis nisi.</p>
            </div>
        </div>

        <div class="row gx-4 gx-lg-5">
            <!-- les articles -->
            <?php foreach ($data as $value) { ?>
                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <div class="card-body">
                            <p class="card-text end"><small class="text-muted">Publication : <?= htmlspecialchars($value->date_article) ?></small></p>
                            <h2 class="card-title"><?= htmlspecialchars($value->nom_article) ?> </h2>
                            <p class="card-text"><?= htmlspecialchars($value->desc_article) ?></p>

                        </div>
                        <div class="card-footer"><a class="btn btn-primary btn-sm" href="mythologie-view-article.html.php?id=<?= $value->id_article ?>">Lire l'article</a></div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

    <?php include_once "mythologie-footer.html.php"; ?>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>