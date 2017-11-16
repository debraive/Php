<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
<body>
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
    # code...
  }
  if ($heure>=21.1 and $heure<=4.59){
    $action=$bn;
  }
  echo $action;
  ?>

  </body>

</html>
