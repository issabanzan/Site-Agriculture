<?php session_start();
if (empty($_SESSION['Identifiant'])) {
    header('Location: /../../Pages-20210205T072039Z-001/Pages/Utilisateurs/Erreur.php');
}
?>
<?php try {
    $bdd = new PDO('mysql:host=localhost; dbname=bcttrdqx_issa', 'bcttrdqx_root', 'Banzan9771Z');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
$reponse = $bdd->query('SELECT Etat FROM abonnement WHERE Abonne="' . $_SESSION['Identifiant'] . '" AND Balise="' . $_POST['Balises'] . '"');

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch()) {
?>
    <?php $Etat = $donnees['Etat'];
    echo $Etat; ?>
<?php
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
    <link rel="icon" href="Images/Balise.ico" />
    <title>Abonnement</title>
    <link href="../../Administrateur/Add_Users/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="../../Administrateur/Add_Users/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="../../Administrateur/Add_Users/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../../Administrateur/Add_Users/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">
    <link href="../../Administrateur/Add_Users/css/main.css" rel="stylesheet" media="all">
</head>

<body>


    <style>
        body {
            background-image: url('1d4d2a0d664bcf04bbe7abe36f3ec9.jpg');
            background-size: 100%;
            background-repeat: no-repeat;
        }
    </style>
    <div class="page-wrapper bg-gra-01 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <div class="p-t-15">
                        <a href="Abonnement_Gestion.php">
                            <img src="../../Images/Retour.png" alt="" />
                            </br> </a> </br>
                        <h2 style="color: green; font-size: 20px;"> </h2>
                        <?php

                        $Etat_A = Null;

                        if (($Etat) == "0") {
                            $Etat_A = "1";
                            $Etat_Valider = "ACTIVER";
                        }
                        if (($Etat) == "1") {
                            $Etat_A = "0";
                            $Etat_Valider = "DESACTIVER";
                        }

                        ?>

                        <form action=Verification_Abonnement.php method="POST">
                            <input style=display:none name="Reference" value="A">
                            <div class="row row-space">
                                <div class="col-2">
                                    <div class="input-group">
                                        <label class="label"></label>
                                        <input name="Etat" readonly value="<?php $Etat ?>" class="input--style-4" type="text" placeholder="<?php
                                                                                                                                            if (($Etat) == "1") {
                                                                                                                                                echo 'Abonnement activer';
                                                                                                                                            }
                                                                                                                                            if (($Etat) == "0") {
                                                                                                                                                echo ' Abonnement desactiver';
                                                                                                                                            }
                                                                                                                                            ?>">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="input-group">
                                        <label class="label"></label>
                                        <div class="input-group">
                                            <a onclick="var supprimer=confirm('  <?php echo 'Votre abonnement à la balise ' . $_POST['Balises'] . ' est ' . $Etat_Valider ?>');return supprimer;"><button class="btn btn--radius-2 btn--blue" Name="Etat_A" value="<?php echo $Etat_A ?>" type="submit">

                                                    <?php

                                                    if (($Etat) == "0") {
                                                        echo 'Activer';
                                                    }
                                                    if (($Etat) == "1") {
                                                        echo 'Desactiver';
                                                    }

                                                    ?></button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>

                    </form>
                </div>
            </div>
        </div>
    </div>