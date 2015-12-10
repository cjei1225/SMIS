<div>
	<form action="create_class_schedule" method="post">
		<input type="hidden" name='section' value="<?php echo $section; ?>" />
		<table>
		 	<thead>
		 		<td>Subject</td>
		 		<td>Timeslot</td>
		 	</thead>
		 	<tbody>
		 		<tr>
			 		<td>
			 			<select name="class[]">
				 		<?php foreach($subject as $class)
				 		{ ?>
				 		<option value="<?php echo $class->class_id; ?>"> <?php echo $class->name; ?></option>
				 		<?php } ?>
				 		</select>
				 	</td>
				 	<td>
				 		<select name="timeslot[]">
				 			<option value="7:30 - 9:30">7:30 - 9:30 </option>
				 			<option value="9:30 - 10:30">9:30 - 10:30 </option>
				 			<option value="11:30 - 12:30">11:30 - 12:30 </option>
				 			<option value="13:30 - 14:30">13:30 - 14:30 </option>
				 			<option value="15:30 - 16:30">15:30 - 16:30 </option>
				 			<option value="17:30 - 18:30">17:30 - 18:30 </option>
				 		</select>
				 	</td>
		 		</tr>
		 		<tr>
			 		<td>
			 			<select name="class[]">
				 		<?php foreach($subject as $class)
				 		{ ?>
				 		<option value="<?php echo $class->class_id; ?>"> <?php echo $class->name; ?></option>
				 		<?php } ?>
				 		</select>
				 	</td>
				 	<td>
				 		<select name="timeslot[]">
				 			<option value="7:30 - 9:30">7:30 - 9:30 </option>
				 			<option value="9:30 - 10:30">9:30 - 10:30 </option>
				 			<option value="11:30 - 12:30">11:30 - 12:30 </option>
				 			<option value="13:30 - 14:30">13:30 - 14:30 </option>
				 			<option value="15:30 - 16:30">15:30 - 16:30 </option>
				 			<option value="17:30 - 18:30">17:30 - 18:30 </option>
				 		</select>
				 	</td>
		 		</tr>
		 		<tr>
			 		<td>
			 			<select name="class[]">
				 		<?php foreach($subject as $class)
				 		{ ?>
				 		<option value="<?php echo $class->class_id; ?>"> <?php echo $class->name; ?></option>
				 		<?php } ?>
				 		</select>
				 	</td>
				 	<td>
				 		<select name="timeslot[]">
				 			<option value="7:30 - 9:30">7:30 - 9:30 </option>
				 			<option value="9:30 - 10:30">9:30 - 10:30 </option>
				 			<option value="11:30 - 12:30">11:30 - 12:30 </option>
				 			<option value="13:30 - 14:30">13:30 - 14:30 </option>
				 			<option value="15:30 - 16:30">15:30 - 16:30 </option>
				 			<option value="17:30 - 18:30">17:30 - 18:30 </option>
				 		</select>
				 	</td>
		 		</tr>
		 		<tr>
			 		<td>
			 			<select name="class[]">
				 		<?php foreach($subject as $class)
				 		{ ?>
				 		<option value="<?php echo $class->class_id; ?>"> <?php echo $class->name; ?></option>
				 		<?php } ?>
				 		</select>
				 	</td>
				 	<td>
				 		<select name="timeslot[]">
				 			<option value="7:30 - 9:30">7:30 - 9:30 </option>
				 			<option value="9:30 - 10:30">9:30 - 10:30 </option>
				 			<option value="11:30 - 12:30">11:30 - 12:30 </option>
				 			<option value="13:30 - 14:30">13:30 - 14:30 </option>
				 			<option value="15:30 - 16:30">15:30 - 16:30 </option>
				 			<option value="17:30 - 18:30">17:30 - 18:30 </option>
				 		</select>
				 	</td>
		 		</tr>
		 		<tr>
			 		<td>
			 			<select name="class[]">
				 		<?php foreach($subject as $class)
				 		{ ?>
				 		<option value="<?php echo $class->class_id; ?>"> <?php echo $class->name; ?></option>
				 		<?php } ?>
				 		</select>
				 	</td>
				 	<td>
				 		<select name="timeslot[]">
				 			<option value="7:30 - 9:30">7:30 - 9:30 </option>
				 			<option value="9:30 - 10:30">9:30 - 10:30 </option>
				 			<option value="11:30 - 12:30">11:30 - 12:30 </option>
				 			<option value="13:30 - 14:30">13:30 - 14:30 </option>
				 			<option value="15:30 - 16:30">15:30 - 16:30 </option>
				 			<option value="17:30 - 18:30">17:30 - 18:30 </option>
				 		</select>
				 	</td>
		 		</tr>
		 		<tr>
			 		<td>
			 			<select name="class[]">
				 		<?php foreach($subject as $class)
				 		{ ?>
				 		<option value="<?php echo $class->class_id; ?>"> <?php echo $class->name; ?></option>
				 		<?php } ?>
				 		</select>
				 	</td>
				 	<td>
				 		<select name="timeslot[]">
				 			<option value="7:30 - 9:30">7:30 - 9:30 </option>
				 			<option value="9:30 - 10:30">9:30 - 10:30 </option>
				 			<option value="11:30 - 12:30">11:30 - 12:30 </option>
				 			<option value="13:30 - 14:30">13:30 - 14:30 </option>
				 			<option value="15:30 - 16:30">15:30 - 16:30 </option>
				 			<option value="17:30 - 18:30">17:30 - 18:30 </option>
				 		</select>
				 	</td>
		 		</tr>

		 	</tbody>
		</table>
		<button type="subject">Submit</button>
	</form>
</div>