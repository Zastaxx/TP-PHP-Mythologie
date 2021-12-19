<?php
session_start();
if (isset($_COOKIE['id']) || isset($_SESSION['id'])) {
    if ($_COOKIE['admin'] == "1" || $_SESSION['admin'] == "1") {
        include_once "bddMythologie/mythologie-bdd.php";
        include_once "bddMythologie/bddManager.php";
        if (!empty($_GET['error'])) {
            $error = explode("-", $_GET['error']);
        }
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
            <script src="https://cdn.tiny.cloud/1/afzeifva53kylb5vun5gxa2xf3zrqs11tftgilzxlf66m0ej/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
        </head>

        <body>
            <?php include_once "mythologie-header.html.php"; ?>

            <form method="POST" action="mythologie-add.php" enctype="multipart/form-data" class="center">
                <div class="form-group">
                    <label for="nom_article">Titre de l'article :</label>
                    <input type="text" class="form-control" id="nom_article" placeholder="Titre de l'article" required name="nom_article">
                </div>
                <div class="form-group">
                    <label for="desc_article">Description de l'article</label>
                    <input type="text" class="form-control" placeholder="Description de l'article" required name="desc_article">
                </div>
                <div class="form-group">
                    <label for="mytextarea">Texte de l'article</label>
                    <textarea id="mytextarea" name="mytextarea" class="form-control" placeholder="Texte de l'article" requiredrows="15" minlength="100"></textarea>
                </div>
                <div class="form-group">
                    <label for="article_img">Upload image de l'article (format jpg/png)</label>
                    <input type="file" class="form-control" required name="img_article">
                </div>

                <button type="submit" class="btn btn-primary">Créer l'Article</button>
                <?php if (!empty($error)) {

                ?>
                    <div class="alert alert-danger" role="alert">
                        <?php
                        echo "<p>";
                        foreach ($error as $error) {
                            if ($error == "format") {
                                echo " La photo doit être au format jpg ou png. </br> ";
                            } else if ($error == "size") {
                                echo " Le fichier ne doit pas dépasser les 3 Mo. </br> ";
                            } else if ($error == "nom") {
                                echo " Le titre de l'article doit faire plus de 10 caractères. </br> ";
                            } else if ($error == "desc") {
                                echo " La description de l'article doit faire plus de 50 caractères. </br> ";
                            } else if ($error == "strlen") {
                                echo " Le texte doit faire au minimum 100 caractères. </br> ";
                            } else if ($error == "exist") {
                                echo "Le nom de l'article que vous avez rentré existe déjà.";
                            } else if ($error == "specialC") {
                                echo " Caractères spéciaux interdit sur le nom de l'article.";
                            }
                        }
                        echo "</p>";
                        ?>
                    </div>
                <?php
                } else if (!empty($_GET['add'])) { ?>
                    <div class="alert alert-success" role="alert">
                        <p>Article ajouté avec succès</p>
                    </div>
                <?php
                }
                ?>
            </form>

            <?php include_once "mythologie-footer.html.php"; ?>

            <!-- Bootstrap core JS-->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
            <!-- Core theme JS-->
            <script src="js/scripts.js"></script>
        </body>

        </html>
<?php
    } else {
        header("Location: index.php");
    }
} ?>