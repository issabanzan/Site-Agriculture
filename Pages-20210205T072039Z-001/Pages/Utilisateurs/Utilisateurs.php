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
$reponse = $bdd->query('SELECT * FROM membres WHERE Identifiant="' . $_SESSION['Identifiant'] . '"');
while ($donnees = $reponse->fetch()) {
?>



	<?php $Filiere = $donnees['Filiere']; ?>



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
	<link rel="stylesheet" type="text/css" href="../Extra/css/util.css">
	<link rel="stylesheet" type="text/css" href="../Extra/css/main.css">
	<title>Agriculteurs</title>
</head>

<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<span class="login100-form-title"><?php echo $Filiere; ?></span>
				<div class="container-login100-form-btn">
					<a href="/../../Presentation-20210205T072102Z-001/Presentation/Presentation.php">
						<img src="../Extra/Images/Accueil.png" />
					</a>
				</div>
				<div class="container-login100-form-btn">
					<a href="Gestion.php">
						<button class="login100-form-btn">
							Gestion Balises
						</button>
					</a>
				</div>
				<div class="container-login100-form-btn">
					<a href="/../../Pages-20210205T072039Z-001/Pages/Utilisateurs/Abonnement/Gestion_Abonnement.php">
						<button class="login100-form-btn">
							Abonnement
						</button>
					</a>
				</div>
				<div class="container-login100-form-btn">
					<a href="/../../Pages-20210205T072039Z-001/Pages/Utilisateurs/Carte/Carte.php">
						<button class="login100-form-btn">
							Carte
						</button>
					</a>
				</div>
				<div class="container-login100-form-btn">
					<a href="/../../Pages-20210205T072039Z-001/Pages/Utilisateurs/GraphPHP 1.0">
						<button class="login100-form-btn">
							Historique
						</button>
					</a>
				</div>
				<div class="container-login100-form-btn">
					<a href="/../../Pages-20210205T072039Z-001/Pages/Utilisateurs/Deconnexion.php">
						<button style="Background-color : #ff0000b0 ;
 											   border-radius:30px;
											   padding : 5px 30px 5px 30px;
											   color : White;">
							Deconnexion
						</button>
					</a>
				</div>
			</div>
		</div>
	</div>
	<script src="/Extra/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="/Extra/vendor/bootstrap/js/popper.js"></script>
	<script src="/Extra/Administrateur/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="/Extra/Administrateur/vendor/select2/select2.min.js"></script>
	<script src="/Extra/Administrateur/vendor/tilt/tilt.jquery.min.js"></script>
	<script>
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
	<script src="/Extra/Administrateur/js/main.js"></script>

</body>

</html>