<?php

session_start();

if ( isset($_SESSION['logged_in']) ) {
    header('Location: admin.php');
    die();
}

$_SESSION['logged_id'] = 'no';
?>
<meta charset="UTF-8">

<h1>Tervetuloa</h1>
<form method="POST" action="check_login.php">
    <label for="nimi">Salasana:</label><br>
    <input type="text" name="nimi"><br>
    <input type="submit" name="submit" value="Lähetä">
</form>