<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Choose the path you wish to edit</title>
</head>
<body>

<form method='post' action='create_user'>
	<button type="submit"> Create New user </button>
</button>
</form>
<div id="container" >
	<table>
		<thead>
			<td>First Name</td>
			<td>Last Name</td>
			<td>User name</td>
			<td>Password</td>
			<td>Birthdate </td>
			<td>Department</td>
			<td>Actions</td>
		</thead>
		<tbody>
			<?php foreach($user as $user)
				{?>
				<tr>
				<td><?php echo $user->first_name; ?></td>
				<td><?php echo $user->last_name; ?></td>
				<td><?php echo $user->username; ?></td>
				<td><?php echo $user->password; ?></td>
				<td><?php echo $user->birthdate; ?></td>
				<td><?php echo $user->department; ?></td>
				<td>
					<form method='post' action='edit_user'>
						<input type='hidden' name='user_id' value='<?php echo $user->user_id; ?>' />
						<button type='submit'> Edit </button>
					</form>
					<form method='post' action='delete_user'>
						<input type='hidden' name='user_id' value='<?php echo $user->user_id; ?>' />
						<button type='submit'> Delete </button>
					</form>
				</td>
				</tr>
			
			<?php }?>
		</tbody>
	</table>
	<br>
	<form method='post' action='tuition'>
	<button type="submit"> Add Tuition </button>
	</button>
	</form>
	<table>
		<thead>
			<td>Year Level</td>
			<td>Tuition Fee</td>
		</thead>
		<tbody>
			<?php foreach($fee as $fee)
				{?>
				<tr>
				<td><?php if ($fee->year_level == 1){$year = 'Grade 1';} 
					elseif ($fee->year_level == 2){$year = 'Grade 2';} 
					elseif ($fee->year_level == 3){$year = 'Grade 3';} 
					elseif ($fee->year_level == 4){$year = 'Grade 4';} 
					elseif ($fee->year_level == 5){$year = 'Grade 5';} 
					elseif ($fee->year_level == 6){$year = 'Grade 6';} 
					elseif ($fee->year_level == 7){$year = 'Grade 7';} 
					elseif ($fee->year_level == 8){$year = 'High School 1';} 
					elseif ($fee->year_level == 9){$year = 'High School 2';} 
					elseif ($fee->year_level == 10){$year = 'High School 3';} 
					elseif ($fee->year_level == 11){$year = 'High School 4';} 
					elseif ($fee->year_level == 12){$year = 'High School 5';} 
					echo $year; ?></td>
				<td><?php echo $fee->fee; ?></td>
				</tr>
			
			<?php }?>
		</tbody>
	</table>
	<br>
	<form method='post' action='add_dept'>
	<button type="submit"> Add Dept </button>
	</button>
	</form>
	<table>
		<thead>
			<td>Department</td>
		</thead>
		<tbody>
			<?php foreach($dept as $dept)
				{?>
				<tr>
				<td><?php echo $dept->name; ?></td>
				</tr>
			
			<?php }?>
		</tbody>
	</table>

</div>

</body>
</html>