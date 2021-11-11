<?php
$courses = [
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
    <title>Multidimensional Arrays-MATRIX</title>
</head>

<body>
    <h1>Multidimensional Arrays MATRIX</h1>
    <p>Afficher la Matrix $courses <?php print_r($courses) ?></p>
    <p>Afficher le titre de troisième tableau : <b><?php echo $courses[2]["title"] ?></b></p>
    <p>Ajouter un Nouveau élément dans la matrix <?php $courses[] = ["title" => "learn Vuejs", "price" => 25];
                                                    print_r($courses) ?></p>
    <p>Ajouter un Nouveau élément avec le spred operator <?php $courses = [...$courses, ["title" => "learn Spring", "price" => 45]];
                                                            print_r($courses) ?></p>
</body>

</html>