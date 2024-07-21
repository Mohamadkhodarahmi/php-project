<?php
$json_data = require_once __DIR__ . "/../../tasks.json";


$task_data= json_encode($json_data);

//$content =file_get_contents($json_data);
//print_r($content);

//$founded = array_search($_POST['username'], array_column($json_data, 'username'));
//
//$newData = array_push($json_data[$founded]['tasks'],"task3","task2") ;
//
//file_put_contents("/../../users.php", $newData);
