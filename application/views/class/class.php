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
                    <h4 style="float:left;">Class List</h4>
                    <div class="input-group col-md-4" style="float:right;">
                        

                        <input class="form-control" type="text" placeholder="Search"/><span class="input-group-btn"><button class="btn" id="action_btn"><i class="glyphicon glyphicon-search"></i></button></span>
                        <button class="btn btn-success" style="float:right;" data-toggle="modal" data-target="#CreateClass"><i class="glyphicon glyphicon-plus" ></i> Create New</button>
                    </div>
                   
                    <table class="table table-bordered responsive center">
                        <thead>
                            <th>Class Code</th>
                            <th>Subject</th>
                            <th>Level</th>
                            <th>Teacher Name</th>
                            <th>Capacity</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            <?php foreach($class as $class)
                            {?>
                            <tr>
                                <td><?php echo $class->class_id; ?></td>
                                <td><?php echo $class->name; ?></td>
                                <td><?php echo $class->year_level; ?></td>
                                <td><?php echo $class->first_name." ".$class->last_name; ?></td>
                                <td>Wala pa</td>
                                
                                <td id="action_size"><a href="#" class="btn " value="" id="action_btn"><i class="glyphicon glyphicon-open" data-toggle="modal" data-target="#viewClass"></i></a>
                                    <a hef="#" class="btn " value="Edit" id="action_btn" data-toggle="modal" data-target="#editClass"><i class="glyphicon glyphicon-pencil" ></i></a>
                                    <a class="btn" href='Subject/delete/<?php echo $class->class_id; ?>' id="action_btn"><i class="glyphicon glyphicon-trash"></i></a>
                                </td>
                            </tr>
                             <?php }?>
                        </tbody>

                    </table>
                   
                </div>

   
            </div>
            <!--CREATE CLASS MODAL-->
          <div class="modal fade" id="CreateClass" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                 aria-hidden="true" >
                <div class="modal-dialog" style="width:60%;">
                    <div class="modal-content">
                        <div class="modal-header" style="background-color:#521812;">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Edit Class</h4>
                        </div>
                        <div class="modal-body">
                            
                                        <table class="table">
                                            <tbody >
                                                <tr id="tableline">
                                                    <td class="col-md-2"><label >Class Code</label></td>
                                                    <td colspan="3"><input type="text" value="00001" class="col-md-12"disabled /></td>
                                                    <td  colspan="8"></td>
                                                </tr>
                                                <tr id="tableline">
                                                    <td><label>Subject</label></td>
                                                    <td colspan="3" >
                                                        <select class="col-md-12" >   <option value=""> Select Subject </option>
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
                                                    <td class="col-md-2"><label >Subject Decription</label></td>
                                                    <td colspan="11"><textarea class="col-md-12" /></textarea></td>
                                                    
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
                                                    <td class="col-md-2"><label>Teacher Name:</label></td>
                                                    <td colspan ="3">
                                                    <select class="form-control" id="inputemployee" name="user_id">
                                                        <?php foreach ($users as $user)
                                                            {
                                                            echo"<option value="; echo "'".$user->user_id."'"; echo">";  echo $user->first_name." ".$user->last_name;' </option>'; 
                                                            }
                                                        ?>
                                                    </select>
                                                    </td>
                                                    <td  colspan="6"></td>
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
            <!--END OF CREATE CLASS MODAL-->
            <!--VIEW STUDENT Class MODAL-->
            <div class="modal fade" id="viewClass" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                 aria-hidden="true" >
                <div class="modal-dialog" style="width:60%;">
                    <div class="modal-content">
                        <div class="modal-header" style="background-color:#521812;">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Edit Class</h4>
                        </div>
                        <div class="modal-body">
                            
                                        <table class="table" >
                                            <tbody >
                                                <tr id="tableline">
                                                    <td class="col-md-2"><label >Class Code</label></td>
                                                    <td colspan="3"><input type="text" value="00001" class="col-md-12"disabled /></td>
                                                    <td  colspan="8"></td>
                                                </tr>
                                                <tr id="tableline">
                                                    <td><label>Subject</label></td>
                                                    <td colspan="3" >
                                                          Math
                                                    </td>
                                                <td  colspan="6"></td>

                                                </tr>
                                                <tr id="tableline">
                                                    <td class="col-md-2"><label >Class Decription</label></td>
                                                    <td colspan="11">Basic Algebra</td>
                                                    
                                                </tr>
                                                <tr id="tableline">
                                                    <td><label>Level</label></td>
                                                    <td colspan="3" >
                                                        Grade 4
                                                    </td>
                                                <td  colspan="6"></td>

                                                </tr>
                                                <tr id="tableline">
                                                    <td class="col-md-2"><label>Teacher Name:</label></td>
                                                    <td colspan="3">Janmes</td>

                                                    <td colspan="3">Jordan</td>

                                                    <td colspan="3">Chan</td>
                                                </tr>
                                                <tr id="tableline">
                                                    <td class="col-md-2"><label >Capacity</label></td>
                                                    <td colspan="3">40</td>
                                                    <td  colspan="8"></td>
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
            <!--END OF VIEW CLASS MODAL-->
             <!--EDIT CLASS MODAL-->
            <div class="modal fade" id="editClass" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                 aria-hidden="true" >
                <div class="modal-dialog" style="width:60%;">
                    <div class="modal-content">
                        <div class="modal-header" style="background-color:#521812;">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Edit Class</h4>
                        </div>
                        <div class="modal-body">
                            
                                        <table class="table" >
                                            <tbody >
                                                <tr id="tableline">
                                                    <td class="col-md-2"><label >Class Code</label></td>
                                                    <td colspan="3"><input type="text" value="00001" class="col-md-12"disabled /></td>
                                                    <td  colspan="8"></td>
                                                </tr>
                                                <tr id="tableline">
                                                    <td><label>Subject</label></td>
                                                    <td colspan="3" >
                                                        <select class="col-md-12" >   <option value=""> Select Subject </option>
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
                                                    <td class="col-md-2"><label >Class Decription</label></td>
                                                    <td colspan="11"><textarea class="col-md-12" />Basic Algebra</textarea></td>
                                                    
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
                                                    <td class="col-md-2"><label>Teacher Name:</label></td>
                                                    <td colspan="3"><input id="first" type="text" placeholder="First" value="Janmes" class="col-md-12"><label for="first"></label></label></td>

                                                    <td colspan="3"><input id="middle" type="text" placeholder="Middle" class="col-md-12" value="Jordan"><label for="middle" ></label></td>

                                                    <td colspan="3"><input id="last" type="text" placeholder="Last" class="col-md-12" value="Chan"><label for="last" ></label></td>
                                                </tr>
                                                <tr id="tableline">
                                                    <td class="col-md-2"><label >Capacity</label></td>
                                                    <td colspan="3"><input type="number" class="col-md-12" value="40"/></td>
                                                    <td  colspan="8"></td>
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
            <!--END OF EDIT CLASS MODAL-->
            <?php  include($_SERVER['DOCUMENT_ROOT'].'/SMIS/application/views/scripts.php'); ?>
    </body>
