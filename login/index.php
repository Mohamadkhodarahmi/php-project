<?php
if ($_COOKIE['loggedin']==1){
    echo 'salam';
}
else{
    header("Location:../index.php");
}
