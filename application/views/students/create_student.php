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
				<option value="1" >Male</option>
				<option value="2" >Female</option>
			</select><br>
		<label>Year/Level</label>
			<select class="form-control"  name="year_level">
	        	<option value="Grade 1"> Grade 1 </option>
	        	<option value="Grade 2"> Grade 2 </option>
	        	<option value="Grade 3"> Grade 3 </option>
	        	<option value="Grade 4"> Grade 4 </option>
	        	<option value="Grade 5"> Grade 5 </option>
	        	<option value="Grade 6"> Grade 6 </option>
	        	<option value="Grade 7"> Grade 7 </option>
	        	<option value="High School 1"> High School 1 </option>
	        	<option value="High School 2"> High School 2 </option>
	        	<option value="High School 3"> High School 3 </option>
	        	<option value="High School 4"> High School 4 </option>
	        	<option value="High School 5"> High School 5 </option>
        	</select>

		<button type="submit">Submit</button>
	</form>

</div>

</body>
</html>