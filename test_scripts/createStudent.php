<?php
/*
 *  Cleveland State University
 *  School of Film and Media Arts
 * 
 *  IT Systems Create Student
 * 
 *  createSutdent.php
 * 
 *  v0.1
 *  11 March 2019
 *  Zachary Kascak
 */

 $mysqli = mysqli_connect("ip.address.com", "userName", "password". "database");

 if (mysqli_connect_errno()) {
     printf("Connection Failed: %s\n", mysqli_connect_error());
     exit();
 } else {
     printf("Host Information: %s\n". mysqli_get_host_info($mysqli));
 }
 ?>