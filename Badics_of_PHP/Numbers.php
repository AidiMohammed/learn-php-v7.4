<?php
//les opération arithmétique + - / *  % (powr**) 
$num1 = 10;
$num2 = 25;
$countinc = 0;
$countdec = 0;
$countShortHandv1 = 5;
$countShortHandv1 = $countShortHandv1 + 20;

$countShortHandv2 = 5;
$countShortHandv2 += 20;
$floor = floor(pi());
$ciel = ceil(pi());

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numbers in PHP</title>
</head>

<body>
    <h1>Numbers in PHP</h1>
    <h2>Les Opération arithmétique : </h2>
    <p>Opération <b>( + ) <?php echo "$num1 + $num2 = ";
                            echo $num1 + $num2; ?></b></p>
    <p>Opération <b>( - ) <?php echo "$num1 - $num2 = ";
                            echo $num1 - $num2; ?></b></p>
    <p>Opération <b>( / ) <?php echo "$num1 / $num2 = ";
                            echo $num1 / $num2; ?></b></p>
    <p>Opération <b>( * ) <?php echo "$num1 * $num2 = ";
                            echo $num1 * $num2; ?></b></p>
    <p>Opération <b>( % ) <?php echo "$num1 % $num2 = ";
                            echo $num1 % $num2; ?></b></p>
    <p>Opération <b>( ** ) <?php echo "$num1 ** $num2 = ";
                            echo $num1 ** $num2; ?></b></p>
    <h2>Order of Operations</h2>
    <h3><b>BIDMAS</b></h3>
    <ul>
        <li>
            <h4><b>(B)</b> Brackets</h4>
            <p>10 x <b>( 4 + 2)</b> = 10 x <b>6</b> = 60</p>
        </li>
        <li>
            <h4><b>(I)</b> Indices</h4>
            <p>5 + <b>2²</b> = 5 + <b>4</b> = 9</p>
        </li>
        <li>
            <h4><b>(D)</b>Division</h4>
            <p>10 + <b>6 / 2</b> = 10 + <b>3</b> = 13</p>
        </li>
        <li>
            <h4><b>(M)</b>Multiplication</h4>
            <p>10 - <b>4 x 2</b> = 10 - <b>8</b> = 2 </p>
        </li>
        <li>
            <h4><b>(A)</b>Addition</h4>
            <p>10 x 4 <b>+ 7</b> = 10 <b>+ 7</b> = 47 </p>
        </li>
        <li>
            <h4><b>(S)</b>Substraction</h4>
            <p>10 / 2 <b>- 3</b> = 5 <b>- 3</b> = 2 </p>
        </li>
    </ul>
    <h2>Incrémentation et Décrémentation </h2>
    <p>Incrémentation <b>( ++ )</b> <?php echo ++$countinc; ?></p>
    <p>Décrémentation <b>( -- )</b> <?php echo --$countdec; ?></p>
    <p>Incrémentation avec (20) Short Hande <b>( V1 )</b> <?php echo $countShortHandv1; ?></p>
    <p>Incrémentation avec (20) Short Hande <b>( V2 )</b> <?php echo $countShortHandv2; ?></p>
    <h2>Méthode arithmétique</h2>
    <p>Méthode <b>pi()</b> <?php echo pi(); ?></p>
    <p>Méthode <b>floor(float number) </b>return un entier d'un nombre flottant : <?php echo "floor(pi()) = $floor"; ?></p>
    <p>Méthode <b>ceil(float number) </b>return un arrondi d'un nombre flottant : <?php echo "floor(pi()) = $ciel"; ?></p>
    <a href="https://www.php.net/manual/fr/ref.math.php">math functions php</a>
</body>

</html>