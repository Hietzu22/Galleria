<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lataa kuvia</title>
</head>
<body>
    <h1>Lataa kuvia</h1>
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