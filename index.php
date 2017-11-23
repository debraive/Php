<?php
try
{
    // On se connecte à MySQL
    $pdo = new PDO('pgsql:host=ec2-46-137-174-67.eu-west-1.compute.amazonaws.com;', 'wjxjphskjnjxfl', 'c569d62789084fb16e8b3314d2a52bb97e3f662c55548cab90be110fac2a719b');
}
catch(Exception $e)
{
    // En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}
$query = 'INSERT INTO test (id, nom, prenom) VALUES (?, ?);';
$prep = $pdo->prepare($query);
 
$prep->bindValue(1, 'bertand', PDO::PARAM_STR);
$prep->bindValue(2, 'ceci est un test pour desc', PDO::PARAM_STR);
$prep->execute();
$resultat = $pdo->query('SELECT * FROM test');
while ($donnees = $resultat->fetch())
{
  echo '<br/>';
  echo $donnees['nom'];
  echo ' : ';
  echo $donnees['description'];
}
