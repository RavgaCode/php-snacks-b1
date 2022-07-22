<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
</head>
<body>
<?php

// Creo un array contenent i dati di ogni singolo match della giornata
$matches =[
    [
        'homeTeam' => 'Ascoli Sportigo',
        'guestTeam' => 'Villa Franca Atletico',
        'homeScore' => 23,
        'guestScore' => 25,
    ],
    [
        'homeTeam' => 'Virtus Bologna',
        'guestTeam' => 'Brescia',
        'homeScore' => 87,
        'guestScore' => 95,
    ],
    [
        'homeTeam' => 'Venezia',
        'guestTeam' => 'Trieste',
        'homeScore' => 102,
        'guestScore' => 80,
    ],
];
?>


<ul>
    <!-- Imposto il ciclo for che andrà a ciclarmi tutti gli array dei singoli match presenti nell'array padre -->
    <?php for($i= 0; $i < count($matches); $i++){?>
        <!-- Creo per comodità una variabile per il singolo array -->
    <?php $thisMatch = $matches[$i]; ?>
    <li>
        <!-- Stampo i dati nella li -->
        <h3><?php echo $thisMatch['homeTeam']; ?> - <?php echo$thisMatch['guestTeam'] ?></h3>
        <h4><?php echo $thisMatch['homeScore']; ?> - <?php echo$thisMatch['guestScore'] ?></h4>
    </li>
    
    <!-- Chiudo il ciclo for -->
    <?php } ?>
</ul>
</body>
</html>


