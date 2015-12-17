<html>

<head>
   <meta http-equiv="content-type" content="text/html; charset=UTF-8">
   <meta charset="utf-8">
   <title>Heffy</title>
<?php  include($_SERVER['DOCUMENT_ROOT'].'/SMIS/application/views/header.php'); ?>
</head>
<body>
<?php  include($_SERVER['DOCUMENT_ROOT'].'/SMIS/application/views/navbar.php'); ?>
<div class="col-sm-8 col-sm-offset-3 col-md-8 col-md-offset-3" style="top:50;">
    <div class="form-group">
        <h4 style="float:left;">Setting</h4>
        <div class="input-group col-md-4" style="float:right;">
            <input class="form-control" type="text" placeholder="Search"/><span class="input-group-btn"><button class="btn" id="action_btn"><i class="glyphicon glyphicon-search"></i></button></span>
        </div>




        <table class="table ">
            <tbody>
                <thead >
                    <th ></th>
                    
                    <th colspan="2">Tuition</th>
                    <th><a href="#"  class="btn btn-success" >Add/Edit Year Level</a></th>
                </thead>
                <?php foreach($fee as $fee)
                {?>
                <tr>
                    <td ><?php echo $fee->year_level; ?></td>
                    
                    <td colspan="2" >
                        <div class="input-group">
                        <span class="input-group-addon" style="background-color:#ded17d;color:black;">P</span>
                        <input class="form-control" type="number" value='<?php echo $fee->fee; ?>' disabled>
                        </div>
                    </td>
                    <td id="action_size">
                        <a hef="#" class="btn " value="Edit" id="action_btn" data-toggle="modal" data-target="#edit_grade"><i class="glyphicon glyphicon-pencil" ></i></a>
                        <a class="btn" value="" id="action_btn"><i class="glyphicon glyphicon-trash"></i></a>
                    </td>
                </tr>
                <?php }?>
            </tbody>
        </table>
                 <table class="table ">
            <tbody>
                <thead >
                    <th >Book Title</th>
                    <th> Author </th>
                    <th> Edition </th>
                    <th >Estimated Total Amount</th>
                    
                    <th style='text-align:right;'><a href="#"  class="btn btn-success"  data-toggle="modal" data-target="#add_booklist"><i class="glyphicon glyphicon-plus"></i> Create Book</a></th>
                </thead>
                <?php foreach($books as $book)
                {?> 
                <tr>
                    <td ><?php echo $book->title; ?></td>
                    <td><?php echo $book->author; ?></td>
                    <td><?php echo $book->edition; ?></td>
                    <td>
                        <?php echo $book->price; ?>
                    </td>
                 
                    <td id="action_size">
                        <a hef="#" class="btn " value="Edit" id="action_btn" data-toggle="modal" data-target="#edit_booklist"><i class="glyphicon glyphicon-pencil" ></i></a>
                        <a class="btn" value="" id="action_btn"><i class="glyphicon glyphicon-trash"></i></a>
                    </td>
                </tr>
                <?php }?>
                
               
            </tbody>
        </table>    
    </div>
    <!--MODAL-->
    <div class="modal fade" id="edit_grade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true" >
        <div class="modal-dialog" style="width:60%;">
            <div class="modal-content">
                <div class="modal-header" style="background-color:#521812;">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Year Level</h4>
                </div>
                <div class="modal-body">
                    
                    <table class="table" >
                        <thead>
                            <thead>
                                <th></th>
                                <th>Subjects</th>
                                <th>Books/Materials </th>
                                <th>Amount</th>
                                <th id="action_size"><a href="#"  class="btn btn-success" >Add Subject</a></th>
                            </thead>
                        </thead>
                        <tbody >
                            <tr>
                                <td id="action_size"><input type="checkbox"/></td>
                                <td >English</td>
                                <td>Introduction to English </td>
                                <td>##,###</td>
                                <td id="action_size"><a hef="#" class="btn " value="Edit" id="action_btn" ><i class="glyphicon glyphicon-pencil" ></i></a>
                                <a class="btn" value="" id="action_btn"><i class="glyphicon glyphicon-trash"></i></a>
                                </td>
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
    <!--END OF MODAL-->
     <!--MODAL CREATE BOOKLIST-->
    <div class="modal fade" id="add_booklist" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true" >
        <div class="modal-dialog" style="width:60%;">
            <div class="modal-content">
                <form method='post' action='add_book'>
                    <div class="modal-header" style="background-color:#521812;">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Create Booklist</h4>
                    </div>
                    <div class="modal-body">
                        <table class="table" >
                            <tbody>
                                <tr>
                                    <td ><label>Subject/Level</label></td>
                                    <td colspan="3"> 
                                        <select class="form-control" name='class_id'>   
                                            <option value=""> Select Level </option>
                                              <?php foreach($subject as $class)
                                              {?>
                                              <option value='<?php echo $class->class_id;?>'> <?php echo $class->name; ?>/<?php echo $class->year_level; ?> </option>
                                               <?php  }?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td><label>Book Title</label></td>
                                    <td  colspan="3"><input class="form-control" type="text" name='title'></td>

                                </tr>
                                <tr>
                                    <td><label>Author</label></td>
                                    <td  colspan="3"><input class="form-control" type="text" name='author'></td>
                                </tr>
                                <tr>
                                    <td><label>Edition</label></td>
                                    <td  colspan="3"><input class="form-control" type="text" name='edition'></td>
                                </tr>
                                 <tr>
                                    <td><label>Amount</label></td>
                                    <td  colspan="3"> 
                                        <div class="input-group">
                                            <span class="input-group-addon" style="background-color:#ded17d;color:black;">P</span>            
                                            <input class="form-control" type="number" name='price'>
                                        </div>
                                    </td>
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
    <!--END OF MODAL-->
     <!--MODA CREATE BOOKLIST-->
    <div class="modal fade" id="edit_booklist" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true" >
        <div class="modal-dialog" style="width:60%;">
            <div class="modal-content">
                <div class="modal-header" style="background-color:#521812;">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Edit Booklist</h4>
                </div>
                <div class="modal-body">
                    
                    <table class="table" >
                        <tbody >
                             <tr>
                                <td ><label>Level</label></td>
                                <td colspan="3"> <select class="form-control">   <option value=""> Select Level </option>
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
                                                        </select></td>
                            </tr>
                            <tr>
                                <td><label>Book Title</label></td>
                                <td  colspan="3"><input class="form-control" type="text"></td>

                            </tr>
                            <tr>
                                <td><label>Subject</label></td>
                                <td  colspan="3"><input class="form-control" type="text"></td>

                            </tr>
                             <tr>
                                <td><label>Amount</label></td>
                                <td  colspan="3"> <div class="input-group">
                                            <span class="input-group-addon" style="background-color:#ded17d;color:black;">P</span>
                                                
                                            <input class="form-control" type="number">
                                                
                                      
                                    </div>
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
    <!--END OF MODAL-->
</div>



<?php  include($_SERVER['DOCUMENT_ROOT'].'/SMIS/application/views/scripts.php'); ?>


           
</body>



</html>