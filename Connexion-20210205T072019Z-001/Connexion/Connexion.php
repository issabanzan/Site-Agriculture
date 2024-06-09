<?php session_start();

if (empty($_SESSION['Identifiant'])) {
} elseif (($_SESSION['Identifiant']) != "Admin") {
	header('Location:/../../Pages-20210205T072039Z-001/Pages/Utilisateurs/Utilisateurs.php');
} elseif ($_SESSION['Identifiant'] == "Admin") {
	header('Location: /../../Menu-20210205T072028Z-001/Menu/Menu_Admin.php');
}
?>

<!DOCTYPE html>
<html lang="fr">

<link rel="icon" href="Images/agribusiness.png" />

<head>
	<title>Connexion - Agriculture</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic">

					<img src="Images/agribusiness.png" alt="Animaux">
				</div>

				<form action="Verification.php" method="POST">
					<span class="login100-form-title">
						<img src="Images/download.jpg">
					</span>

					<div class="wrap-input100 validate-input">

						<input class="input100" type="text" name="Identifiant" placeholder="Identifiant" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input">
						<input class="input100" type="password" name="Password" placeholder="Mot de Passe" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="container-login100-form-btn">

						<button href="/../../Menu-20210205T072028Z-001/Menu/Menu.php" class="login100-form-btn">
							Se connecter
						</button>
					</div>
					<div class="text-center p-t-136 Accueil">

					</div>
				</form>
			</div>
		</div>
	</div>
</body>

</html>