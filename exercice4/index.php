<?php 
$name = 'Dardinier';
$firstname = 'James';
$age = '38';

function result($para1, $para2, $para3) {

    return 'Bonjour ' . $para1 . ' ' . $para2 . ', tu as ' . $para3  . 'ans !!!';
}
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice3 PartIV</title>
</head>
<body>
    <div><?php echo result($name, $firstname, $age);?></div>
</body>
</html>