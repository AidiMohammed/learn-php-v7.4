<?php
$prices = [20, 45, 85, 98, 35, 95, 2];
$step = 10;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anonymous function in php</title>
</head>

<body>
    <h1>anonymous function in php</h1>
    <?php
    $result = array_map(function ($price) use ($step) {
        return $price * $step;
    }, $prices);
    print_r($result)
    ?>
</body>

</html>