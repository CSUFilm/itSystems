<?php
/*
 *  Cleveland State University
 *  School of Film and Media Arts
 * 
 *  IT Systems Create Student
 * 
 *  createSutdent.php
 * 
 *  v0.2
 *  22 March 2019
 *  Zachary Kascak
 */

 include 'config.php';

$displayBlock;

/*
 if (mysqli_connect_errno()) {
     $displayBlock = "Connection Failed!";
     exit();
 } else {
     $displayBlock = "Connection Successful!";
 }
 */
// layout form

?>

<!DOCTYPE html>
<html>
    <head>
        <title>FMA IT||Facility Management System</title>
    </head>
    <body>
        <h1>Create Students</h1>
        <?php echo "$displayBlock";?>
    </body>
</html>
