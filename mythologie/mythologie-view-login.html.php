<?php session_start();
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

	<h1 class="text-center mt-5">Connexion</h1>
	<form action="mythologie-login.php" method="POST" class="center">
		<!-- Pseudo input -->
		<div class="form-outline mb-4">
			<label class="form-label" for="pseudo">Pseudo</label>
			<input type="text" id="pseudo" class="form-control" name="pseudo" required />
			<?php if (!empty($error) && $error == "dontExist") {
			?> <small class="text-danger">Utilisateur inexistant</small>
			<?php
			}
			?>
		</div>

		<!-- Password input -->
		<div class="form-outline mb-4">
			<label class="form-label" for="password">Password</label>
			<input type="password" id="password" class="form-control" name="password" required />
			<?php if (!empty($error) && $error == "password") {

			?> <small class="text-danger">Mot de passe incorrect</small>
			<?php
			}
			?>
		</div>
		<?php if (!empty($error) && $error == "allField") {
		?>
			<div class="alert alert-danger" role="alert">
				<p>Vous n'avez pas remplis tout les champs</p>
			</div>
		<?php
		}
		?>

		<!-- 2 column grid layout for inline styling -->
		<div class="row mb-4">
			<div class="col d-flex justify-content-center">
				<!-- Checkbox -->
				<div class="form-check">
					<input class="form-check-input" type="checkbox" value="ok" id="remember" name="remember" checked />
					<label class="form-check-label" for="remember" name="remember"> Remember me </label>
				</div>
			</div>
		</div>

		<!-- Submit button -->
		<button type="submit" class="btn btn-primary btn-block mb-6">Se connecter</button>

		<!-- Register buttons -->
		<div class="text-center">
			<p>Pas encore membre ? <a href="mythologie-view-register.html.php">Enregistrez vous</a></p>
		</div>
	</form>

	<?php include_once "mythologie-footer.html.php"; ?>

	<!-- Bootstrap core JS-->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	<!-- Core theme JS-->
	<script src="js/scripts.js"></script>
</body>

</html>