<?php

session_start();

if ( !isset($_SESSION['logged_in']) || $_SESSION['logged_in'] == 'no' ) {
    header('Location: login.php');

}

if (isset($_GET['action'])){
    $id = intval($_GET['id']);
    include_once 'my_functions.php';

    $action = $_GET['action'];
    if ($action == 'poista') {
        deletePost($id);
    }

    if ($action == 'piilota') {
        hidePost($id);
    }
}

?>

<meta charset="UTF-8">

<p><a href="logout.php">Kirjaudu ulos</a></p>

<h1>Tervetuloa Ylläpitäjäpaneeliin!</h1>
<p>Olet sisällä!</p>
<?php
    $xml = simplexml_load_file('Galleria.xml');
?>

<?php 
    $id = 0;
    foreach ($xml->picture as $pic): ?>
    <div class="PostDisplay">
        <h3><?php echo $pic->name; ?></h3>
        <img src="Uploads/<?php echo $pic->file;?>" alt="kuva">
        <h3><?php echo $pic->date; ?></h3>
        <div class="actions">
            <a class="btn" href="?action=poista&id=<?php echo $id; ?>">Poista</a>
            <a class="btn" href="?action=piilota&id=<?php echo $id; ?>">Piilota</a>
        </div>
    </div>
    <?php $id++; ?>
<?php endforeach; ?>