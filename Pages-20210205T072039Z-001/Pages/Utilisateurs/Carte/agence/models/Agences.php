<?php 

session_start(); // On lance la session.
 
class Agences{
    // Connexion
    private $connexion;
    private $table = "balises";

    // object properties
    public $Reference;
    public $Proprietaire;
    public $Latitude;
    public $Longitude;

    /**
     * Constructeur avec $db pour la connexion à la base de données
     *
     * @param $db
     */
    public function __construct($db){
        $this->connexion = $db;
    }

    /**
     * Lecture des agences
     *
     * @return void
     */
    public function lire(){
        // On écrit la requête
        $sql = "SELECT * FROM balises";

        // On prépare la requête
        $query = $this->connexion->prepare($sql);

        // On exécute la requête
        $query->execute();

        // On retourne le résultat
        return $query;
    }


}