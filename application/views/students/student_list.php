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
<form method='post' action='create_student'>
	<button type="submit"> Create New Student </button>
</button>
</form>
	<table>
		<thead>
			<td>First Name</td>
			<td>Last Name</td>
			<td>Birthdate </td>
			<td>Gender </td>
			<td>Year Level </td>
			<td>Actions</td>
		</thead>
		<tbody>
			<?php foreach($student_list as $student)
				{?>
				<tr>
				<td><?php echo $student->first_name; ?></td>
				<td><?php echo $student->last_name; ?></td>
				<td><?php echo $student->birthdate; ?></td>
				<td><?php if ($student->gender == 1){$gender = 'Male';}else {$gender = 'Female';}echo $gender; ?></td>
				<td><?php echo $student->year_level; ?></td>
				<td>
					<form method='post' action='edit_student'>
						<input type='hidden' name='student_id' value='<?php echo $student->student_id; ?>' />
						<button type='submit'> Edit </button>
					</form>

					<form method='post' action='delete_student'>
						<input type='hidden' name='student_id' value='<?php echo $student->student_id; ?>' />
						<button type='submit'> Delete </button>
					</form>

					<form method='post' action='add_section'>
						<input type='hidden' name='student_id' value='<?php echo $student->student_id; ?>' />
						<input type='hidden' name='year_level' value='<?php echo $student->year_level; ?>' />
						<button type='submit'> Add Section </button>
					</form>
				</td>
				</tr>
			
			<?php }?>
		</tbody>
	</table>
	<br>
	<form method='post' action='view_student_sec'>
	<button type="submit"> View Students with section </button>
	</button>
	</form>
</div>

</body>
</html>