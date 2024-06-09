<?php header('Location: Del_Users.php');

$base = mysqli_connect("localhost", "bcttrdqx_root", "Banzan9771Z", "bcttrdqx_issa");
if ($base)
{
    $sql = 'DELETE FROM membres WHERE Identifiant="' . $_POST['Identifiant'] . '"';
    $resultat = mysqli_query($base, $sql);
}
?>
