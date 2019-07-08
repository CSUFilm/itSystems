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

 $displayBlock = $navMenu_DisplayBlock;

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
        <!--
            nav menu
            <?php echo "$navMenu_DisplayBlock";?>
        -->
        <div>
            <br>
            <br>
            Please Login:
            <form action="login.php" method="post">
                CSU ID: <input type="text" name="csuID" id="csuID" />
                Password: <input type="password" name="password" />
                <input type="submit" value="Login">
            </form>
        </div>
    </body>
</html>