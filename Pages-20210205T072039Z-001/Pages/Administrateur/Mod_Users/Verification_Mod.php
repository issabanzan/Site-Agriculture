<?php header('Location: /../../Pages-20210205T072039Z-001/Pages/Administrateur/Mod_Users/Mod_Users.php');
// on se connecte à notre base
function Requete_Sql()
{

    $base=@mysqli_connect("localhost","root","","issa");
if ($base)
{

// lancement de la requête
$sql ='UPDATE membres SET Identifiant="'.$_POST['Identifiant'].'",
                                  Nom="'.$_POST['Nom'].'",
                               Prenom="'.$_POST['Prenom'].'",
                              Filiere="'.$_POST['Filiere'].'", 
 
                    WHERE Identifiant="'.$_POST[','].'"';
                    $resultat = mysqli_query($base, $sql);
}

    

}

// on exécute la requête (mysql_query) et on affiche un message au cas où la requête ne se passait pas bien (or die)

?>
L'adresse et l'age vient d'être modifiés.
</body>
</html>