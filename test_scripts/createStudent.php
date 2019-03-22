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

 if (mysqli_connect_errno()) {
     printf("Connection Failed: %s\n", mysqli_connect_error());
     exit();
 } else {
     printf("Host Information: %s\n", mysqli_get_host_info($mysqli));
 }
 ?>