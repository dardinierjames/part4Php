<?php 

$text = 'bien entendu Seize...!!!';
$text2 = 'pas vingt';

function test($string){
    return $string;
}
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice1 PartIV</title>
</head>
<body>
    <div>le carré de 4 est <?php echo test($text)?></div>
    <div>le carré de 4 n'est <?php echo test($text2)?></div>
</body>
</html>