<?php

$bdd = new PDO('mysql:host=localhost;dbname=wsprosit5;charset=utf8', 'prof', 'prof');

$stmt = $bdd->prepare("CALL wsprosit5.listeProduits();");

// Appel de la procédure stockée
$stmt->execute();

$tab = $stmt->fetchAll( PDO::FETCH_ASSOC ) ;
print "<pre>" ;
print_r( $tab ) ;


?>