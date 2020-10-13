<?php
$target_dir = "Uploads/";
$target_file = $target_dir . basename($_FILES['fileToUpload']['name']);

$errors = [];

if (isset($_POST['submit'])) {
    $check = getimagesize($_FILES['fileToUpload']['tmp_name']);
    if ($check == false) {
        $errors[] = 'Tiedosto ei ole kuva!';
    }
}

$image_file_type = pathinfo($target_file, PATHINFO_EXTENSION);
if ($image_file_type != 'jpg' && $image_file_type != 'jpeg') {
    $errors[] = 'Kuva ei ole JPG muodossa!';
}

if ($_FILES['fileToUpload']['size'] > 100000000) {
    $errors[] = 'Tiedosto on liian suuri!';
}

if (file_exists($target_file)) {
    $errors[] = 'Tiedosto on jo olemassa!';
}

if (count($errors) > 0) {
    foreach ($errors as $error) {
        echo $error."<br>";
    }
} else {
    if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file)) {
        echo "Tiedosto ". basename($_FILES["fileToUpload"]["name"]). " on ladattu palvelimelle!";
        include_once 'my_functions.php';
        saveDataToXML($_POST, basename( $_FILES["fileToUpload"]["name"]));
    } else {
        echo "Tiedoston siirtämisessä tapahtui virhe!";
    }
}