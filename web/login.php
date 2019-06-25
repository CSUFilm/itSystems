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

// Start user session
session_start();

// Required scripts
require "config.php";

// Variable Declaration
$displayBlock = "";
$loginFormBlock = "<form action=\"login.php\" method=\"post\">
CSU ID: <input type=\"text\" name=\"csuID\" id=\"csuID\">
<input type=\"submit\" value=\"Login\">
</form>";
$userNotFoundBlock = "User not found.
<br>
<br>" . $loginFormBlock;

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

//Validate POST Data
if ($csuID == "") {
    $displayBlock = "No username entered. Please enter a username to login.
    <br>
    <br>" . $loginFormBlock;
} else {
    // Sanitize POST data
    $csuIDClean = mysqli_real_escape_string($selectMySQL, $csuID);
    $_SESSION["csuID"] = $csuIDClean;

    // Select data from DB
    $csuIDSelect = "SELECT itID FROM itSystems.users WHERE csuID = ('".$csuIDClean."')  ";
    $csuIDResult = mysqli_query($selectMySQL, $csuIDSelect);

    // Test results
    if (mysqli_num_rows($csuIDResult) < 1) {
        $displayBlock = $userNotFoundBlock;
    } else if (mysqli_num_rows($csuIDResult) > 1) {
        $displayBlock = "Error #1. Contact a system administrator.";
    } else {
        $displayBlock = "User Found.";
        while ($row = mysqli_fetch_assoc($csuIDResult)) {
            $itID = $row["itID"];
        }
        mysqli_free_result($csuIDResult);

        $_SESSION["itID"] = $itID;

        /*
        $displayBlock .= "
        <br>
        <br>
        itID: " . $itID;
        */

        $employeeSelect = "SELECT * FROM itSystems.employees WHERE itID = ('".$itID."')";
        $employeeResult = mysqli_query($selectMySQL, $employeeSelect);
        if (mysqli_num_rows($employeeResult) < 1) {
            $displayBlock = $userNotFoundBlock;
        } else if (mysqli_num_rows($employeeResult) > 1) {
            $displayBlock = "Error #1. Contact a system administrator.";
        } else {
            while ($row = mysqli_fetch_assoc($employeeResult)){
                $labTech = $row["labTech"];
                $cageTech = $row["cageTech"];
                $admin = $row["admin"];
                $staff = $row["staff"];
                $student = $row["student"];
            }
            mysqli_free_result($employeeResult);
            $_SESSION["labTech"] = $labTech;
            $_SESSION["cageTech"] = $cageTech;
            $_SESSION["admin"] = $admin;
            $_SESSION["staff"] = $staff;
            $_SESSION["student"] = $student;

            /*Test results
            $displayBlock = "
            <table>
                <tr>
                    <td>CSU ID</td><td>IT ID</td><td>Lab Tech</td><td>Cage Tech</td><td>Admin</td><td>Staff</td><td>Student</td>
                </tr>
                <tr>
                    <td>" . $_SESSION["csuID"] . "</td><td>" . $_SESSION["itID"] . "</td><td>" . $_SESSION["labTech"] . "</td><td>" . $_SESSION["cageTech"] . "</td><td>" . $_SESSION["admin"] . "</td><td>" . $_SESSION["staff"] . "</td><td>" . $_SESSION["student"] . "</td>
                </tr>
            </table>";*/

            header('Location: home.php');
        }
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