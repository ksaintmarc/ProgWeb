
<?php

include_once 'Database.php';

try {
    $databasePath = dirname(__FILE__);
    $database = new Database("sqlite:{$databasePath}/database.db");

    $email = htmlspecialchars($_POST['email']);
    $mess = htmlspecialchars($_POST['message']);

    $database->insertMessage($email, $mess);
    header('Location:../contact.php');
} catch (Exception $exception) {
    var_dump($exception);
}



