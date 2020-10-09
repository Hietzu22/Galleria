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

