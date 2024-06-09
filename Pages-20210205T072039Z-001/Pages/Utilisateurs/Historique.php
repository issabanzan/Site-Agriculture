<?php session_start();
if(empty($_SESSION['Identifiant'])) {
 header('Location: Erreur.php');
}
?>
<!doctype html>
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="styles.css">
   <link rel="icon" href="../Images/Historique.ico" />
   <script src="https://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="script.js"></script>
   <title>Historique</title>
</head>
   <body>
   <a href="Utilisateurs.php">
<img src="../Images/Retour.png" alt="francetfv-education-logo-mini éducation"/>
</a>
   </body>
<html>
