<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Edit Class</title>
</head>
<body>

<div id="container" >
	<div class="row">
		<div class="col-lg-4">
        </div>
        <div class="col-lg-6">
        	<form method='post' action='update_class'>
                <fieldset>
					<legend>Edit Class</legend>
					<input type='hidden' value='<?php echo $class['0']->class_id; ?>' name='class_id'>
					<div class="form-group">
						<label class="col-lg-2 control-label">Class Name</label>
						<div class="col-lg-10">
                            <input class="form-control" value='<?php echo $class['0']->name;?>' name='name' type="text">
						</div>
					</div>

					<div class="form-group">
						<label class="col-lg-2 control-label">Description</label>
						<div class="col-lg-10">
							<input class="form-control"  type="text" name='description' value='<?php echo $class['0']->description;?>' ></input><br>
						</div>
					</div>

					<div class="form-group">
						<label class="col-lg-2 control-label">Employee</label>
						<div class="col-lg-10">
							<select class="form-control"  name='user_id'>
				        	<?php foreach ($users as $user)
				                {
				                echo"<option value="; echo "'".$user->user_id."'"; if($class['0']->user_id == $user->user_id){echo 'selected';} echo">";  echo $user->first_name." ".$user->last_name;' </option>'; 
				                }
				            ?>
				        	</select>
			        	</div>
			        </div>
			        <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                        	<button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
        <div class="col-lg-4">
        </div>
    </div>
</div>

</body>
</html>