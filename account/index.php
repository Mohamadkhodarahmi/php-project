<?php

$hasError = false;
$jsonUser = file_get_contents('users.json');
setcookie('loggedin', 1);

$json_data = json_decode($jsonUser, true);

$founded = array_search($_POST['username'],array_column($json_data,'username'));

if ($_POST['password'] == $json_data[$founded]['pass'] ) {

        header('Location: ../login');
        die;
}
else {
    $hasError = true;
    setcookie('loggedin', 0);
}

if ($hasError){
    setcookie('error', 1);
    header('Location: /../index.php');
    die;
}
