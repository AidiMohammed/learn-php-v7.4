<?php
//la nouvelle version pour créer un tableau
$pepole = ["Mohammed", "Ahmed", "Wafa"];
//l'ancienne version pour créer un tableau
$fruits = array("Banana", "Orange", "Apple");
//tableau Associative ("kay" => value)
$contacts = ["Mohammed" => "0633356139", "Ahmed" => "0633385487"];
$result = [];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays in PHP</title>
</head>

<body>
    <h1>Arrays in PHP</h1>
    <h2>Indexed Arrays</h2>
    <p>Créer un tableau avec la nouvelle version <b>( $pepole = ["Mohammed","Ahmed","Wafa"] )</b> : </p><?php print_r($pepole); ?>
    <p>Créer un tableau avec l'ancienne version <b>( $fruits = array("Banana","Orange","Apple") )</b> : </p><?php print_r($fruits); ?>
    <p>Ajouter un élément dans le tableau <b>( $pepole[] = "Touria" )</b> : </p> <?php $pepole[] = "Touria";
                                                                                    print_r($pepole); ?>
    <p>Ajouter un élément dans le tableau <b>$pepole</b> avec une méthde <b>( array_push($pepole,"Khalid") )</b> : </p> <?php array_push($pepole, "Khalid");
                                                                                                                        print_r($pepole); ?>
    <p>Afficher le nombers d'élément dans un tableau avec la méthode <b>count()</b> count pepole : <?php echo count($pepole); ?></p>

    <h2>Associative Arrays</h2>
    <p>Créer un tableau Associative <b>$contacts = ["Mohammed" => "0633356139", "Ahmed" => "0633385487"];</b> <?php print_r($contacts); ?></p>
    <p>Pour afficher un élément d'un tableau Associative avec le <b>kay Mohammed $contacts["Mohammed"]</b> : <?php echo $contacts["Mohammed"]; ?></p>
    <p>Ajouter un élément dans un tableau Associative <b>$contacts["Wafa"] = "0685555555"</b><?php $contacts['Wafa'] = "0685555555";
                                                                                                print_r($contacts); ?></p>
    <h1>Spread Operator in php</h1>
    <p>Ajouter un nouveuax élément dans le tableau people avec le sperd opeator <?php $pepole = [...$pepole, "Ilyas"];
                                                                                print_r($pepole) ?></p>
    <p>Fusionner deux tableaux avec le spred operator <?php $result = [...$pepole, ...$fruits];
                                                        print_r($result); ?></p>
</body>

</html>