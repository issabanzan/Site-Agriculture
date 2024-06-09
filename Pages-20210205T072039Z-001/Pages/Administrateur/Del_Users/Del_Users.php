<?php session_start();
if ($_SESSION['Identifiant'] !== 'Admin') {
    header('Location: ../../Utilisateurs/Erreur.php');
} ?>
<?php
try {
    $bdd = new PDO('mysql:host=localhost; dbname=bcttrdqx_issa', 'bcttrdqx_root', 'Banzan9771Z');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

$reponse = $bdd->query('SELECT Prenom,Nom,Identifiant,Filiere FROM membres WHERE Identifiant != "Admin"');
$bc = 0;
while ($donnees = $reponse->fetch()) {
    $Identifiant[] = $donnees['Identifiant'];
    $Nom[] = $donnees['Nom'];
    $Prenom[] = $donnees['Prenom'];
    $Filiere[] = $donnees['Filiere'];

    $bc++;
}

$reponse->closeCursor();

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <title>Admin | Supprimer</title>
    <link rel="icon" href="Images/Supprimer.ico" />
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <link rel="stylesheet" href="/../../Menu-20210205T072028Z-001/Menu/Style_Menu.css" media="all">
    <link href="css/main.css" rel="stylesheet" media="all">
</head>
<nav> <a href='/../../Menu-20210205T072028Z-001/Menu/Menu_Admin.php'> </nav>
</head>

<body>
    <style>
        body {
            background-image: url('0603907819631-web-tete.jpg');
            background-size: 100%;
            background-repeat: no-repeat;
        }
    </style>
    <div class="page-wrapper bg-gra-01  p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <form action=Verification_Del.php method="POST">
                        <table>
                            <thead>
                                <tr>

                                    <th>Identifiant</th>
                                    <th>Nom</th>
                                    <th>Prenom</th>
                                    <th>Filiere</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                for ($i = 0; $i < $bc; $i++) {
                                ?>
                                    <tr>
                                        <td><?php echo $Identifiant[$i] ?></td>
                                        <td><?php echo $Nom[$i] ?></td>
                                        <td><?php echo $Prenom[$i] ?></td>
                                        <td><?php echo $Filiere[$i] ?></td>
                                        <td> <button type="submit" name="Identifiant" value=<?php echo $Identifiant[$i] ?>>
                                                <a onclick="var supprimer=confirm('Confirmer la supression de <?php echo $Identifiant[$i] ?>');return supprimer;"><img class="Del" src="Images/Delete.png"></a>
                                            </button></td>
                                        <td> <button value=<?php echo $Identifiant[$i] ?> type="submit" class="btn btn--radius-2 btn--green">Modifier
                                            </button></td>
                                    </tr>

                                <?php   }         ?>
                            </tbody>
                        </table>

                        <div class="p-t-15">
                            <div class="p-t-15">
                                <img class="Agrisoft-Proprietaire" src="../../../Connexion/Images/Agrisoft.png">
                            </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>