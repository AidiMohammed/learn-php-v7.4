<?php
$firstName = "Mohammed";
$lastName = "Aidi";
$fullNameDoubelQutation = "full Name is : $firstName $lastName";
$fullNameSinglQutation = 'full Name is : $firstName $lastName';
$fullNameEscape = "full Name is : \"$firstName $lastName\"";
$strlen = strlen($fullNameDoubelQutation);
$strtoupper = strtoupper($fullNameDoubelQutation);
$strtolower = strtolower($fullNameDoubelQutation);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Concatenation</title>
</head>

<body>
    <h1>Bright Coding</h1>
    <h2>Concatenation</h2>
    <p>Concatenation avce l'opérateur <b>( . )</b> <?php echo $firstName . ' ' . $lastName; ?></p>
    <p>Concatenation avec les double Quotation <b>( " )</b> <?php echo $fullNameDoubelQutation; ?></p>
    <p>Concatenation avec les single Quotation <b>( ' )</b> <?php echo $fullNameSinglQutation; ?></p>
    <h2>Caractère d'échappement</h2>
    <p>Carcatère d'échappement <b>( \" )</b> <?php echo $fullNameEscape; ?></p>
    <h2>Méthode strings</h2>
    <p>Nombre de caractère d'une chaine de de caractère <b>( strlen() )</b> <?php echo "\"$fullNameDoubelQutation\" = $strlen Carctères"; ?></p>
    <p>Convertir une chaine de caractère en majuscule <b>( strtoupper() ) </b> <?php echo "\"$fullNameDoubelQutation\" = $strtoupper"; ?></p>
    <p>Convertir une chaine de caractère en miniscule <b>( strtolower() ) </b> <?php echo "\"$fullNameDoubelQutation\" = $strtolower"; ?></p>
    <p>Afficher le premier caractère de la chaine <b>( str[0] )</b> <?php echo "\"$fullNameDoubelQutation\" = $fullNameDoubelQutation[0]"; ?></p>
    <a href=https://www.php.net/manual/fr/ref.strings.php">string functions php</a>
</body>

</html>