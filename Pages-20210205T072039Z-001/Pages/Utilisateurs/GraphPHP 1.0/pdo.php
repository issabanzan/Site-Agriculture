<?php

$host = 'localhost';
$dbname = 'bcttrdqx_issa';
$utilisateur = 'bcttrdqx_root';
$motdepasse = 'Banzan9771Z';
try{
	$bdd = new PDO('mysql:host='.$host.';dbname='.$dbname.';charset=utf8', ''.$utilisateur.'', ''.$motdepasse.'');
}catch (Exception $e){
        die('[GRAPH_PLUGIN_UBRAIN] ERROR (PDO_ERR)');
        exit;
}
$host = NULL;
$dbname = NULL;
$utilisateur = NULL;
$notdepasse = NULL;
?>