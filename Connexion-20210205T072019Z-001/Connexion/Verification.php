<?php
session_start();
if (empty($_SESSION['Identifiant'])) {
    header('Location: /../../Pages-20210205T072039Z-001/Pages/Utilisateurs/Deconnexion.php');
}

$_SESSION['Identifiant'] = $_POST['Identifiant'];

if (isset($_POST['Identifiant']) && isset($_POST['Password'])) {

    $db_username = 'bcttrdqx_root';
    $db_password = 'Banzan9771Z';
    $db_name = 'bcttrdqx_issa';
    $db_host = 'localhost';
    $db = mysqli_connect($db_host, $db_username, $db_password, $db_name) or die('Connexion Imposible');
    $username = mysqli_real_escape_string($db, htmlspecialchars($_POST['Identifiant']));
    $password = mysqli_real_escape_string($db, htmlspecialchars($_POST['Password']));

    $requete = "SELECT count(*) FROM membres WHERE Identifiant = '" . $username . "' AND Mot_de_Passe = '" . $password . "' ";
    $exec_requete = mysqli_query($db, $requete);
    $reponse = mysqli_fetch_array($exec_requete);
    $count = $reponse['count(*)'];
    if ($count != 0) {
        if ($username == 'Admin') {
            header('Location: /../../Menu-20210205T072028Z-001/Menu/Menu_Admin.php');
        } else {
            header('Location:/../../Pages-20210205T072039Z-001/Pages/Utilisateurs/Utilisateurs.php');
            mysqli_close($db);
        }
    }
}
