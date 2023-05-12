<?php

/**
 * Gestion de la connexion à la base de données
 */

// Informations de connexions

require_once 'connexion.php';

function getData(string $table){
    $requeteSql='SELECT * from '.$table;
    $resultat = connexion()->query($requeteSql);
    $statement = $resultat->fetchAll(PDO::FETCH_ASSOC);
    return $statement;
}


// var_dump($statement);

// foreach($statement as $project){
//     echo $project['title'].'<br>';
// }


?>