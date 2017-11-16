<?php

include('./connect.php');
$name = $_POST['nom'];
$age = $_POST ['age'];
$adresse = $_POST ['adresse'];

$query = $pdo->prepare("INSERT INTO `user`(`Nom`,`Age`, `Adresse`) VALUES (:Nom,:Age, :Adresse)");
$query->bindParam(':Nom', $name);
$query->bindParam(':Age', $age);
$query->bindParam(':Adresse', $adresse);
$query-> execute();
header('Location: form.php?');

 ?>
