<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Note</title>
  </head>
  <body>
    <form action="retour_ecole.php" method="post">
<p>
  Quelle est ta note? <br>
    <input type="post" name="note" />
</p>
</form>
<?php
    $note= $_POST["note"];
    if($note <= 3 ){
    	$message= "Ce travail est nul";
    }
    else if ($note>=6 AND $note<=9 ){
    	$message = "Ce travail n'est pas terrible";
    }
    else if ($note == 10) {
    	$message= "Tout juste!";
    }
    else if ($note>=11 AND $note<=14){
    	$message= "C'est pas mal";
    }
    else if($note>=15 AND $note<=18){
    	$message= "Bravo";
    }
    else if ($note>=19 AND $note<=20){
    	$message = "Police! Arrêtez ce tricheur!";
    }
    else{
    	$message="Note non valide";
    }
    echo $message;
    ?>
  </body>
</html>
