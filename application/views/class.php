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
        	<form method="post" action="index.php/Classes/add_class">
                    <fieldset>
                        <legend>Add Class</legend>
                        <div class="form-group">
                            <label for="inputcname" class="col-lg-2 control-label">Class Name</label>

                            <div class="col-lg-10">
                                <input class="form-control" id="inputcname" placeholder="Name" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputdescription" class="col-lg-2 control-label">Description</label>

                            <div class="col-lg-10">
                                <input class="form-control" id="inputdescription" placeholder="Description" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputemployee" class="col-lg-2 control-label">Employee</label>

                            <select class="form-control" id="inputemployee">
                                <option selected="selected">1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-10 col-lg-offset-2">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="reset" class="btn btn-default">Cancel</button>
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