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
	<form method='post' action='submit_student'>
		<label>First Name: </label><input type="text" name='first_name'></input><br>
		<label>Last Name: </label><input type="text" name='last_name'></input><br>
		
		<label>Birthdate: </label><input type="date" name='birth_date' ></input><br>
		<label>Gender: </label>
			<select name='gender'>
				<option disabled value='------'></option>
				<option value="1" >Male</option>
				<option value="2" >Female</option>
			</select><br>
		<label>Year/Level</label><input type="text" name="year_level" />

		<button type="submit">Submit</button>
	</form>

</div>

</body>
</html>