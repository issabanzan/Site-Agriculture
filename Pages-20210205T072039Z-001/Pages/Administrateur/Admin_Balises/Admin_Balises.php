<?php session_start();
if( $_SESSION['Identifiant']!=='Admin') {
 header('Location: ../../Utilisateurs/Erreur.php');
} ?>
<!DOCTYPE html>
<?php function balises($Balise){
     try
{
	
    $bdd = new PDO('mysql:host=localhost; dbname=bcttrdqx_issa', 'bcttrdqx_root', 'Banzan9771Z');
}
catch(Exception $e)
{

    die('Erreur : ' . $e->getMessage());
}

$reponse = $bdd->query('SELECT Proprietaire FROM balises WHERE Reference="' . $Balise . '"');
while ($donnees = $reponse->fetch())
{
?>
    
  

    <?php $Proprietaire = $donnees['Proprietaire']; ?>
    

<?php
}

$reponse->closeCursor();

return $Proprietaire;}
?>         
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="Colorlib Templates">
		<meta name="author" content="Colorlib">
		<meta name="keywords" content="Colorlib Templates">
		<link rel="icon" href="Images/Proprietaire.ico" />
		<title>Admin | Proprietaire</title>
		<link href="../../Pages-20210205T072039Z-001/Pages/Extra/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
		<link href="/../../Pages-20210205T072039Z-001/Pages/Extra/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
		<link href="/../../Pages-20210205T072039Z-001/Pages/Extra/vendor/select2/select2.min.css" rel="stylesheet" media="all">
		<link href="/../../Pages-20210205T072039Z-001/Pages/Extra/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">
		<link rel="stylesheet" href="/../../Menu-20210205T072028Z-001/Menu/Style_Menu.css" media="all">
		<link href="Css/main.css" rel="stylesheet" media="all">
	</head>
	
	<body >
   <style>
  body
  {background-image: url('Agri-IoT.jpg'); background-size: 100%;
  background-repeat: no-repeat;}
</style>
		
		<div class="page-wrapper bg-gra-01 p-t-130 p-b-100 font-poppins">
			<div class="wrapper wrapper--w680">
				<div class="card card-4">
					<div class="card-body">
						<div class="p-t-15">
							<form  action=Verification_Admin_Balises.php method="POST" >

							<?php
foreach(range('A','E') as $i) {?>


								<div class="row row-space">
									<div class="col-2">
										<div class="input-group">						
											<label class="label"></label>
											<input  readonly class="input--style-4" type="text" placeholder="<?php echo $i." ➡ ".balises($i) ?>"  >
										</div>
									</div>
									<div class="col-2">
										<div class="input-group">
											<label class="label"></label>
											<div class="input-group">
												<label class="label"></label>
												<input  class="input--style-4" type="text" name="<?php echo $i ?>" placeholder="<?php echo 'Balise '.$i; ?>"  >
											</div>
										</div>
									</div>
                                </div>
								
						<?php	} ?>
							

						
					  			<a  class="btn btn--radius-2 btn--green" href="/../../Presentation-20210205T072102Z-001/Presentation/Presentation.php">Accueil</a>
								
								<img class="Agrisoft-Proprietaire"src="../../../Connexion/Images/Agrisoft.png">
								<button class="btn btn--radius-2 btn--green" type="submit">Modifier</button>
								
								
								

							
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>

</html>