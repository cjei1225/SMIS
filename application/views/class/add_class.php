<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Add Class</title>
</head>
<body>

<div class="container">
	<div class="row">
		<div class="col-lg-4">
        </div>
        <div class="col-lg-6">
        	<form method="post" action="submit_class">
                    <fieldset>
                        <legend>Add Class</legend>
                        <div class="form-group">
                            <label for="inputcname" class="col-lg-2 control-label">Class Name</label>

                            <div class="col-lg-10">
                                <input class="form-control" id="inputcname" placeholder="Name" name='name' type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputdescription" class="col-lg-2 control-label">Description</label>

                            <div class="col-lg-10">
                                <input class="form-control" id="inputdescription" name='description'placeholder="Description" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputemployee" class="col-lg-2 control-label">Employee</label>
                            <div class="col-lg-10">
	                            <select class="form-control" id="inputemployee" name="user_id">
	                            	<?php foreach ($class as $class)
	                                    {
	                                    echo"<option value="; echo "'".$class->user_id."'"; echo">";  echo $class->first_name." ".$class->last_name;' </option>'; 
	                                    }
	                                ?>
	                            </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-10 col-lg-offset-2">
                                <select name="year_level">
                                    <option value="K1">K1</option>
                                    <option value="K2">K2</option>
                                    <option value="K3">K3</option>
                                    <option value="K4">K4</option>
                                    <option value="K5">K5</option>
                                    <option value="K6">K6</option>
                                    <option value="K7">K7</option>
                                    <option value="K8">K8</option>
                                    <option value="K9">K9</option>
                                    <option value="K10">K10</option>
                                    <option value="K11">K11</option>
                                    <option value="K12">K12</option>
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

</body>
</html>