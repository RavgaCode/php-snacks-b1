<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack - 4</title>
</head>
<body>
    <?php 
    $bigParagraph = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae, magni enim. Harum totam repellat ipsa qui quia autem, architecto sequi voluptas cupiditate laboriosam adipisci. Omnis consequuntur ipsum illum magnam molestias. Lorem ipsum dolor sit amet, consectetur adipisicing elit. At ex tenetur architecto voluptate quia praesentium sit? Sapiente, nemo praesentium vitae quaerat, voluptatum asperiores repellendus saepe aperiam excepturi necessitatibus porro aspernatur. Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum magni quae similique necessitatibus beatae aperiam possimus inventore nostrum repellendus dolore nobis, nemo ipsum ratione harum ea aspernatur consequatur adipisci numquam. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam aperiam tempore dolor sint exercitationem accusantium quidem totam, nulla praesentium illum natus eligendi voluptatum perferendis ipsam quas, repellat repellendus. Iste, officia.";
    
    $replacedString = str_replace(".",".</p><p>",$bigParagraph);
    
    ?>
    <p>
        <?php echo($bigParagraph); ?>
    </p>
    <p>
        <?php echo($replacedString); ?>
    </p>
</body>
</html>