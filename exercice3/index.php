<?php 
$number1 = 8;
$number2 = 6;

function result($para1, $para2) {

    if ($para1 > $para2) {
        return 'Le premier nombre est plus grand';
   }

    else if ($para1 < $para2) { 
        return 'Le premier nombre est plus petit';
    }

    else { 
        return 
        'Les deux nombres sont identiques';
    } 
};
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice3 PartIV</title>
</head>
<body>
    <div><?php echo result($number1, $number2);?></div>
</body>
</html>