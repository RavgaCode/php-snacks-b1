<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>
</head>
<body>
    <?php
    // Imposto le variabili delle varie query
    $name = $_GET['name'];
    $mail = $_GET['mail'];
    $age = $_GET['age'];
    
    // Imposto l'if statement che verifichi che tutte le condizioni siano rispettate
    if(strlen($name) > 3 && strpos($mail,'.')!== false && strpos($mail, '@')!==false && is_numeric($_GET['age'])){
        echo "Accesso riuscito";
    } else{
        echo "Accesso negato";
    }
    ?>
</body>
</html>