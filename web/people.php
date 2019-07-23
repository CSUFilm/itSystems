<?php
/*
 * Cleveland State University
 * School of Film & Media Arts
 *
 * IT Management System
 * People Navigation Page
 *
 * people.php
 *
 * V. 0.1
 * 15 July 2019
 * Zachary Kascak
 */

session_start();

// Required Scripts
require "navMenu.php";

// Variable Declaration
$displayBlock = "";

$displayBlock .=  "
<br />
" . $navMenu_DisplayBlock . "
<br />
<br />
<a href=\"createPerson.php\">Crete New Person</a>
<a href=\"makeUser.php\">Make Person User</a>
";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FMA IT Systems||People Management</title>
</head>
<body>
    <h1 id="title">People Management</h1>
    <?php echo $displayBlock ?>
</body>
</html>