/*
 *  Cleveland State University
 *  School of Film and Media Arts
 * 
 *  IT Management System
 *  Verify Person Script
 * 
 *  VerifyPerson.js
 * 
 *  v0.1
 *  11 June 2019
 *  Zachary Kascak
 */

/*var csuID = document.forms["personForm"]["csuID"];
var firstName = document.forms["personForm"]["firstName"];
var lastName = document.forms["personForm"]["lastName"];
var email = document.forms["personForm"]["email"];
var phone = document.forms["perosnForm"]["phone"];*/

var displayNode = document.getElementById("formResults");

var csuIDNode = document.createElement("P");
csuIDNode.innerText("CSU ID: ");
displayNode.appendChild(csuIDNode);