<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<title>SMIS</title>
	<?php  include($_SERVER['DOCUMENT_ROOT'].'/SMIS/application/views/header.php'); ?>

 
    </head>
    <body>
       
 <?php  include($_SERVER['DOCUMENT_ROOT'].'/SMIS/application/views/navbar.php'); ?>


               <div class="col-sm-8 col-sm-offset-3 col-md-8 col-md-offset-3" style="top:50;">
                <div class="form-group">
                    <h4 style="float:left;">Employee List </h4>
                    <div class="input-group col-md-4" style="float:right;">
                        

                        <input class="form-control" type="text" placeholder="Search"/>
                        	<span class="input-group-btn"><button class="btn" id="action_btn"><i class="glyphicon glyphicon-search"></i></button></span>
                        <button class="btn btn-success" style="float:right;" data-toggle="modal" data-target="#CreateEmployee"><i class="glyphicon glyphicon-plus" ></i> Create New</button>
                    </div>
                   

                    <table class="table table-bordered responsive center">
                        <thead>
                            <th>Employee ID No.</th>
                            <th>Employee Name</th>
                            <th>Age</th>
                            <th>Gender</th>
                            <th>Department</th>
                            <th>Mobile</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                        	<?php foreach($user as $user)
							{?>
                            <tr>
                                <td><?php echo $user->user_id; ?></td>
                                <td><?php echo $user->first_name.' '.$user->last_name; ?></td>  
                                <td><?php echo $user->birthdate; ?></td>
                                <td><?php echo $user->gender; ?></td>
								<td><?php echo $user->department; ?></td>
                                <td>None yet</td>
                                <td id="action_size"><a href="#" class="btn " value="" id="action_btn"><i class="glyphicon glyphicon-open" data-toggle="modal" data-target="#ViewEmployee"></i></a>
                                    <a hef="#" class="btn " value="Edit" id="action_btn" data-toggle="modal" data-target="#editEmployee"><i class="glyphicon glyphicon-pencil" ></i></a>
                                    <a class="btn" href='delete_user/<?php echo $user->user_id; ?>'id="action_btn"><i class="glyphicon glyphicon-trash"></i></a>
                                </td>

                            </tr>
						<?php }?>                            
                        </tbody>

                    </table>
                   
                </div>

   
            </div>
            <!--CREATE EMPLOYEE PROFILE MODAL-->
           <div class="modal fade" id="CreateEmployee" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                 aria-hidden="true" >
                <div class="modal-dialog" style="width:60%;">
                    <div class="modal-content">
                        <form method='post' action='submit_user'  >      
                            <div class="modal-header" style="background-color:#521812;">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                        aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Create Employee Profile</h4>
                            </div>
                            <div class="modal-body">
                                <table class="table">
                                    <tbody >
                                        <tr id="tableline">
                                            <td class="col-md-2"><label >Employee ID</label></td>
                                            <td colspan="3"><input type="text" value="00001" class="col-md-12"disabled /></td>
                                            <td  colspan="8"></td>
                                        </tr>
                                        <tr id="tableline">
                                            <td><label>Department</label></td>
                                            <td colspan="3" >
                                                <select class="col-md-12" name='department'>   <option value=""> Select Department </option>
                                                <?php foreach($dept as $dept)
                                                    {?>
                                              
                                                    <option value='<?php echo $dept->name; ?>'><?php echo $dept->name; ?></option>
                                                    
                                                
                                                <?php }?>
                                                    
                                                </select>
                                            </td>
                                        <td  colspan="6"></td>

                                        </tr>
                                        <tr id="tableline">
                                            <td class="col-md-2"><label>Name:</label></td>
                                            <td colspan="3"><input id="first" type="text" placeholder="First"  class="col-md-12" name='first_name'><label for="first"></label></label></td>

                                            <td colspan="3"><input id="middle" type="text" placeholder="Middle" class="col-md-12"name='middle_name'><label for="middle" ></label></td>

                                            <td colspan="3"><input id="last" type="text" placeholder="Last" class="col-md-12" name='last_name'><label for="last" ></label></td>
                                        </tr>
                                        <tr id="tableline">
                                            <td class="col-md-2"><label>Account</label></td>
                                            <td colspan="3"><input id="username" type="text" placeholder="Username"  class="col-md-12" name='username'><label for="username"></label></label></td>

                                            <td colspan="3"><input id="password" type="password" placeholder="Password" class="col-md-12"name='password'><label for="password" ></label></td>

                                            <td colspan="3"></td>
                                        </tr>
                                        <tr id="tableline">
                                            <td class="col-md-2"><label>Date of Birth</label></td>
                                            <td colspan="3"><input type="text" class="col-md-12" name='birth_date' ></td>
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
                                            <td colspan="7"><input type="text" class="col-md-12"name='address'></td>
                                        </tr>
                                        <tr id="tableline">
                                            <td class="col-md-2"><label>City</label></td>
                                            <td colspan="3"><input type="text" class="col-md-12" name='city'></td>
                                            <td  colspan="7"></td>
                                        </tr>
                                        <tr id="tableline">
                                            <td style="width:100px;"><label>Mobile #</label></td>
                                            <td  colspan="3"><input type="text" class="col-md-12"name='contact_num'></td>
                                            <td><label>Email</label></td>
                                            <td colspan="3"><input type="email" class="col-md-12" name='email'></td>
                                        </tr>
                                       
                                    </tbody>
                                </table>
                            </div>
                            
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success">Save changes</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
            <!--END OF CREATE EMPLOYEE PROFILE MODAL-->
            <!--VIEW STUDENT PROFILE MODAL-->
            <div class="modal fade" id="ViewEmployee" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                 aria-hidden="true" >
                <div class="modal-dialog" style="width:60%;">
                    <div class="modal-content">
                        <div class="modal-header" style="background-color:#521812;">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Edit Employee Profile</h4>
                        </div>
                        <div class="modal-body">
                            
                                        <table class="table" >
                                            <tbody >
                                                <tr id="tableline">
                                                    <td class="col-md-2"><label >Employee ID</label></td>
                                                    <td colspan="3">00001</td>
                                                    <td  colspan="8"></td>
                                                </tr>
                                                <tr id="tableline">
                                                    <td><label>Department</label></td>
                                                    <td colspan="3" >
                                                       Math
                                                    </td>
                                                <td  colspan="6"></td>

                                                </tr>
                                                <tr id="tableline">
                                                    <td class="col-md-2"><label>Name:</label></td>
                                                    <td colspan="3"> Darwin</td>

                                                    <td colspan="3">Co</td>

                                                    <td colspan="3">Tiu</td>
                                                </tr>
                                                <tr id="tableline">
                                                    <td class="col-md-2"><label>Date of Birth</label></td>
                                                    <td class="col-md-2">1984</td>
                                                    <td class="col-md-2" colspan="3"> <label>Gender</label></td>
                                                    <td colspan="3">
                                                         Male
                                                    </td>
                                                </tr>
                                                <tr id="tableline">
                                                    <td class="col-md-2"><label>Address</label></td>
                                                    <td colspan="7">1234 Escolta St. Recto</td>
                                                </tr>
                                                <tr id="tableline">
                                                    <td class="col-md-2"><label>City</label></td>
                                                    <td colspan="3">Manila</td>
                                                    <td  colspan="7"></td>
                                                </tr>
                                                <tr id="tableline">
                                                    <td style="width:100px;"><label>Mobile #</label></td>
                                                    <td  colspan="3">09123485201</td>
                                                    <td><label>Email</label></td>
                                                    <td colspan="3">darwin_co@gmail.com</td>
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
            <!--END OF VIEW EMPLOYEE PROFILE MODAL-->
             <!--EDIT EMPLOYEE PROFILE MODAL-->
            <div class="modal fade" id="editEmployee" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                 aria-hidden="true" >
                <div class="modal-dialog" style="width:60%;">
                    <div class="modal-content">
                        <div class="modal-header" style="background-color:#521812;">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Edit Employee Profile</h4>
                        </div>
                        <div class="modal-body">
                            
                                        <table class="table" >
                                            <tbody >
                                                <tr id="tableline">
                                                    <td class="col-md-2"><label >Employee ID</label></td>
                                                    <td colspan="3"><input type="text" value="00001" class="col-md-12"disabled /></td>
                                                    <td  colspan="8"></td>
                                                </tr>
                                                <tr id="tableline">
                                                    <td><label>Department</label></td>
                                                    <td colspan="3" >
                                                        <select class="col-md-12" >   <option value=""> Select Department </option>
                                                            <option value="Math"> Math </option>
                                                            <option value="English"> English </option>
                                                            <option value="Science3"> Science </option>
                                                            <option value="Filipino"> Filipino </option>
                                                            <option value="Computer"> Computer </option>
                                                            <option value="PE">Physcial Education </option>
                                                            
                                                        </select>
                                                    </td>
                                                <td  colspan="6"></td>

                                                </tr>
                                                <tr id="tableline">
                                                    <td class="col-md-2"><label>Name:</label></td>
                                                    <td colspan="3"><input id="first" type="text" placeholder="First" value="Darwin" class="col-md-12"><label for="first"></label></label></td>

                                                    <td colspan="3"><input id="middle" type="text" placeholder="Middle" class="col-md-12" value="Co"><label for="middle" ></label></td>

                                                    <td colspan="3"><input id="last" type="text" placeholder="Last" class="col-md-12" value="Tiu"><label for="last" ></label></td>
                                                </tr>
                                                <tr id="tableline">
                                                    <td class="col-md-2"><label>Date of Birth</label></td>
                                                    <td colspan="3"><input type="text" class="col-md-12" value="1984"></td>
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
                                                    <td colspan="7"><input type="text" class="col-md-12" value="1234 Escolta St. Recto"></td>
                                                </tr>
                                                <tr id="tableline">
                                                    <td class="col-md-2"><label>City</label></td>
                                                    <td colspan="3"><input type="text" class="col-md-12" value="Manila"></td>
                                                    <td  colspan="7"></td>
                                                </tr>
                                                <tr id="tableline">
                                                    <td style="width:100px;"><label>Mobile #</label></td>
                                                    <td  colspan="3"><input type="text" class="col-md-12" value="09123485201"></td>
                                                    <td><label>Email</label></td>
                                                    <td colspan="3"><input type="email" class="col-md-12" value="darwin_co@gmail.com"></td>
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
            <!--END OF EDIT STUDENT PROFILE MODAL-->
