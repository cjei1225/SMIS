<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Choose the path you wish to edit</title>
</head>
<body>

<div id="container" >
	<h1>Choose the path you wish to edit</h1>

	<form method="post" action="index.php/Classes/Home">
		<button type="submit">CLASSES </button>
	</form>
	<br>
	<form method="post" action="index.php/Students/Home">
		<button type="submit">STUDENTS</button>
	</form>
	<br>
	<form method="post" action="index.php/Classes/Home">
		<button type="submit">Users/Employees </button>
	</form>

</div>

</body>
</html>