<?php
$min = 1;
$max = 100;
$chiffres = ' ';

?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice3 PartIV</title>
</head>
<body>
<div>
        <?php 
            for ($i = $min; $i <= $max; $i++){
                    $chiffres .= $i.' ';
                    if($i % 3 == 0 AND $i % 5 == 0) {
                        echo "FizzBuzz, ";
                    }
                    else if($i % 3 == 0){
                        echo "Fizz, ";
                    }
                    else if($i % 5 == 0){
                        echo "Buzz, ";
                    }
                    else{
                        echo "$i, ";
                    }
            }
 
        
        ?>
    <div>
</body>
</html>