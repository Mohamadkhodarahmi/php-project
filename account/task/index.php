<?php
$users =require_once __DIR__."/../../users.php";


if (isset($_COOKIE['login'])):
{
?>
<!DOCTYPE html>
<html>

<head>
	<title>User task</title>
	<link rel="stylesheet" href="../../style.css" type="text/css" media="screen" charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
	<div class="container">
		<form action="addtask.php" method="post">
			<label for="new-task" class="middle">Add Task</label>
			<input id="new-task" type="text" name="task">
			<button>Add Task</button>
		</form>
		<h3 class="middle">Todo</h3>
		<ul id="incomplete-tasks">
		</ul>
		<h3 class="middle">Completed Tasks</h3>
		<ul id="completed-tasks">
		</ul>
	</div>
	<script type="text/javascript" src="../../main.js"></script>

</body>

</html>
<?php
}


else:{
    header("Location:../../index.php");
}

endif;

?>
