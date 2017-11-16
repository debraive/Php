<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>DBtest</title>
  </head>
  <body>
    <section id="Inscription">

			<h1>Inscription </h1><br/><br/>
      <form action="./test.php" method="post">
      <label for="name">Entrez votre nom</label>
			<input type="text" name="nom" id="nom"/><br/><br/><br/>

			<label for="age">Entrez votre age</label>
			<input type="int" name="age" id="age"/><br/><br/><br/>
      <label for='adresse'>Entrez votre adresse</label>
      <input type"text" name="adresse" id="adresse"><br><br><br>

			<input type="submit" value="Valider" id="Valider" />
      </form>
		</section>
  <?php
   if(isset($_POST['valider'])){
   $name=$_POST['nom'];
   $age=$_POST['age'];
   $adresse=$_Post['adresse'];
   echo 'Salut '. $name.'<br/>Bienvenue sur mon site !';
    }
  ?>
  </body>
</html>
