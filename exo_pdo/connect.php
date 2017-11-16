<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2>Méteo des villes</h2>
    <?php try
    {
    	// On se connecte à MySQL
    	$bd = new PDO('mysql:host=localhost;dbname=weatherapp;charset=utf8', 'root', 'root');
      $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(Exception $e)
    {
    	// En cas d'erreur, on affiche un message et on arrête tout
            die('Erreur : '.$e->getMessage());
    }
    $resultat = $bd->query('SELECT * FROM Meteo');
    $donnees = $resultat->fetch();
    echo '<table>';
      while ($donnees = $resultat->fetch())
      {
        echo '<tr><td>'.$donnees['ville']. '</td><td>'. $donnees['haut']. '</td><td>' . $donnees['bas']. '</td></tr>';
      }
      echo '</table>';
    ?>
    <h2>Nouvelles villes et températures</h2>

<form method="post" action="ajouts.php">
    <label for="ville">Ville : </label>
    <input id="ville" type = "text"  name="ville" />


    <label for="haut">T° max : </label>
    <input id="haut" type = "number"  name="haut" />

    <label for="bas">T° min : </label>
    <input id="bas" type = "number"  name="bas" />

    <input class="button" type="submit" value="Ajouter"/>

</form>

  </body>
</html>
