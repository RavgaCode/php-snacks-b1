<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 5</title>
</head>
<body>
    <?php
$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];
    ?>

    <!-- Imposto una ul per il l'array dei teacher -->
    <ul style="background-color: #ff0000">
    <!-- Imposto il ciclo for per ciclare tutti gli array all'interno dell'array padre -->
    <?php for($i=0; $i < count($db['teachers']); $i ++) {?>
    <!-- Dichiaro per comodità una variabile che identifica l'array attualmente ciclato -->
    <?php $thisTeacher = $db['teachers'][$i];?>
    <!-- Stampo nome e cognome del teacher -->
    <li><?php echo($thisTeacher['name']); ?> <?php echo($thisTeacher['lastname']); ?></li>
    <?php }?>
    </ul>

    <!-- Imposto una ul per il l'array dei pm -->
    <ul style="background-color: #008000">
    <!-- Imposto il ciclo for per ciclare tutti gli array all'interno dell'array padre -->
    <?php for($i=0; $i < count($db['pm']); $i ++) {?>
    <!-- Dichiaro per comodità una variabile che identifica l'array attualmente ciclato -->
    <?php $thisPm = $db['pm'][$i];?>
    <!-- Stampo nome e cognome del pm -->
    <li><?php echo($thisPm['name']); ?> <?php echo($thisPm['lastname']); ?></li>
    <?php }?>
    </ul>
</body>
</html>