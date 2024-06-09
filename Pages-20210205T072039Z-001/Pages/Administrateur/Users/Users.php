<?php session_start();
if( $_SESSION['Identifiant']!=='Admin') {
 header('Location: ../../Utilisateurs/Erreur.php');
}?>
<?php
try
{
	// On se connecte à MySQL
$bdd = new PDO ('mysql:host=localhost; dbname=bcttrdqx_issa','bcttrdqx_root', 'Banzan9771Z');
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

// Si tout va bien, on peut continuer

// On récupère tout le contenu de la table 
$reponse = $bdd->query('SELECT * FROM membres WHERE Identifiant != "Admin"');
$bc = 0;
// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
    $Identifiant[] = $donnees['Identifiant'];
    $Nom[] = $donnees['Nom'];
    $Prenom[] = $donnees['Prenom'];
    $Filiere[] = $donnees['Filiere'];
    $Mot_de_Passe[] = $donnees['Mot_de_Passe'];


    $bc++;
}

$reponse->closeCursor(); // Termine le traitement de la requête

?>
                        
      
<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">
    

    <!-- Title Page-->
    <title>Admin | Supprimer</title>
<link rel="icon" href="Images/Supprimer.ico"/>
    <!-- Icons font CSS-->
    <link href="../Del_Users/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="../Del_Users/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="../Del_Users/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="/../../Pages-20210205T072039Z-001/Pages/Del_Users/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../Add_Users/css/main.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="/../../Pages-20210205T072039Z-001/Menu/Style_Menu.css" media="all">
</head>
<nav> <a href='/../../Menu-20210205T072028Z-001/Menu/Menu_Admin.php'>   </nav>
</head>

<body >
  <style>
  body
  {background-image: url('arton8836-7d369.jpg'); background-size: 100%;
  background-repeat: no-repeat;}
  </style>
    <div class="page-wrapper bg-gra-01  p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">

                    


                    

                    
    <table>
   <thead> <!-- En-tête du tableau -->
       <tr>
           
           <th>Identifiant</th>
           <th>Nom</th>
           <th>Prenom</th>
           <th>Filiere</th>
           <th>Mot de Passe</th>
           <th></th>
       </tr>
   </thead> <tbody> 
   <?php   
   for ($i=0; $i < $bc ; $i++) { 
   ?>

  
       <tr>
           <td><?php echo $Identifiant[$i]?></td>
           <td><?php echo $Nom[$i]?></td>
           <td><?php echo $Prenom[$i]?></td>
           <td><?php echo $Filiere[$i]?></td>
           <td><?php echo $Mot_de_Passe[$i]?></td>
           
            
   </tr>
 
<?php   }         ?>  </tbody>
</table>
                       
                        <div class="p-t-15">
                        <div class="p-t-15">
                        
                        

                        <img class="Agrisoft-Proprietaire"src="../../../Connexion/Images/Agrisoft.png">
                        </div>

             
                </div>
            </div>
        </div>
    </div>


</body>

</html>
