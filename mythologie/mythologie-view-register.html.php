<?php
if (isset($_GET['error'])) {
    $error = $_GET['error'];
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
</head>

<body>
    <?php include_once "mythologie-header.html.php"; ?>

    <h1 class="text-center mt-5">Enregistrez vous</h1>
    <form action="mythologie-register.php" method="POST" class="center">
        <!-- Pseudo input -->
        <div class="form-outline mb-4">
            <label class="form-label" for="pseudo">Pseudo</label>
            <input type="text" id="pseudo" class="form-control" name="pseudo" required />
        </div>

        <!-- Password input -->
        <div class="form-outline mb-4">
            <label class="form-label" for="password">Password</label>
            <input type="password" id="password" class="form-control" name="password" required />
        </div>
        <div class="form-outline mb-4">
            <label class="form-label" for="password2">Confirmez votre password</label>
            <input type="password" id="password2" class="form-control" name="password2" required />
            <?php
            if (!empty($error) && $error == "notSamePass") {
            ?> <small class="text-danger">Vous avez rentré deux mots de passes différents</small>
            <?php
            }
            ?>
        </div>

        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block mb-6">Créer son compte</button>
        <?php
        if (!empty($error) && $error == "allField") {
        ?> <small class="text-danger">Vous n'avez pas rentré tout les champs</small>
        <?php
        }
        ?>
    </form>
    <?php if (!empty($error) && $error == "dbError") {
    ?>
        <div class="alert alert-danger" role="alert">
            <p>Echec de la création de compte</p>
        </div>
    <?php
    }
    ?>

    <?php include_once "mythologie-footer.html.php"; ?>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>