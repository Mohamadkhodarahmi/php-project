<?php
require_once __DIR__ . '/../config.php';

$hasError = false;
$json_data = require_once __DIR__ . "/../users.php";


$founded = array_search($_POST['username'], array_column($json_data, 'username'));

setcookie('username', $json_data[$founded]['username']);

if ($_POST['password'] == $json_data[$founded]['pass']) {
    setcookie("login", 'wellcome');
    redirect();
}
else {
    setcookie("wrong" , "wrong password", time() + 3, "/");
    header("Location:../index.php");
    die;

}

