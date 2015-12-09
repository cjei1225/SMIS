<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Edit student</title>
</head>
<body>

<div id="container" >
	<form method='post' action='submit_edits'>
		<input type='hidden' value='<?php echo $student_details['0']->student_id; ?>' name='student_id'>
		<label>First Name: </label><input type="text" name='first_name' value='<?php echo $student_details['0']->first_name;?>' ></input><br>
		<label>Last Name: </label><input type="text" name='last_name' value='<?php echo $student_details['0']->last_name;?>' ></input><br>
		<label>Birthdate: </label><input type="date" name='birth_date' value='<?php echo $student_details['0']->birthdate;?>'  ></input><br>
		<label>Gender: </label>
			<select name='gender'>
				<option disabled value='------'></option>
				<option value="1" <?php if($student_details['0']->gender == '1'){echo 'selected'; }?>>Male</option>
				<option value="2" <?php if($student_details['0']->gender == '2'){echo 'selected'; }?>>Female</option>
			</select><br>
		<label>Year/Level: </label><input type="text" name='year_level' value='<?php echo $student_details['0']->year_level;?>' ></input><br>

		<button type="submit">Submit</button>
	</form>

</div>

</body>
</html>