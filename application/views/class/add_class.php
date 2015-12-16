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
            <form method="post" action="Subject/submit">
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
                                    <option value="Grade 1">Grade 1</option>
                                    <option value="Grade 2">Grade 2</option>
                                    <option value="Grade 3">Grade 3</option>
                                    <option value="Grade 4">Grade 4</option>
                                    <option value="Grade 5">Grade 5</option>
                                    <option value="Grade 6">Grade 6</option>
                                    <option value="Grade 7">Grade 7</option>
                                    <option value="Highschool 1">Highschool 1</option>
                                    <option value="Highschool 2">Highschool 2</option>
                                    <option value="Highschool 3">Highschool 3</option>
                                    <option value="Highschool 4">Highschool 4</option>
                                    <option value="Highschool 5">Highschool 5</option>
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

    <div class="row">
        <div class="col-lg-4">
        </div>
        <div class="col-lg-6">
            <form method="post" action="classroom/create">
                    <fieldset>
                        <legend>Add Classroom</legend>
                        <div class="form-group">
                            <label for="year_level" class="col-lg-2 control-label">Year Level</label>
                            <div class="col-lg-10">
                                <select name="year_level">
                                    <option value="Grade 1">Grade 1</option>
                                    <option value="Grade 2">Grade 2</option>
                                    <option value="Grade 3">Grade 3</option>
                                    <option value="Grade 4">Grade 4</option>
                                    <option value="Grade 5">Grade 5</option>
                                    <option value="Grade 6">Grade 6</option>
                                    <option value="Grade 7">Grade 7</option>
                                    <option value="Highschool 1">Highschool 1</option>
                                    <option value="Highschool 2">Highschool 2</option>
                                    <option value="Highschool 3">Highschool 3</option>
                                    <option value="Highschool 4">Highschool 4</option>
                                    <option value="Highschool 5">Highschool 5</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputdescription" class="col-lg-2 control-label">Section</label>

                            <div class="col-lg-10">
                                <input class="form-control" id="inputdescription" name='section'placeholder="Section" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputcapacity" class="col-lg-2 control-label">Capacity</label>
                            <div class="col-lg-10">
                                <input class="form-control" id="inputcapacity" name='capacity'placeholder="Capacity" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-10 col-lg-offset-2">

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

<form method='post' action=''
 
</body>
</html>