<?php  include($_SERVER['DOCUMENT_ROOT'].'/SMIS/application/views/scripts.php'); ?>
        </body>
        </html>








<!-- </head>
<body>

<form method='post' action='create_user'>
	<button type="submit"> Create New user </button>
</button>
</form>
<div id="container" >
	<table>
		<thead>
			<td>First Name</td>
			<td>Last Name</td>
			<td>User name</td>
			<td>Password</td>
			<td>Birthdate </td>
			<td>Department</td>
			<td>Actions</td>
		</thead>
		<tbody>
			<?php foreach($user as $user)
				{?>
				<tr>
				<td><?php echo $user->first_name; ?></td>
				<td><?php echo $user->last_name; ?></td>
				<td><?php echo $user->username; ?></td>
				<td><?php echo $user->password; ?></td>
				<td><?php echo $user->birthdate; ?></td>
				<td><?php echo $user->department; ?></td>
				<td>
					<form method='post' action='edit_user'>
						<input type='hidden' name='user_id' value='<?php echo $user->user_id; ?>' />
						<button type='submit'> Edit </button>
					</form>
					<form method='post' action='delete_user'>
						<input type='hidden' name='user_id' value='<?php echo $user->user_id; ?>' />
						<button type='submit'> Delete </button>
					</form>
				</td>
				</tr>
			
			<?php }?>
		</tbody>
	</table>
	<br>
	<form method='post' action='tuition'>
	<button type="submit"> Add Tuition </button>
	</button>
	</form>
	<table>
		<thead>
			<td>Year Level</td>
			<td>Tuition Fee</td>
		</thead>
		<tbody>
			<?php foreach($fee as $fee)
				{?>
				<tr>
				<td>
					<?php echo $fee->year_level; ?></td>
				<td><?php echo $fee->fee; ?></td>
				</tr>
			
			<?php }?>
		</tbody>
	</table>
	<br>
	<form method='post' action='add_dept'>
	<button type="submit"> Add Dept </button>
	</button>
	</form>
	<table>
		<thead>
			<td>Department</td>
		</thead>
		<tbody>
			<?php foreach($dept as $dept)
				{?>
				<tr>
				<td><?php echo $dept->name; ?></td>
				</tr>
			
			<?php }?>
		</tbody>
	</table>

</div>

</body>
</html> -->