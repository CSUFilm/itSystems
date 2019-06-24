<?php
/*
 *  Cleveland State University
 *  School of Film and Media Arts
 * 
 *  IT Management System
 *  Login Script
 * 
 *  login.php
 * 
 *  v0.1
 *  24 June 2019
 *  Zachary Kascak
 */
session_start();

require "config.php";

$displayBlock = "";

/* 
*****Connection Test*****

if (mysqli_connect_errno()) {
    $displayBlock = "connection failed <br>" . mysqli_connect_error();
} else {
    $displayBlock = "Connected to :" . mysqli_get_host_info($selectMySQL);
    mysqli_close($selectMySQL);
}
*/

// Save POST data as variable
$csuID = $_POST['csuID'];

// Sanitize POST data
$csuIDClean = mysqli_real_escape_string($selectMySQL, $csuID);

// Select data from DB
$csuIDSelect = "SELECT itID FROM itSystems.users WHERE csuID = ('".$csuIDClean."')";

$csuIDResult = mysqli_query($selectMySQL, $csuIDSelect);

// Test data
if ($csuIDResult == null) {
    $displayBlock = "Invalid CSU ID";
} else {
    // Test for employee status
    $employeeSelect = "SELECT labTech FROM itSystems.employees WHERE itID = ('".$csuIDResult."')";
    $employeeResult = mysqli_query($selectMySQL, $employeeSelect);
    if ($employeeResult == 0) {
        $displayBlock = "Invalid CSU ID";
    } else {
        $_SESSION["itID"] = $csuIDResult;
        header('Location: home.php');
        exit;
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <title>FMA Login</title>
    </head>
    <body>
        <?php echo "$displayBlock"; ?>
    </body>
</html>