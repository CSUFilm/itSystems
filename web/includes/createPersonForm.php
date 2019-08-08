<?php
/*
 * Cleveland State University
 * School of Film & Media Arts
 *
 * IT Management System
 * Create Person Form Script
 *
 * createPersonForm.php
 *
 * V. 0.1
 * 19 July 2019
 * Zachary Kascak
 */

 $createPersonForm_DisplayBlock = "
 <form action=\"createPersonSubmit.php\" method=\"post\">
  CSU ID: <input type=\"tel\" name=\"csuID\" required />
  <br />
  First Name: <input type=\"text\" name=\"firstName\" reuired />
  <br />
  Last Name: <input type=\"text\" name=\"lastName\" required />
  <br />
  email: <input type=\"email\" name=\"email\" required />
  <br />
  Phone: <input type=\"tel\" name=\"phone\" required />
  <br />
  <input type=\"submit\" value=\"submit\" required />
</form>";
?>