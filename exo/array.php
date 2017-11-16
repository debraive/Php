<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>array</title>
  </head>
  <body>
    <?php
    $Family = array('Christophe','Manon','Delphine');
    print_r($Family);
    $Favorite_M = array('pasta', 'vegetables','cookies');
    print_r($Favorite_M);
    $Movies = array('House of card', 'diario de motocicleta','Orange is the new black');
    echo $Movies[2];
    ?>
    <?php

    $Father = array(
        'first_name' => 'Charles',
        'age'=> 67,
        'gender'=>'Men',
        'childeren'=> 3,
        'hobbies'=> $hobbies = array('teater', 'trek', 'travel', 'fishing'),
      );
    $Me = array(
      'first_name' =>'Delphine',
      'age' => 30,
      'gender'=> 'Women',
      'childeren'=> 1,
      'hobbies'=> $hobbies = array('teater', 'trek', 'friends', 'cooking', 'test'),
      'father'=> $Father,
   );
   $You = array(
      'first_name' =>'Christophe',
      'age' => 32,
      'gender'=> 'Men',
      'childeren'=> 1,
      'hobbies'=> $hobbies = array('foot', 'running', 'music', 'cooking', 'test'),
     );
   $result = array_intersect($You['hobbies'], $Me['hobbies']);
   print_r($result);

   $result = array_merge($You['hobbies'], $Me['hobbies']);
   print_r($result);
/*__________________________________________*/

   $Me ['first_name'] = 'Edith';

/*__________________________________________*/

   $Me ['hobbies'] [] = 'Taxidermie';
/*__________________________________________*/

   echo '<pre>';
   print_r($Me);
   echo '</pre>';

/*__________________________________________*/

   $result = count($Me['hobbies']);
   $result_1 = count($Father['hobbies']);
   echo $result + $result_1;
/*__________________________________________*/
   ?>
   <?php
$web_development = array(
  'frontend' => array(),
  'backend'  => array()
);
$web_development ['frontend'][] = 'xhtml';
print_r($web_development);
$

 ?>

  </body>
</html>
