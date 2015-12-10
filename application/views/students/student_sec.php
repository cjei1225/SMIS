<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<div id="container" >
<form method='post' action='Home'>
	<button type="submit"> List of Students </button>
</button>
</form>
	<table>
		<thead>
			<td>First Name</td>
			<td>Last Name</td>
			<td>Birthdate </td>
			<td>Gender </td>
			<td>Year Level </td>
			<td>Section</td>
			<td>Room</td>
		</thead>
		<tbody>
			<?php foreach($student_sec as $student)
				{?>
				<tr>
				<td><?php echo $student->first_name; ?></td>
				<td><?php echo $student->last_name; ?></td>
				<td><?php echo $student->birthdate; ?></td>
				<td><?php if ($student->gender == 1){$gender = 'Male';}else {$gender = 'Female';}echo $gender; ?></td>
				<td><?php echo $student->year_level; ?></td>
				<td><?php echo $student->section; ?></td>
				<td><?php echo $student->room; ?></td>
				</tr>
			
			<?php }?>
		</tbody>
	</table>
	<br>
	
</div>

</body>
</html>