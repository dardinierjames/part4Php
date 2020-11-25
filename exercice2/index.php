<?php 
// déclaration des varibles en valeurs des paramètres à l'appel de la fonction.
$text1 = 'le carré de 4 est';
$text2 = 'bien entendu Seize';

// déclaration de la fonction qui prend deux paramètres  et qui retourne les valeurs demandées, concaténées.
function concatenation($para1, $para2) {
    return $para1 .' '. $para2;
}

?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice2 PartIV</title>
</head>
<body>
    <div><?php echo concatenation('bonjour', 'james');?></div>
    <!-- 'bonjour'= valeur 1 et 'james'= valeur 2 -->
    <div><?php echo concatenation($text1, $text2);?></div>
    <!-- $text1 = valeur 1 et text2 = valeur 2 -->
</body>
</html>