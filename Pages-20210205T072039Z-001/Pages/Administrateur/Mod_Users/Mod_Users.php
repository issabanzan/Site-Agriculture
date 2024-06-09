<?php session_start();
if( $_SESSION['Identifiant']!=='Admin') {

}?>

<!DOCTYPE html>
<html lang="en">
<link rel="icon" href="images/Administrateur.ico" />	
<head>
	<title>Agriculteurs</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<link rel="icon" type="image/png" href="/../../Pages-20210205T072039Z-001/Pages/Extra/images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="/../../Pages-20210205T072039Z-001/Pages/Extra/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/../../Pages-20210205T072039Z-001/Pages/Extra/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="/../../Pages-20210205T072039Z-001/Pages/Extra/vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="../../Pages-20210205T072039Z-001/Pages/Extra/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="/../../Pages-20210205T072039Z-001/Pages/Extra/vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="/../../Pages-20210205T072039Z-001/Pages/Extra/css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" href="../../../Menu/Style_Menu.css" media="all">

</head>

	<form action = "Mod_Users.php" method = "post">
		<input type='text'name="Identifiant" placeholder="Identifiant">
		<input type="text" name="Nom" placeholder="Nom">
		<input type="text" name="Prenom" placeholder="Prenom">
		<input type="text" name="Filiere" placeholder="Filiere">
        <input type="text" name="Mot_de_passe" placeholder="Mot_de_passe"><br><br>
		<input type="submit" name="modifier" value="Modifier"/>
	</form>	
    <BODY>
    <body >
   <style>
  body
  {background-image: url('completer agriculteur.jpg'); background-size: 100%;
  background-repeat: no-repeat;}
  </style>
  </BODY>  
	<?php
		// Connexion à la base de données
		
try
{
	// On se connecte à MySQL
	$bdd = new PDO ('mysql:host=localhost; dbname=bcttrdqx_issa', 'bcttrdqx_root', 'Banzan9771Z');
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}
		
		// récupération des variables POST: 
		$Identifiant=isset($_POST['Identifiant'])?$_POST['Identifiant']:'';
		$Nom=isset($_POST['Nom'])?$_POST['Nom']:'';
		$Prenom=isset($_POST['Prenom'])?$_POST['Prenom']:'';
		$Filiere=isset($_POST['Filiere'])?$_POST['Filiere']:'';
        $Mot_de_passe=isset($_POST['Mot_de_passe'])?$_POST['Mot_de_passe']:'';

		//Requete modification 
		$sql = "UPDATE membres SET Identifiant='$Identifiant', Nom='$Nom', Prenom='$Prenom', Filiere='$Filiere',Mot_de_passe='$Mot_de_passe' WHERE Identifiant='$Identifiant'";
		$req = $bdd->prepare($sql);
		$req->execute (array('Identifiant' => $Identifiant, 'Nom' => $Nom, 'Prenom' => $Prenom, 'Filiere' => $Filiere, 'Mot_de_passe' => $Mot_de_passe));


	?>