<?php session_start();
if (empty($_SESSION['Identifiant'])) {
	header('Location: Erreur.php');
}
?>

<?php try {
	$bdd = new PDO('mysql:host=localhost; dbname=bcttrdqx_issa', 'bcttrdqx_root', 'Banzan9771Z');
} catch (Exception $e) {

	die('Erreur : ' . $e->getMessage());
}

$reponse = $bdd->query('SELECT * FROM balises WHERE Proprietaire="' . $_SESSION['Identifiant'] . '"');


while ($donnees = $reponse->fetch()) {
?>



	<?php $Balise = $donnees['Reference'];
	echo $donnees['Reference'];
	?>

<?php
}
$reponse->closeCursor();



?>
<!DOCTYPE html>
<html lang="en">
<link rel="icon" href="../Images/Utilisateurs.ico" />

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../Extra/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../Extra/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../Extra/vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="../Extra/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="../Extra/vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="/../../Pages-20210205T072039Z-001/Pages/Extra/css/util.css">
	<link rel="stylesheet" type="text/css" href="/../../Pages-20210205T072039Z-001/Pages/Extra/css/main.css">
	<title>Gestion</title>
</head>

<body>
	<form action=Balises.php method="POST">
		<div class="limiter">
			<div class="container-login100">
				<div class="wrap-login100">
					<span class="login100-form-title"><?php echo 'Gestion'; ?></span>

					<div class="container-login100-form-btn">
						<a href="Utilisateurs.php">
							<img src="../Extra/Images/Retour.png" Title="Retour" ; style=" padding-right: 80px;" alt="francetfv-education-logo-mini éducation" />
						</a>
						<a href="/../../Presentation-20210205T072102Z-001/Presentation/Presentation.php">
							<img src="../Extra/Images/Accueil.png" />
						</a>
					</div>

					<div class="container-login100-form-btn">
						<a href="Balises.php">
							<button type="text" name="Balises" value="A" class="login100-form-btn">
								Balise A
							</button>
						</a>
					</div>

					<div class="container-login100-form-btn">
						<a href="Balises.php">
							<button type="text" name="Balises" value="B" class="login100-form-btn">
								Balise B
							</button>
						</a>
					</div>

					<div class="container-login100-form-btn">
						<a href="Balises.php">
							<button type="text" name="Balises" value="C" class="login100-form-btn">
								Balise C
							</button>
						</a>
					</div>

					<div class="container-login100-form-btn">
						<a href="Balises.php">
							<button type="text" name="Balises" value="D" class="login100-form-btn">
								Balise D
							</button>
						</a>
					</div>

					<div class="container-login100-form-btn">
						<a href="Balises.php">
							<button type="text" name="Balises" value="E" class="login100-form-btn">
								Balise 2EEOED
							</button>
						</a>
					</div>
	</Form>


	</div>
	</div>
	</div>
	<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script>
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
	<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>

</html>