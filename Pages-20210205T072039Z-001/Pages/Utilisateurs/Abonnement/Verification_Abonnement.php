<?php
session_start(); 
if(empty($_SESSION['Identifiant'])) {
 header('Location: /../../Pages-20210205T072039Z-001/Pages/Utilisateurs/Erreur.php');
}
?>

<?php
    $base=@mysqli_connect("localhost","bcttrdqx_root","Banzan9771Z","bcttrdqx_issa");
if ($base)
{

	$sql = 'UPDATE abonnement SET Etat= "'.$_POST['Etat_A'].'" WHERE Balise="'.$_POST['Reference'].'" AND Abonne ="'.$_SESSION['Identifiant'].'"';
	$resultat = mysqli_query($base, $sql);
}
	header('Location:Gestion_Abonnement.php');


?>