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
  First Name: <input type=\"text\" name=\"firstName\" reuired />
  Last Name: <input type=\"text\" name=\"lastName\" required />
  email: <input type=\"email\" name=\"email\" required />
  Phone: <input type=\"tel\" name=\"phone\" required />
  <input type=\"submit\" value=\"submit\" required />
</form>";
?>