<?php
$base = @mysqli_connect('localhost', 'bcttrdqx_root', 'Banzan9771Z','bcttrdqx_issa');
$Lon=$_POST['Longitude'] ;
$Lat=$_POST['Latitude'];
$Bali=$_POST['Reference'];
echo "$Bali";
$sql = "UPDATE Balises SET Longitude = '$Lon', Latitude= '$Lat'  WHERE Reference ='$Bali'";
$resultat = mysqli_query($base, $sql);
header('Location:Gestion.php');

?>