<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack-6</title>
</head>
<body>
    <?php 
    $students = [
        [
            'name' => 'Gianni',
            'lastname' => 'Banani',
            'grades' => [5, 6, 8, 9],
        ],
        [
            'name' => 'Roberto',
            'lastname' => 'Mandarini',
            'grades' => [8, 8, 8, 9],
        ],
        [
            'name' => 'Alessandra',
            'lastname' => 'Kiwi',
            'grades' => [2, 6, 6, 9],
        ],
        [
            'name' => 'Giulia',
            'lastname' => 'Aranci',
            'grades' => [2, 3, 8, 9],
        ],
    ]
    
    ?>

<ul>
    <!-- Imposto il ciclo for che andrà a ciclarmi tutti gli array dei singoli studenti presenti nell'array padre -->
    <?php for($i= 0; $i < count($students); $i++){?>
        <!-- Creo per comodità una variabile per il singolo array -->
    <?php $thisStudent = $students[$i]; ?>
    <li>
        <!-- Stampo i dati nella li -->
        <?php echo $thisStudent['name']; ?> - <?php echo$thisStudent['lastname'] ?>. Media voti: 
        <?php echo array_sum($thisStudent['grades']) / count($thisStudent['grades']); ?>
    </li>
    
    <!-- Chiudo il ciclo for -->
    <?php } ?>
</ul>
</body>
</html>