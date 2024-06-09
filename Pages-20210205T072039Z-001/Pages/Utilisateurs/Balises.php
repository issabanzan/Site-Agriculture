<?php session_start(); ?>




<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">
    <link rel="icon" href="Images/Balise.ico" />

    <!-- Title Page-->
    <title><?php echo 'Balise '.$_POST["Balises"]; ?></title>

    <!-- Icons font CSS-->
    <link href="../Administrateur/Add_Users/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="../Administrateur/Add_Users/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="../Administrateur/Add_Users/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../Administrateur/Add_Users/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../Administrateur/Add_Users/css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <body >
   <style>
  body
  {background-image: url('agriculture-field-food-farm-bauer-plant-crop-production-eat.jpg'); background-size: 100%;
  background-repeat: no-repeat;}
  </style>
<?php print_r($_POST['Balises']);?>

<?php function balises($Balises){  try
{
    // On se connecte à MySQL
    $bdd = new PDO ('mysql:host=localhost; dbname=bcttrdqx_issa', 'bcttrdqx_root', 'Banzan9771Z');
}
catch(Exception $e)
{
    // En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

// Si tout va bien, on peut continuer

// On récupère tout le contenu de la table jeux_video
$reponse = $bdd->query('SELECT Longitude,Latitude FROM Balises WHERE Reference="'.$_POST['Balises'].'"');



//afficher les capteurs qui sont dans la balise X

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
?>
    
  
    
 <?php   if (($_SESSION['Identifiant'])!=($donnees['Proprietaire']) && ($_SESSION['Identifiant'])!="Admin" )
 header('Location:Gestion.php'); ?>

<?php
}


$reponse->closeCursor();} // Termine le traitement de la requête

?>

    <div class="page-wrapper bg-gra-01 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                <div class="p-t-15">
                        <a href="Gestion.php">
                        <img src="../Images/Retour.png" alt=""/>
                        </a>
                    <h2 style="color: yellow; font-size: 30px;">Entrez les cordonnées de la balise </h2>
                    
                    <form  action=Verification_Balises.php method="POST" > 
                
<?php $Ref=$_POST['Balises'];?>

                    <input style=display:none name="Reference" value=<?php echo $_POST['Balises'];?>>
                    
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label"></label>
                                    <input class="input--style-4" type="text" name="Longitude" placeholder="Longitude">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label"></label>
                                    <div class="input-group">
                                    <label class="label"></label>
                                    <input class="input--style-4" type="text" name="Latitude" placeholder="Latitude">
                                </div>
                                </div>
                            </div>
                        </div>
                        
                            
                       
                      
                            <button><a  class="btn btn--radius-2 btn--green" style="text-decoration:none" > Accueil </button></a>
                            <img class="Agrisoft-Proprietaire"src="../../../Connexion/Images/Agrisoft.png">
                                <button class="btn btn--radius-2 btn--green" type="submit">Modifier</button>

                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    

    <!-- Jquery JS-->
    <script src="../Administrateur/Add_Users/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="../Administrateur/Add_Users/vendor/select2/select2.min.js"></script>
    <script src="../Administrateur/Add_Users/vendor/datepicker/moment.min.js"></script>
    <script src="../Administrateur/Add_Users/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="../Administrateur/Add_Users/js/global.js"></script>

</body>

</html>

