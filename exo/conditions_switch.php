<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Note</title>
  </head>
  <body>
    <form action="conditions_switch.php" method="post">
<p>
  Quelle est ta note? <br>
    <input type="post" name="note" />
</p>
</form>
<?php
$note= $_POST["note"];
    switch($note){
    case 0:
    case 1:
    case 2:
    case 3:
    echo "Ce travail est nul";
    break;
    case 5:
    case 6:
    case 7:
    case 8:
    echo'Ce travail n est pas terrible';
    break;
    case 9:
    echo 'Tout juste';
    break;
    case 10:
    case 11:
    case 12:
    case 13:
    echo 'c est pas mal';
    break;
    case 14:
    case 15:
    case 16:
    case 17:
    echo 'bravo';
    break;
    case 18:
    case 19:
    echo 'Police ! Arretez ce tricheur';
    break;
    default:
    echo 'Note invalide';
    }

    ?>

    <form action="conditions_switch.php" method="post">
<p>
  Quel est ton âge? <br>
    <input type="post" name="age">
  <br> <br>
  Homme ou Femme? <br> <br>
  <input type='radio' name='sexe' value="homme"> Femme<br>
  <input type='radio' name='sexe' value='femme'> Homme<br>
  <br>
</p>

</form>

    <?php
    $age= $_POST["age"];
    $sexe='femme';
    if ($age >=21 and $age >= 40){
      if ($sexe='femme'){
        echo 'Bonjour, bienvenue parmi nous!';
      }
    }
    else{
        echo 'Désolé, vous ne remplissez pas les critères de sélection.';
      }
     ?>
  </body>
</html>
