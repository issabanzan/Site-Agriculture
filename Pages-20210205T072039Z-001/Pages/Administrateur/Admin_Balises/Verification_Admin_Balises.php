<?php

function Requete_Sql($Proprietaire, $Balise)
{

    $base=@mysqli_connect("localhost","bcttrdqx_root","Banzan9771Z","bcttrdqx_issa");
if ($base)
{

    $sql = 'UPDATE balises SET Proprietaire="' . $_POST[$Proprietaire] . '" WHERE Reference="' . $Balise . '"';
    $resultat = mysqli_query($base, $sql);
}

    

}

foreach (range("A", "E") as $i)
{

    if (!empty($_POST[$i]))
    {
        Requete_Sql($i, $i);

    }
}

header('Location: Admin_Balises.php');

?>