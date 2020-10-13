<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galleria</title>
    <style>
        .mypic {
            width: 60%;
        }
    </style>
</head>
<body>
    <h1>Galleria</h1>
    <?php
        $xml = simplexml_load_file('Galleria.xml');
    ?>
    
    <?php foreach ($xml->picture as $pic): ?>
        <div>
            <h2><?php echo $pic->author; ?></h2>
            <img src="Uploads/<?php echo $pic->file;?>" alt="kuva" class="myPic">
            <p><?php echo $pic->date; ?></p>
        </div>
    <?php endforeach; ?>
</body>
</html>