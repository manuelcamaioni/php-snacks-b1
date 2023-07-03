<?php 
    $userName = $_GET["name"];
    $userEmail = $_GET["email"];

    $userAge = $_GET["age"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server side</title>
</head>
<body>
    <?php 
        if(strlen($userName) > 3 && !empty($userEmail) && !empty($userAge)){
            echo "Accesso riuscito";
        } else{
            echo "Dati inseriti non validi";
        }
    ?>
</body>
</html>