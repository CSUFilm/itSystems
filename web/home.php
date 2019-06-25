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
require "navMenu.php";

$displayBlock = "";

$itID = $_SESSION["itID"];

$displayBlock .= $navMenu_DisplayBlock;

$displayBlock .= "
<br>
<br>
IT ID: " . $itID;
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <title>FMA IT Management System</title>
    </head>
    <body>
        <div id="title">
            <h1>Home</h1>
        </div>
        <hr>
        <?php echo $displayBlock; ?>
    </body>
</html>