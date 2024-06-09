zzzzzz
?>
<!DOCTYPE html>
<html lang="fr">
<link rel="icon" href="images/Administrateur.ico" />	
<head>
	<title>Agriculteurs</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<link rel="icon" type="image/png" href="../../Extra/images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="../../Extra/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../../Extra/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../../Extra/vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="../../Extra/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="../../Extra/vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="../../Extra/css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" href="/../../Menu-20210205T072028Z-001/Menu/Style_Menu.css" media="all">

</head>

<form  action=Mod_Users.php method="POST" > 
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
			

				
					<span class="login100-form-title">Menu</span>

					<div class="container-login100-form-btn">
					
							<img src="../Images/Retour.png" Title="Retour"; style= " padding-right: 80px;"  alt="francetfv-education-logo-mini éducation"/>
							</a>
							<a href="/../../Presentation/Presentation.php">
								<img src="../Images/Accueil.png" alt=""/>
							</a>
					</div>
                    <?php   
   for ($i=0; $i < $bc ; $i++) { 
   ?>
					<div class="container-login100-form-btn">
						<a href="Mod_Users.php" >
						 	<button type="text" name="Balises" value="<?php echo  $Identifiant[$i] ?>" class="login100-form-btn">
                           <?php echo  $Identifiant[$i] ?>
							</button> 
						</a>
					</div>

					

                 <?php   } ?>
					
				</Form>	
					
			
			</div>
		</div>
	</div>