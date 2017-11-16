<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Tableau</title>
</head>
<body>

<table>
<body>
<?php
include "./connect.php";
echo '<table>';
  while ($donnees = $resultat->fetch())
  {
    echo '<tr><td>'.$donnees['ville']. '</td><td>'. $donnees['haut']. '</td><td>' . $donnees['bas']. '</td></tr>';
  }
  echo '</table>';
  ?>

</body>
</html>
