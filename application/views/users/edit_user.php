<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Edit User</title>
</head>
<body>

<div id="container" >
	<form method='post' action='submit_edits'>
		<input type='hidden' value='<?php echo $user_details['0']->user_id; ?>' name='user_id'>
		<label>First Name: </label><input type="text" name='first_name' value='<?php echo $user_details['0']->first_name;?>' ></input><br>
		<label>Last Name: </label><input type="text" name='last_name' value='<?php echo $user_details['0']->last_name;?>' ></input><br>
		<label>Position: </label><input type="text" name='position' value='<?php echo $user_details['0']->position;?>' ></input><br>
		<label>Birthdate: </label><input type="date" name='birth_date' value='<?php echo $user_details['0']->birthdate;?>'  ></input><br>
		<label>Gender: </label>
			<select name='gender'>
				<option disabled value='------'></option>
				<option value="1" <?php if($user_details['0']->gender == '1'){echo 'selected'; }?>>Male</option>
				<option value="2" <?php if($user_details['0']->gender == '2'){echo 'selected'; }?>>Female</option>
			</select><br>
		<label>Username: </label><input type="text" name='username' value='<?php echo $user_details['0']->username;?>' ></input><br>
		<label>Password: </label><input type="text" name='password' value='<?php echo $user_details['0']->password;?>' ></input><br>
		<label>Department: </label><input type="text" name='department' value='<?php echo $user_details['0']->department;?>' ></input><br>

		<button type="submit">Submit</button>
	</form>

</div>

</body>
</html>