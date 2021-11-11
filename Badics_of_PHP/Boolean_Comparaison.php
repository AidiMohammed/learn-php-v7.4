<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boolean Comparaison php</title>
</head>

<body>
    <h1>Boolean Comparaison</h1>
    <p> 5 < 10 <b>true</b> <?php echo 5 < 10 ?></p>
    <p> 5 > 10 <b>false</b> <?php echo 5 > 10 ?></p>
    <p> 5 == 5 <b>false</b> <?php echo 5 == 10 ?></p>
    <p> 5 >= 5 <b>false</b> <?php echo 5 >= 10 ?></p>
    <p> 5 <= 10 <b>true</b> <?php echo 5 <= 10 ?></p>
    <p> la nigation 5 != 10 <b>true</b> <?php echo 5 != 10 ?></p>
    <p> Comparaison chaine de caractères avec <b>le code ascii</b> Mohammed > Karim <b>true</b> <?php echo "Mohammed" > "Karim" ?></p>
    <p> Strict comparaison 5 === '5' <b>false</b> <?php echo 5 === '5'; ?></p>
    <p> Strict comparaison 5 !== '5' <b>true</b> <?php echo 5 !== '5'; ?></p>
    <p> Strict comparaison '5' === '5' <b>true</b> <?php echo '5' === '5'; ?></p>

</body>

</html>