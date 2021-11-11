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
    <title>Brake & Continue</title>
</head>

<body>
    <h1>Brake & Continue</h1>
    <ul>
        <?php
        foreach ($courses as $course) {
            $title = $course['title'];
            $price = $course['price'];
            /*if ($price < 10)
                continue;*/
            if ($title == "learn Reactjs Free")
                break;

            echo "<li>$title - $price</li>";
        }
        ?>
    </ul>
</body>

</html>