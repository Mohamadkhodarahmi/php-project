<?php
if ($_COOKIE['loggedin'] == 1):
{
?>
<!DOCTYPE html>
<html>

<head>
	<title>User task</title>
	<link rel="stylesheet" href="style.css" type="text/css" media="screen" charset="utf-8">
</head>

<body>
	<div class="container">
		<p>
			<label for="new-task" class="middle">Add Task</label>
			<input id="new-task" type="text">
			<button>Add Task</button>
		</p>
		<h3 class="middle">Todo</h3>
		<ul id="incomplete-tasks">
		</ul>
		<h3 class="middle">Completed Tasks</h3>
		<ul id="completed-tasks">
		</ul>
	</div>
	<script type="text/javascript" src="main.js"></script>

</body>

</html>
<?php
}


else:{
    header("Location:./index.php");
}

endif;

?>
