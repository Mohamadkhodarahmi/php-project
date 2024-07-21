<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body class="container">
<?php
require_once __DIR__ . '/../config.php';
session_start();
$name = $_COOKIE["username"];
if (isset($_COOKIE['login'])):{
    echo "salam $name";
    ?>
    <div >

      <h3>
          <a class="nav" href="../account/task/index.php">show task manager</a><br>

      </h3>

            <a class="btn btn-danger" href="../logout.php"  >Logout</a>


    </div>
    <?php

}
else:{
    header("Location:../index.php");
}
endif;
?>

</body>
</html>