</html>
<!-- <html lang="en">
<head>
    <meta charset="utf-8">
    <title>Class List</title>
</head>
<body>

<form method='post' action='Subject/create'>
    <button type="submit"> Add Class </button>
</button>
</form>
<div id="container" >
    <table class="table table-hover table-bordered table-responsive">
        <thead>
            
            <td>Name</td>
            <td>Description</td>
            <td>Year level</td>
            <td>Adviser</td>
            <td>Actions</td>
        </thead>
        <tbody>
            <?php foreach($class as $class)
                {?>
                <tr>
               
                <td><?php echo $class->name; ?></td>
                <td><?php echo $class->description; ?></td>
                <td><?php echo $class->year_level; ?></td>
                <td><?php echo $class->first_name." ".$class->last_name; ?></td>
                <td>
                    <form method='post' action='Subject/edit'>
                        <input type='hidden' name='class_id' value='<?php echo $class->class_id; ?>' />
                        <button type='submit'> Edit </button>
                    </form>

                    <form method='post' action='Subject/delete'>
                        <input type='hidden' name='class_id' value='<?php echo $class->class_id; ?>' />
                        <button type='submit'> Delete </button>
                    </form>
                </td>
                </tr>
            
            <?php }?>
        </tbody>
    </table>
<form method='post' action='Subject/create'>
    <button type="submit"> Add Classroom </button>
</button>
</form>
    <table class="table table-hover table-bordered table-responsive">
        <thead>

            <td>Section</td>
            <td>Year Level</td>
            <td>Capacity</td>
            <td>Actions</td>
        </thead>
        <tbody>
            <?php foreach($classrooms as $class)
                {?>
                <tr>
                
                <td><?php echo $class->section; ?></td>
                <td><?php echo $class->year_level; ?></td>
                <td><?php echo $class->capacity; ?></td>
                <td>
                    <form method='post' action='classroom/schedule_me'>
                        <input type='hidden' name='section' value='<?php echo $class->section; ?>' />
                        <button type='submit'> Edit </button>
                    </form>

                    <form method='post' action='classroom/delete'>
                        <input type='hidden' name='section' value='<?php echo $class->section; ?>' />
                        <button type='submit'> Delete </button>
                    </form>

                    <form method='post' action='classroom/schedule'>
                        <input type='hidden' name='section' value='<?php echo $class->section; ?>' />
                        <button type='submit'> Open </button>
                    </form>
                </td>
                </tr>
            
            <?php }?>
        </tbody>
    </table>
</div>

</body>
</html> -->