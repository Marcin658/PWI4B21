<?php

if (!isset($_POST['submit'])) {
    header('Location: ../');

    die;
}

if (!isset($_POST['email'], $_POST['message'])) {
    header('Location: ../contact.php?error=1');

    die;
}



$email = $_POST['email'];
$message = $_POST['message'];

if (empty($email) || empty($message)) {
    header('Location: ../contact.php?error=2');

    die;
}
/*
var_dump (empty($email) || empty($message));
die;
*/

var_dump (filter_var($email, FILTER_VALIDATE_EMAIL));

if (strlen($message) < 20) {
    header('Location: ../contact.php?error=3');

    die;
}

if (filter_var($email, FILTER_VALIDATE_EMAIL)){
    header('Location: ../contact.php?error=4');
    die;
}

// TODO: save t DB

header('Location: ../contact.php?success=1');