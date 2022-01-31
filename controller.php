<?php

// Vérifier que les données viennent d'un formulaire                                                                                                                                                                                                                                                                                                
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $reference = $_POST["reference"];
    $descriptions = $_POST["description"];
    $prix_vente = $_POST["prix_vente"];
    $prix_achat = $_POST["prix_achat"];

// Id SQL

$host = "localhost:3306";
$username = "root";
$password = "";
$database = "vapstore";

var_dump($reference);
var_dump($descriptions);
// Conditions pour vérifier que les champs soit remplis. 
    if (!isset($reference)){                
        die("Veuillez entrez la référence");
    }
    if (!isset($descriptions)){
        die("Veuillez entrez la description");
    }
    if (!isset($prix_vente)){
        die("Veuillez entrez le prix_vente");
    }
    if (!isset($prix_achat)){
        die("Veuillez entrez le prix_achat");
    }
}
    //Ouvrir une nouvelle connexion au serveur MySQL

    $mysqli = new mysqli($host, $username, $password, $database);

    //Afficher toute erreur de connexion
    if ($mysqli->connect_error) {
        die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
      }
          //préparer la requête d'insertion SQL
   // $statement = $mysqli->prepare("INSERT INTO vap (reference, descriptions, prix_achat, prix_vente) VALUES(?, ?, ?, ?)"); 
    $statement = $mysqli->prepare("SELECT * FROM vap"); 


    //Associer les valeurs et exécuter la requête d'insertion
    $statement->bind_param($reference, $descriptions, $prix_achat, $prix_vente ); 
    
    if($statement->execute()){
       echo "Tout c'est bien passé" . $reference . $prix_vente . $prix_achat  .$descriptions  ;
    }else{
      echo $mysqli->error; 
    }

?>
