<?php
session_start();
$content = file_get_contents(__DIR__ . "/../../tasks.json");

$task_data = json_decode($content, true);

$foundedIndex = array_search($_POST['username'], array_column($task_data, 'username'));



$newTask = [
    "{$_POST['task']}",
];


$task_data[$foundedIndex]['tasks'] = array_merge($task_data[$foundedIndex]['tasks'], $newTask);
//array_push($task_data[$founded]['tasks'],$newTask) ;


file_put_contents(__DIR__ . "/../../tasks.json", json_encode($task_data));
print_r($task_data[$foundedIndex]['tasks']);
$_SESSION['tasks'] = $task_data[$foundedIndex]['tasks'];
header('Location: ./index.php');