<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html lang="en">
<head>
	<meta charset="utf-8">
	<?php  include($_SERVER['DOCUMENT_ROOT'].'/SMIS/application/views/header.php'); ?>
	<title>Choose the path you wish to edit</title>
</head>
<body>

	<?php  include($_SERVER['DOCUMENT_ROOT'].'/SMIS/application/views/navbar.php'); ?>


<div class="col-sm-8 col-sm-offset-3 col-md-8 col-md-offset-3" style="top:50;">
                <div class="form-group">
                    <h4 style="float:left;">Student List</h4>
                    <div class="input-group col-md-4" style="float:right;">
                        

                        <input class="form-control" type="text" placeholder="Search"/><span class="input-group-btn"><button class="btn" id="action_btn"><i class="glyphicon glyphicon-search"></i></button></span>
                        <button class="btn btn-success" style="float:right;" data-toggle="modal" data-target="#CreateStudent"><i class="glyphicon glyphicon-plus" ></i> Create New</button>
                    </div>
                   

                    <table class="table table-bordered responsive center">
                        <thead>
                            <th>Student ID No.</th>
                            <th>Student Name</th>
                            <th>Age</th>
                            <th>Gender</th>
                            <th>Grade</th>
                            <th>Mobile</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                        	

							
							<?php foreach($student_list as $student)
								{?>
                            <tr>
                                <td><?php echo $student->student_id; ?></td>
                                <td><?php echo $student->first_name.' '. $student->last_name;  ?></td>
                                <td></td>
                                <td><?php if ($student->gender == 1){$gender = 'Male';}else {$gender = 'Female';}echo $gender; ?></td>
                                <td><?php echo $student->year_level; ?></td>
                                <td>N/a</td>
                                <td id="action_size"><a href="#" class="btn " value="" id="action_btn"><i class="glyphicon glyphicon-open" data-toggle="modal" data-target="#ViewStudent"></i></a>
                                    <a hef="#" class="btn " value="Edit" id="action_btn" data-toggle="modal" data-target="#editStudent"><i class="glyphicon glyphicon-pencil" ></i></a>
                                    <a class="btn" href='Student/delete/<?php echo $student->student_id; ?>' id="action_btn"><i class="glyphicon glyphicon-trash"></i></a>
                                </td>
                            </tr>
                            <?php }?>
                        </tbody>

                    </table>
                   
                </div>

   
            </div>
            <!--CREATE STUDENT PROFILE MODAL-->
            <div class="modal fade" id="CreateStudent" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                 aria-hidden="true" >
                <div class="modal-dialog" style="width:60%;">
                    <form method='post' action='Student/submit'>
                        <div class="modal-content">
                            <div class="modal-header" style="background-color:#521812;">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                        aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Create Student Profile</h4>
                            </div>
                            <div class="modal-body">
                                <table class="table" >
                                    <tbody >
                                        <tr id="tableline">
                                            <td class="col-md-2"><label >Student ID</label></td>
                                            <td colspan="3"><input type="text" value="00001" class="col-md-12"disabled/></td>
                                            <td  colspan="8"></td>
                                        </tr>
                                        <tr id="tableline">
                                            <td><label>Level</label></td>
                                            <td colspan="3" >
                                                <select class="col-md-12" name="year_level">   <option value=""> Select Level </option>
                                                    <option value="Grade 1"> Grade 1 </option>
                                                    <option value="Grade 2"> Grade 2 </option>
                                                    <option value="Grade 3"> Grade 3 </option>
                                                    <option value="Grade 4"> Grade 4 </option>
                                                    <option value="Grade 5"> Grade 5 </option>
                                                    <option value="Grade 6"> Grade 6 </option>
                                                    <option value="Grade 7"> Grade 7 </option>
                                                    <option value="High School 1"> High School 1 </option>
                                                    <option value="High School 2"> High School 2 </option>
                                                    <option value="High School 3"> High School 3 </option>
                                                    <option value="High School 4"> High School 4 </option>
                                                    <option value="High School 5"> High School 5 </option>
                                                </select>
                                            </td>
                                        <td  colspan="6"></td>
                                        </tr>
                                        <tr id="tableline">
                                            <td class="col-md-2"><label>Name:</label></td>
                                            <td colspan="3"><input id="first" type="text" placeholder="First" class="col-md-12" name='first_name'><label for="first"></label></label></td>

                                            <td colspan="3"><input id="middle" type="text" placeholder="Middle" class="col-md-12" name='middle_name'><label for="middle"></label></td>

                                            <td colspan="3"><input id="last" type="text" placeholder="Last" class="col-md-12" name='last_name'><label for="last"></label></td>
                                        </tr>
                                        <tr id="tableline">
                                            <td class="col-md-2"><label>Date of Birth</label></td>
                                            <td colspan="3"><input type="date" name='birth_date' class="col-md-12"></td>
                                            <td class="col-md-2" colspan="3"> <label>Gender</label></td>
                                            <td colspan="3">
                                                <select class="col-md-12" name='gender'>   <option value=""> Select Gender </option>
                                                    <option value="Male"> Male </option>
                                                    <option value="Female"> Female </option>

                                                </select>
                                            </td>
                                        </tr>
                                        <tr id="tableline">
                                            <td class="col-md-2"><label>Address</label></td>
                                            <td colspan="7"><input type="text" class="col-md-12" name='address'></td>
                                        </tr>
                                        <tr id="tableline">
                                            <td class="col-md-2"><label>City</label></td>
                                            <td colspan="3"><input type="text" class="col-md-12" name='city'></td>
                                            <td  colspan="7"></td>
                                        </tr>
                                        <tr id="tableline">
                                            <td style="width:100px;"><label>Mobile #</label></td>
                                            <td  colspan="3"><input type="text" class="col-md-12" name='contact_num'></td>
                                            <td><label>Email</label></td>
                                            <td colspan="3"><input type="email" class="col-md-12" name='email'></td>
                                        </tr>
                                        <tr id="tableline">
                                            <td class="col-md-2"><label>Father's Name</label></td>
                                            <td colspan="3"><input type="text" class="col-md-12" name='father'></td>
                                            <td class="col-md-2"><label>Mobile #</label></td>
                                            <td colspan="3"><input type="text" class="col-md-12" name='father_num'></td>
                                        </tr>
                                        <tr id="tableline">
                                            <td class="col-md-2"><label>Mother's Name</label></td>
                                            <td colspan="3"><input type="text" class="col-md-12" name='mother'></td>
                                            <td class="col-md-2"><label>Mobile #</label></td>
                                            <td colspan="3"><input type="text"class="col-md-12" name='mother_num'></td>
                                        </tr>
                                    </tbody>
                                </table>
                                   
                            </div>
                            
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                <button type="Submit" class="btn btn-success">Save changes</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!--END OF CREATE STUDENT PROFILE MODAL-->
            <!--VIEW STUDENT PROFILE MODAL-->
            <div class="modal fade" id="ViewStudent" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                 aria-hidden="true" >
                <div class="modal-dialog" style="width:60%;">
                    <div class="modal-content">
                        <div class="modal-header" style="background-color:#521812;">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">View Student Profile</h4>
                        </div>
                        <div class="modal-body">
                            
                                        <table class="table" >
                                            <tbody >
                                                <tr id="tableline">
                                                    <td class="col-md-2"><label >Student ID</label></td>
                                                    <td colspan="3">000001</td>>
                                                    <td  colspan="8"></td>
                                                </tr>
                                                <tr id="tableline">
                                                    <td><label>Level</label></td>
                                                    <td colspan="3" >
                                                       Grade 3
                                                    </td>
                                                <td  colspan="6"></td>

                                                </tr>
                                                <tr id="tableline">
                                                    <td class="col-md-2"><label>Name:</label></td>
                                                    <td colspan="3">Mark</td>

                                                    <td colspan="3">Ching</td>

                                                    <td colspan="3">So</td>
                                                </tr>
                                                <tr id="tableline">
                                                    <td class="col-md-2"><label>Date of Birth</label></td>
                                                    <td colspan="3">2007</td>
                                                    <td class="col-md-2" colspan="3"> <label>Gender</label></td>
                                                    <td colspan="3">
                                                      Male
                                                    </td>
                                                </tr>
                                                <tr id="tableline">
                                                    <td class="col-md-2"><label>Address</label></td>
                                                    <td colspan="7">2143 Estrada St. Taft Ave,</td>
                                                </tr>
                                                <tr id="tableline">
                                                    <td class="col-md-2"><label>City</label></td>
                                                    <td colspan="3">Manila</td>
                                                    <td  colspan="6"></td>
                                                </tr>
                                                <tr id="tableline">
                                                    <td style="width:100px;"><label>Mobile #</label></td>
                                                    <td  colspan="3">n/a</td>
                                                    <td><label>Email</label></td>
                                                    <td colspan="3">n/a</td>
                                                </tr>
                                                <tr id="tableline">
                                                    <td class="col-md-2"><label>Father's Name</label></td>
                                                    <td colspan="3">James So</td>
                                                    <td class="col-md-2"><label>Mobile #</label></td>
                                                    <td colspan="3">09175463214</td>
                                                </tr>
                                                <tr id="tableline">
                                                    <td class="col-md-2"><label>Mother's Name</label></td>
                                                    <td colspan="3">Kate Ching So</td>
                                                    <td class="col-md-2"><label>Mobile #</label></td>
                                                    <td colspan="3">09223654128</td>
                                                </tr>
                                            </tbody>
                                        </table>
                               
                            </div>
                        
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                           
                        </div>
                    </div>
                </div>
            </div>
            <!--END OF VIEW STUDENT PROFILE MODAL-->
             <!--EDIT STUDENT PROFILE MODAL-->
            <div class="modal fade" id="editStudent" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                 aria-hidden="true" >
                <div class="modal-dialog" style="width:60%;">
                    <div class="modal-content">
                        <div class="modal-header" style="background-color:#521812;">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Edit Student Profile</h4>
                        </div>
                        <div class="modal-body">
                            
                                        <table class="table" >
                                            <tbody >
                                                <tr id="tableline">
                                                    <td class="col-md-2"><label >Student ID</label></td>
                                                    <td colspan="3"><input type="text" value="00001" class="col-md-12"disabled /></td>
                                                    <td  colspan="8"></td>
                                                </tr>
                                                <tr id="tableline">
                                                    <td><label>Level</label></td>
                                                    <td colspan="3" >
                                                        <select class="col-md-12" >   <option value=""> Select Level </option>
                                                            <option value="Grade 1"> Grade 1 </option>
                                                            <option value="Grade 2"> Grade 2 </option>
                                                            <option value="Grade 3"> Grade 3 </option>
                                                            <option value="Grade 4"> Grade 4 </option>
                                                            <option value="Grade 5"> Grade 5 </option>
                                                            <option value="Grade 6"> Grade 6 </option>
                                                            <option value="Grade 7"> Grade 7 </option>
                                                            <option value="High School 1"> High School 1 </option>
                                                            <option value="High School 2"> High School 2 </option>
                                                            <option value="High School 3"> High School 3 </option>
                                                            <option value="High School 4"> High School 4 </option>
                                                            <option value="High School 5"> High School 5 </option>
                                                        </select>
                                                    </td>
                                                <td  colspan="6"></td>

                                                </tr>
                                                <tr id="tableline">
                                                    <td class="col-md-2"><label>Name:</label></td>
                                                    <td colspan="3"><input id="first" type="text" placeholder="First" value="Mark" class="col-md-12"><label for="first"></label></label></td>

                                                    <td colspan="3"><input id="middle" type="text" placeholder="Middle" class="col-md-12" value="Ching"><label for="middle" ></label></td>

                                                    <td colspan="3"><input id="last" type="text" placeholder="Last" class="col-md-12" value="So"><label for="last" ></label></td>
                                                </tr>
                                                <tr id="tableline">
                                                    <td class="col-md-2"><label>Date of Birth</label></td>
                                                    <td colspan="3"><input type="text" class="col-md-12" value="2007"></td>
                                                    <td class="col-md-2" colspan="3"> <label>Gender</label></td>
                                                    <td colspan="3">
                                                        <select class="col-md-12" value="Male">   <option value=""> Select Gender </option>
                                                            <option value="Male"> Male </option>
                                                            <option value="Female"> Female </option>

                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr id="tableline">
                                                    <td class="col-md-2"><label>Address</label></td>
                                                    <td colspan="7"><input type="text" class="col-md-12" value="2143 Estrada St. Taft Ave,"></td>
                                                </tr>
                                                <tr id="tableline">
                                                    <td class="col-md-2"><label>City</label></td>
                                                    <td colspan="3"><input type="text" class="col-md-12" value="Manila"></td>
                                                    <td  colspan="7"></td>
                                                </tr>
                                                <tr id="tableline">
                                                    <td style="width:100px;"><label>Mobile #</label></td>
                                                    <td  colspan="3"><input type="text" class="col-md-12" value="n/a"></td>
                                                    <td><label>Email</label></td>
                                                    <td colspan="3"><input type="email" class="col-md-12" value="n/a"></td>
                                                </tr>
                                                <tr id="tableline">
                                                    <td class="col-md-2"><label>Father's Name</label></td>
                                                    <td colspan="3"><input type="text" class="col-md-12" value="James So"></td>
                                                    <td class="col-md-2"><label>Mobile #</label></td>
                                                    <td colspan="3"><input type="text" class="col-md-12" value="09175463214"></td>
                                                </tr>
                                                <tr id="tableline">
                                                    <td class="col-md-2"><label>Mother's Name</label></td>
                                                    <td colspan="3"><input type="text" class="col-md-12" value="Kate Ching So"></td>
                                                    <td class="col-md-2"><label>Mobile #</label></td>
                                                    <td colspan="3"><input type="text"class="col-md-12" value="09223654128"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                               
                            </div>
                        
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-success">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
<!-- <div id="container" >
<form method='post' action='Student/create'>
	<button type="submit"> Create New Student </button>

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
					<form method='post' action='Student/edit'>
						<input type='hidden' name='student_id' value='<?php echo $student->student_id; ?>' />
						<button type='submit'> Edit </button>
					</form>

					<form method='post' action='Student/delete'>
						<input type='hidden' name='student_id' value='<?php echo $student->student_id; ?>' />
						<button type='submit'> Delete </button>
					</form>

					<?php echo form_open('Students/Section/add'); ?>
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
	<form method='post' action='Section/view'>
		<button type="submit"> View Students with section </button>

	</form>
</div> -->
	<?php  include($_SERVER['DOCUMENT_ROOT'].'/SMIS/application/views/scripts.php'); ?>
</body>
</html>