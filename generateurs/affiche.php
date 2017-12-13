<?php
$titre = "Mon new titre";
$text = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut consequuntur, doloremque dolorum enim eum ex facere
fugiat harum inventore iste maiores molestiae nam non quod ratione, reiciendis soluta voluptate voluptatum?";
require_once 'vendor/autoload.php';

$html = "<!doctype html>
<html lang='en'>
<head>
<meta charset='UTF - 8'>
<meta name='viewport'
content='width = device - width, user - scalable = no, initial - scale = 1.0, maximum - scale = 1.0, minimum - scale = 1.0'>
<meta http-equiv='X - UA - Compatible' content='ie = edge'>
<title>Document</title>
<style>
body{
text-align: center;
}
div{
background: red;
height: 15px;
width: 100px;
margin: 0 auto;
}
</style>
</head>
<body>
<h3>$titre</h3>
<div></div>
<p>$text</p>
</body>
</html>";

$mpdf = new mPDF();
$mpdf->WriteHTML($html);
$mpdf->Output();

?>
