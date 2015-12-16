<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
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
</html>