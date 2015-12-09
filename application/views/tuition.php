<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Add Tuition</title>
</head>
<body>

<div id="container" >
	<form method='post' action='add_tuition'>
		<label>Year Level: </label>
		<select class="form-control"  name="year_level">
        	<option value="1"> Grade 1 </option>
        	<option value="2"> Grade 2 </option>
        	<option value="3"> Grade 3 </option>
        	<option value="4"> Grade 4 </option>
        	<option value="5"> Grade 5 </option>
        	<option value="6"> Grade 6 </option>
        	<option value="7"> Grade 7 </option>
        	<option value="8"> High School 1 </option>
        	<option value="9"> High School 2 </option>
        	<option value="10"> High School 3 </option>
        	<option value="11"> High School 4 </option>
        	<option value="12"> High School 5 </option>
        </select>
        <br>
		<label>Tuition Fee: </label><input type="text" name='fee'></input>
		<br>
		<button type="submit">Submit</button>
	</form>

</div>

</body>
</html>