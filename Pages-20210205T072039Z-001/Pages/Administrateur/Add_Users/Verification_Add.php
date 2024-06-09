<?php
session_start();
if (empty($_SESSION['Identifiant']))
{
    header('Location: ../../Utilisateurs/Erreur.php');
}
try
{ if (isset($_POST['Nom']))
    {
        $user = 'bcttrdqx_root';
        $password = 'Banzan9771Z';
        $db = 'bcttrdqx_issa';
        $host = 'localhost';
        $link = mysqli_init();
        $success = mysqli_real_connect($link, $host, $user, $password, $db);

        $Nom = $_POST['Nom'];
        $Prenom = $_POST['Prenom'];
        $Identifiant = $_POST['Filiere'] . '-' . $_POST['Identifiant'];
        $Filiere = $_POST['Filiere'];
        $Mot_de_Passe = $_POST['Password'];
        $bdd = new PDO('mysql:host=localhost; dbname=bcttrdqx_issa', 'bcttrdqx_root', 'Banzan9771Z');

        if ($bdd != null)
        {
            header('Location: /../../Pages-20210205T072039Z-001/Pages/Administrateur/Add_Users/Add_Users.php');
        }

        $req = $bdd->prepare("INSERT INTO `membres` (`Identifiant`, `Nom`,`Prenom`,`Filiere`,`Mot_de_Passe`) VALUES (?,?,?,?,?)");
        if ($req == false)
        {
            echo "erreur prepare";
        }
    $req->execute(array($Identifiant,$Nom, $Prenom,$Filiere,$Mot_de_Passe));
        if ($req == false)
        {
            echo "erreur execute";
        }
        echo "<br>Reqd";
    }
}
catch(PDOException $e)
{
    echo "Erreur" . $e->getMessage();
}
?>
