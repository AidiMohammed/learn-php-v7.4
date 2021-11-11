<?php
$note = 15;
$courses = [
    ["title" => "learn Larvel", "price" => 45],
    ["title" => "learn Symfony", "price" => 55],
    ["title" => "learn Nodejs", "price" => 25],
    ["title" => "learn Reactjs", "price" => 35]
]
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditional Statements</title>
</head>

<body>
    <h1>Conditional Statements</h1>
    <p><b>Si</b> Note > 16 <b>Exellent</b> <b>Si non</b> pas mal : <?php
                                                                    if ($note > 16) echo "Exellent";
                                                                    else if ($note > 14) echo "Assez Bien";
                                                                    else echo "\"Pas Mal\""; ?></p>
    <h2>My Flagship Courses</h2>
    <ul>
        <?php
        foreach ($courses as $course) {
            $title = $course['title'];
            $price = $course['price'];
            if ($price > 40)
                echo "<li>$title - $price</li>";
        }
        ?>
    </ul>

</body>

</html>