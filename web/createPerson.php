<?php
/*
 * Cleveland State University
 * School of Film & Media Arts
 *
 * IT Management System
 * Create New Person
 *
 * createPerson.php
 *
 * V. 0.1.1
 * 23 July 2019
 * Zachary Kascak
 */

session_start();

// Required Scripts
require "config.php";
require "navMenu.php";
require "includes/createPersonForm.php";

// Declare Variables
$displayBlock = "";

$displayBlock .= $navMenu_DisplayBlock . "<br /><br />" . $createPersonForm_DisplayBlock;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FMA IT Systems||Create User</title>
    <link rel="stylesheet" href="baseStyle.css" />
</head>
<body>
    <?php echo $displayBlock; ?>
</body>
</html>