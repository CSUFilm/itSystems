<?php
/*
 * Cleveland State University
 * School of Film & Media Arts
 *
 * IT Management System
 * Create New User
 *
 * createUser.php
 *
 * V. 0.1
 * 8 July 2019
 * Zachary Kascak
 */

session_start();

// Required Scripts
require "config.php";
require "navMenu.php";

// Declare Variables
$displayBlock = "";

$displayBlock .= $navMenu_DisplayBlock . "
<br />
<br />
<h2>Create New User</h2>
<br />
<form action=\"createUserSubmit.php\" method=\"post\">
  CSU ID: <input type=\"tel\" name=\"csuID\" required />
  First Name: <input type=\"text\" name=\"firstName\" reuired />
  Last Name: <input type=\"text\" name=\"lastName\" required />
  email: <input type=\"email\" name=\"email\" required />
  Phone: <input type=\"tel\" name=\"phone\" required />
  <input type=\"submit\" value=\"submit\" required />
</form>
";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FMA IT Systems||Create User</title>
</head>
<body>
    
</body>
</html>