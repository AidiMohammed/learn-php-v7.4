<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Cases in php</title>
</head>

<body>
    <h1>Switch Cases in php</h1>
    <p><?php
        $panneauRoutiere = 11;
        switch ($panneauRoutiere) {
            case -1:
                echo "<b>Feu rouge</b>";
                break;
            case 0:
                echo "<b>Feu orange</b>";
                break;
            case 1:
                echo "<b>Feu vert</b>";
                break;
            default:
                echo "<b>merci de choisir un num entre 0 et 1 et -1</b>";
        }
        ?>
    </p>
</body>

</html>