<?php

$bdd = new PDO('mysql:host=localhost;dbname=wsprosit5;charset=utf8', 'prof', 'prof');

$pseudo = $_POST['pseudo'];
$motDePasse = $_POST['motDePasse'];

// Vérification de l'exitence du pseudo :
$req = $bdd->prepare("select * from utilisateurs where pseudo=:pseudo and motDePasse=:mdp") ;
$req->bindValue(':pseudo', $pseudo, PDO::PARAM_STR);
$req->bindValue(':mdp',    $motDePasse, PDO::PARAM_STR);
$req->execute();
$result = $req->fetch(PDO::FETCH_ASSOC);

if( ! $result )
{ print "<h2>Votre identification a échoué</h2>" ;
  print "fin" ;
  die ;
}

// Si ça marche :
include("index.php") ;
print "<script>alert('connecté');</script>";

?>
