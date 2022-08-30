<?php
$paragraph = "Lorem, ipsum dolor sit amet consectetur adipisicing elit  puellae. Inventore voluptatum adipisci in ratione, debitis quis officia a puellae. A necessitatibus illum voluptatem, vitae puellae, velit amet non, repellat ullam sint debitis quis puellae.";

$badword = $_GET['badword'];

$censured= str_replace($badword, '***', $paragraph);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My PHP first doc</title>
</head>
<body>
<p>
    <?php echo $paragraph ?>
</p>
<p>
    il paragrafo è lungo:
<i>

    <?php echo strlen($paragraph) ?>
</i>
caratteri
</p>
<hr>
<p> questo è il nuovo paragrafo :
    <br>
    <?= $censured ?>
</p>
<p>
    
    la sua nuova lunghezza:
    <?php echo strlen($censured) ?>
    caratteri
    
</p>
    
</body>
</html>