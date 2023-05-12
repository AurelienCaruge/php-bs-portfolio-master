<?php

define("HOST","localhost");
define("NAME","portfolio");
define("USER","root");
define("PASS","");


function connexion() {

    try{
$pdo=new PDO("mysql:dbname=".NAME.";host=".HOST,USER,PASS);
return $pdo;
}
catch(PDOException $e){
printf("Échec de la connexion : %s\n", $e->getMessage());
exit();
}
}

?>