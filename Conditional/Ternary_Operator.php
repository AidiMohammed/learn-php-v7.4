<?php
$courses = [
    ["title" => "learn Larvel", "price" => 40],
    ["title" => "learn Symfony", "price" => 39],
    ["title" => "learn Nodejs", "price" => 60],
    ["title" => "learn Reactjs Free", "price" => 0],
    ["title" => "learn Vuejs", "price" => 5],
    ["title" => "learn PHP", "price" => 30],
]
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ternary Operator in php</title>
</head>

<body>
    <h1>Ternary Operator in php</h1>
    <ul>
        <?php foreach ($courses as $course) {
            $title = $course['title'];
            $price = $course['price'];
            $status = $course['price'] > 30 ?  'FlagShip' : 'Low cost';
            $statusFree = $course['price'] == 0 ?  '(Free)' : false;
        ?>
            <li>
                <h2>
                    <?php echo $status; ?>
                    <?php echo $statusFree ?>
                </h2>
                <p><?php echo "$title - $price" ?></p>
            </li>
        <?php } ?>

    </ul>
</body>

</html>