<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lataa kuvia</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Lataa kuvia</h1>

    <div class="navbar">
        <a href="Lataa.php">Lataa</a>
        <a href="Galleria.php">Galleria</a>
        <a href="http://it.esedu.fi/~hietanen.veeti/index.php">Takaisin kotisivulle</a>
        <br>
    </div>

    <form action="Upload.php" method="post" enctype="multipart/form-data">
        <label for="author">Nimi</label>
        <input type="text" name="author">
        <br>
        <input type="file" name="fileToUpload">
        <br>
        <input type="submit" value="Upload" name="submit">
    </form>
</body>
</html>