<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Add Section</title>
</head>
<body>
qweqwe
<div id="container" >
	<form method='post' action='submit_section'>
		<input type='hidden' value='<?php echo $student_details['0']->student_id; ?>' name='student_id'>
		<label>First Name: </label><?php echo $student_details['0']->first_name;?>
		<br>
		<label>Last Name: </label><?php echo $student_details['0']->last_name;?>
		<br>
		<label>Birthdate: </label><?php echo $student_details['0']->birthdate;?>
		<br>
		<label>Gender:  <?php if($student_details['0']->gender == '1'){echo 'selected';}
				elseif ($student_details['0']->gender == '2'){echo 'selected'; } ?>
		<br>
		<label>Year/Level: </label><?php echo $student_details['0']->year_level;?>
		<br>
		<label>Section: </label>
		<select class="form-control" id="inputemployee" name="section">
            <?php foreach ($section_list as $sec)
                {
                echo"<option value="; echo "'".$sec->section."'"; echo">";  echo $sec->section;' </option>'; 
                }
            ?>
        </select>
		<button type="submit">Submit</button>
	</form>

</div>

</body>
</html>