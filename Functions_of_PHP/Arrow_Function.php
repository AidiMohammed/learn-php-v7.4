<?php
$prices = [20, 30, 50, 70, 90];
$step = 2;
$result = array_map(fn ($price) => $price * $step, $prices);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrow Function in php</title>
</head>

<body>
    <h1>Arrow Function in php</h1>
    <?php print_r($result) ?>
</body>

</html>