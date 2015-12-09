<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Choose the path you wish to edit</title>
</head>
<body>

<form method='post' action='create_student'>
	<button type="submit"> Create New Student </button>
</button>
</form>
<div id="container" >
	<table>
		<thead>
			<td>First Name</td>
			<td>Last Name</td>
			<td>Birthdate </td>

			<td>Actions</td>
		</thead>
		<tbody>
			<?php foreach($student_list as $student)
				{?>
				<tr>
				<td><?php echo $student->first_name; ?></td>
				<td><?php echo $student->last_name; ?></td>


				<td><?php echo $student->birthdate; ?></td>

				<td>
					<form method='post' action='edit_student'>
						<input type='hidden' name='student_id' value='<?php echo $student->student_id; ?>' />
						<button type='submit'> Edit </button>
					</form>

					<form method='post' action='delete_student'>
						<input type='hidden' name='student_id' value='<?php echo $student->student_id; ?>' />
						<button type='submit'> Delete </button>
					</form>
				</td>
				</tr>
			
			<?php }?>
		</tbody>
	</table>

</div>

</body>
</html>