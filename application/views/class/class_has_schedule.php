<div>
	<table>
	 	<thead>
	 		<td>Subject</td>
	 		<td>Description</td>
	 		<td>Timeslot</td>
	 	</thead>
	 	<tbody>

	 		<?php foreach($class as $class)
	 		{ ?>
	 		<tr>
		 		<td>
		 			<?php echo $class->name; ?>
			 	</td>
			 	<td>
			 		<?php echo $class->description ?>
			 	</td>
			 	<td>
			 		<?php echo $class->time_slot; ?>
			 	</td>
	 		</tr>
	 		<?php } ?>
	 	</tbody>
	</table>
</div>