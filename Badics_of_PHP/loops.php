<?php
$courses = ['larvel', 'php', 'javascript'];
$coursesMatrix = [
    ["title" => "learn Larvel", "price" => 40],
    ["title" => "learn Symfony", "price" => 25],
    ["title" => "learn Nodejs", "price" => 42],
    ["title" => "learn Reactjs", "price" => 35]
]
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops in php</title>
</head>

<body>
    <h1>Loops in php</h1>
    <p>Iteration tableau avec la boucle <b>for</b>
        <?php
        for ($i = 0; $i < count($courses); $i++)
            echo "<br>[$courses[$i]]";
        ?>
    </p>
    <p>Iteration tableau avec la boucle <b>while</b>
        <?php
        $i = 0;
        while ($i < count($courses)) {
            echo "<br> [$courses[$i]]";
            $i++;
        }
        ?>
    </p>
    <p>Iteration tableau avec la boucle <b>foreach</b>
        <?php
        foreach ($courses as $course) {
            echo "<br> [$course]";
        }
        ?>
    </p>
    <p>Iteration tableau Multidimensional avec la boucle <b>foreach</b>
        <?php
        foreach ($coursesMatrix as $course)
            echo '<br>course ' . $course['title'] . ' <b>price</b> ' . $course['price'];
        ?>
    </p>
    <h2>list of courses</h2>
    <ul>
        <?php
        foreach ($coursesMatrix as $course) {
            echo '<li>' . $course['title'] . ' <b>Price</b> : ' . $course['price'] . '</li>';
        }
        ?>
    </ul>
</body>

</html>