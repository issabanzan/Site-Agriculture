<?php session_start();
if( $_SESSION['Identifiant']!=='Admin') {
 header('Location: ../../Utilisateurs/Erreur.php');
}
 
function Generateur_Id($Taille) {
    $Identifiant = "";
    $Chiffres = "0123456789";
    srand((double)microtime()*1000000);
    for($i=0; $i<$Taille; $i++) {
    $Identifiant .= $Chiffres[rand()%strlen($Chiffres)];
    }
    return $Identifiant;
    }
    
 
    function Generateur_Pass($Size) {

        $mot_de_Passe = "";
        
        $Code = "(abcdefghijklmnopqrstuvwxyABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%( )-_=+/?0123456789";
        srand((double)microtime()*time());
        for($i=0; $i<$Size; $i++) {
        $mot_de_Passe .= $Code[rand()%strlen($Code)];
        }
        return $mot_de_Passe;
        }   

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
		<title>Ajouter</title>
		<link href="/../../Pages-20210205T072039Z-001/Pages/Extra/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
		<link href="/../../Pages-20210205T072039Z-001/Pages/Extra/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
		<link href="/../../Pages-20210205T072039Z-001/Pages/Extra/vendor/select2/select2.min.css" rel="stylesheet" media="all">
		<link href="/../../Pages-20210205T072039Z-001/Pages/Extra/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">
		<link rel="stylesheet" href="/../../Menu-20210205T072028Z-001/Menu/Style_Menu.css" media="all">
		<link href="css/main.css" rel="stylesheet" media="all">
	</head>
    
<body>

   <style>
  body
  {background-image: url('giee-1.jpg'); background-size: 100%;
  background-repeat: no-repeat;}
</style>

<div class="page-wrapper bg-gra-01 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                

                <div class="card-body">
              
                    
                    <form  action=Verification_Add.php method="POST" > 

                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label"></label>
                                    <input class="input--style-4" type="text" name="Nom" placeholder="Nom" required>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label"></label>
                                    <input class="input--style-4" type="text" name="Prenom" placeholder="Prénom" required>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label"></label>
                                    <input class="input--style-4" type="text" name="Filiere" placeholder="Filiere" required >
                                </div>    
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label"></label>
                                    <div class="input-group">
                                    <label class="label"></label>
                                    <input type="hidden" type="text" name="Password"  value=<?php echo Generateur_Pass(8); ?> required>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                            <div class="input-group">
                                    <label class="label"></label>
                                    <input type="hidden" type="text" name="Identifiant" value=<?php echo Generateur_Id(5); ?> >
                                </div>
                            </div>
                        <div class="p-t-15">
                        
                       
								<a class="btn btn--radius-2 btn--green" href="/../../Presentation-20210205T072102Z-001/Presentation/Presentation.php">Accueil</a>
								<img class="agriculture-Proprietaire"src="../../../Connexion/Images/download.jpg">
								<button class="btn btn--radius-2 btn--green" type="submit">Ajouter</button>

                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    



</body>

</html>
