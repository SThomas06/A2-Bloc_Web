<?php

$bdd = new PDO('mysql:host=localhost;dbname=wsprosit5;charset=utf8', 'prof', 'prof');

$nom  = $_POST['nom'];
$prix = $_POST['prix'];
$desc = $_POST['desc'];

$req = $bdd->prepare("CALL wsprosit5.creerProduit( :nom, :desc, :prix, 0 );");
$req->bindValue(':nom', $nom, PDO::PARAM_STR);
$req->bindValue(':desc', $desc, PDO::PARAM_STR);
$req->bindValue(':prix', $prix, PDO::PARAM_INT);

// Appel de la procédure stockée
$req->execute();


?>