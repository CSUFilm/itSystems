<?php
/*
 *  Cleveland State University
 *  School of Film and Media Arts
 * 
 *  IT Management System (WEB)
 *  Index Page
 * 
 *  index.html
 * 
 *  v0.1
 *  21 June 2019
 *  Zachary Kascak
 */

 require "navMenu.php";

 $displayBlock;

?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>FMA IT System</title>
        <link rel="stylesheet" href="baseStyle.css">
    </head>
    <body>
        <h1 id="title">FMA IT System</h1>
        <?php echo "$navMenu_DisplayBlock"?>
    </body>
</html>