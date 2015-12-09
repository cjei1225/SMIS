<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Create User</title>
</head>
<body>

<div id="container" >
	<form method='post' action='submit_user'>
		<label>First Name: </label><input type="text" name='first_name'></input><br>
		<label>Last Name: </label><input type="text" name='last_name'></input><br>
		<label>Position: </label><input type="text" name='position'></input><br>
		<label>Birthdate: </label><input type="date" name='birth_date' ></input><br>
		<label>Gender: </label>
			<select name='gender'>
				<option disabled value='------'></option>
				<option value="1" >Male</option>
				<option value="2" >Female</option>
			</select><br>
		<label>Username: </label><input type="text" name='username'></input><br>
		<label>Password: </label><input type="text" name='password'></input><br>
		<label>Department: </label><input type="text" name='department'></input><br>

		<button type="submit">Submit</button>
	</form>

</div>

</body>
</html>