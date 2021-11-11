<?php
$courses = [
    ["title" => "learn Larvel", "price" => 40],
    ["title" => "learn Symfony", "price" => 39],
    ["title" => "learn Nodejs", "price" => 60],
    ["title" => "learn Reactjs Free", "price" => 0],
    ["title" => "learn Vuejs", "price" => 5],
    ["title" => "learn PHP", "price" => 30],
];
function formatCourses($course)
{
    echo "{$course['title']} cost {$course['price']} $";
}
function formatCoursesReturn($title, $price)
{
    $priceToMAD = convertPrice($price, 9.13);
    return "$title - $priceToMAD MAD";
}
function convertPrice($price, $tauxChange = 10)
{
    return $price * $tauxChange;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>

<body>
    <h1>Functions in PHP</h1>
    <?php
    function saySalam($name = 'Mohammed')
    {
        echo "<h2>Salam $name</h2>";
    }
    saySalam('Ahmmed');
    ?>
    <ul>
        <?php foreach ($courses as $course) {
            $status = $course['price'] > 30 ? 'Flasg Ship' : 'Low cost';
            $statusFree = $course['price'] == 0 ? '(free)' : false; ?>
            <li>
                <h2>
                    <?php echo $status; ?>
                    <?php echo $statusFree; ?>
                </h2>
                <p><?php formatCourses($course); ?></p>
                <p><?php echo formatCoursesReturn($course['title'], $course['price']); ?></p>
            </li>
        <?php } ?>
    </ul>
</body>

</html>