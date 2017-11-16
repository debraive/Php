
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<form class="" action="" method="get">
Quel est ton age ? <br> <br>
  <input type="number" name="age" value=""> <br> <br>
Homme ou Femme? <br> <br>
<input type='radio' name='sexe' value="homme"> Femme<br>
<input type='radio' name='sexe' value='femme'> Homme<br>
<br>
Parles-tu anglais?
<input type='checkbox' name='anglais'value='true'>
</form>
<?php
$age= 0;
$sexe='homme';
$anglais='true';
if ($age <= 12 and $anglais=='true'){
  if ($sexe=='homme'){
  echo "Hello Boy";
} else {
    echo"Hello Girl";
}
}elseif ($age > 12 && $age <= 18 and $anglais=='true') {
  if ($sexe=='homme'){
    echo "Hello Teenage boy!";
  } else {
    echo "Hello Teenage girl!";
  }

}elseif ($age > 18 && $age <= 115 and $anglais=='true') {
  if ($sexe=='homme'){
  echo "Hello Sir!";
} else{
  echo "Hello Lady";
}

}elseif($age > 115 and $anglais=='true'){
  if($sexe=='homme')
  echo "Wow you still alive, old man !";
}else {
  echo "Wouw you still alive old women ?";
}
 ?>
 <?php
$age = $_GET['age'];
if ($age <= 12){
  echo "Salut petit";
}elseif ($age > 12 && $age <= 18) {
  echo "Salut l'ado";
}elseif ($age > 18 && $age <= 115) {
  echo "Salut l'adulte";
}elseif($age > 115){
  echo "Wow toujours vivant?";
}
 ?>
  </body>
</html>

<?php
$chambre_est_sale=true;

if ($chambre_est_sale==false){
$actiondujour="Ta chambre est trop propre ! Vis un peu";
}

else if($chambre_est_sale==true){
$actiondujour = "Range ta chambre, on dirait la cage d'un bonobo!";
}
echo $actiondujour;

echo "<br>";

?>

<?php
$heure= 5;
$b="bonjour";
$bj="Bonne journée";
$ba="Bon après-midi";
$bs="Bonne soirée";
$bn="Bonne nuit";

if ($heure>= 5 and $heure <= 9){
$action=$b;
}
if ($heure>=9 and $heure<=12){
$action=$bj;
}
if ($heure>=12.1 and $heure<=21) {
$action=$bs;
}
if ($heure>=21.1 and $heure<=4.59){
$action=$bn;
}
echo $action;

echo "<br>"
?>
