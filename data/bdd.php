<?php

/**
 * Gestion de la connexion à la base de données
 */

// Informations de connexions

define("HOST","localhost");
define("NAME","portfolio");
define("USER","root");
define("PASS","");

$infos="mysql:dbname=".NAME.";host=".HOST;
try{
$connexion=new PDO($infos,USER,PASS);

echo 'connexion réussie';
}
catch(PDOException $e){
printf("Échec de la connexion : %s\n", $e->getMessage());
exit();
}

?>