
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <table>
    <a href="index.php?action=GetForm">pageForm</a>
    <?php
    foreach ($tableau as $product){
    echo"
    <tr>
      <td>{$product['Name']}</td>
      <td>{$product['Description']}</td>
      <td>{$product['Cost']}</td>
    </tr>
    ";
    }
     ?>
    </table>
  </body>
</html>
