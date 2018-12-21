<?php
$bdd = new PDO('mysql:host=localhost;dbname=wsprosit5;charset=utf8', 'prof', 'prof');

$pseudo = $_POST['pseudo'];
$motDePasse = $_POST['motDePasse'];

// Vérification de l'exitence du pseudo :
$req = $bdd->prepare("select * from utilisateurs where pseudo=:pseudo") ;
$req->bindValue(':pseudo', $pseudo, PDO::PARAM_STR);
$req->execute();
$result = $req->fetch(PDO::FETCH_ASSOC);
if( $result )
{ print "<h2>L'utilisateur $pseudo existe déjà dans la base ! </h2>" ;
  print "<pre>" ;
  print_r($result);

  print "fin" ;
  die ;
}

// Requête préparée pour empêcher les injections SQL
$requete = $bdd->prepare("INSERT INTO utilisateurs (pseudo, motDePasse) VALUES( :pseudo,:motDePasse)");

$requete->bindValue(':pseudo', $pseudo, PDO::PARAM_STR);
$requete->bindValue(':motDePasse', $motDePasse, PDO::PARAM_STR);

$requete->execute();

print "L'utilisateur $pseudo est inscrit ! " ;
?>
