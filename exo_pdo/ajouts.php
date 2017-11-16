<?php
$BD = new PDO('mysql:host=localhost;dbname=weatherapp;charset=utf8', 'root', 'root');
$villes = $_POST['ville'];
$tmax= $_POST ['haut'];
$tmin = $_POST ['bas'];

$query = $BD->prepare("INSERT INTO Meteo(ville, haut, bas) VALUES (:ville,:haut,:bas)");
$query->bindParam(':ville', $villes);
$query->bindParam(':haut', $tmax);
$query->bindParam(':bas', $tmin);
$query-> execute();
header('Location:connect.php');
 ?>
