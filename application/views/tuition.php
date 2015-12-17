<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html>
<head>
	<meta charset="utf-8">
	<title>Add Tuition</title>
 <?php include($_SERVER['DOCUMENT_ROOT'].'/SMIS/application/views/header.php'); ?>
    <style type="text/css">
    #action_btn
    {
        margin-left: 10px;
       width: 100px;
       margin-bottom: 5px;
       background-color: #ded17d;
       color: #000000;
       border-radius: 0px;

    }
    th, td
    {
        width: 100px;
        text-align: center;
    }
    th
    {
        background-color: #521812;
        color: #ffffff;
    }
    li{
        color: black;
    }
    table
    {
        position: relative;
    }
    .dropdown-menu
    {
        margin-right: -20px;

    }
    .dropdown
    {
        padding-right: 0px;
    }
    .main-menu
    {
        top:0;
        background-color: #521812;
       color: #000000;
    }
    .main-menu>ul.logout
    {
        position: absolute;
        left: 0;
        bottom: 0;
    }
  
    </style>
    </head>
    <body>
       
<?php  include($_SERVER['DOCUMENT_ROOT'].'/SMIS/application/views/navbar.php'); ?>
            
   <div>
    <div class="col-md-8 col-md-offset-3" >
            <div class="bs-docs-section row">
                <div >
                    <div class="page-header">
                        <h4 id="forms">Create Tuition</h4>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-lg-8" >
                        <div class=" bs-component">
                            <form method='post' action='add_tuition'>
                                <table class="table form-control">
                                    <tbody>
                                        <tr>
                                            <td ><label >Tuition Code</label></td>
                                            <td ><input type="text" value="00001" style="width:220px;"disabled/></td>
                                            <td  colspan="6"></td>

                                        </tr>
                                       
                                        <tr>
                                            <td id="td1"><label>Grade</label></td>
                                            <td><select style="width:220px;" name="year_level">   <option value=""> Select Grade </option>
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
                                             <td  colspan="6"></td>
                                        </tr>   
                                        <tr>
                                            <td ><label >Amount</label></td>
                                            <td ><input type="text" name='fee'style="width:220px;"/></td>
                                            <td  colspan="6"></td>

                                        </tr>
                                        
                                
                                    </tbody>

                                </table>
                              
                                 <button type="submit" class="btn btn-success "algin="right" >Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
   </div>
    <?php  include($_SERVER['DOCUMENT_ROOT'].'/SMIS/application/views/scripts.php'); ?>
    </body>



</html>
<!-- <body>

<div id="container" >
	<form method='post' action='add_tuition'>
		<label>Year Level: </label>

		<select class="form-control"  name="year_level">
                        <option disabled value='------'></option>
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
        <br>
		<label>Tuition Fee: </label><input type="text" name='fee'></input>
		<br>
		<button type="submit">Submit</button>
	</form>

</div>

</body>
</html> -->