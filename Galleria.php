<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galleria</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .myPic {
            width: 60%;
        }
    </style>
</head>
<body>
    <h1>Galleria</h1>

    <div class="navbar">
        <a href="Lataa.php">Lataa</a>
        <a href="Galleria.php">Galleria</a>
        <a href="http://it.esedu.fi/~hietanen.veeti/Hietzu22_Kotisivu/index.html">Takaisin kotisivulle</a>
        <a href="login.php">Admin view</a>
        <br>
    </div>

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