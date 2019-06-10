/*
 *  Cleveland State University
 *  School of Film and Media Arts
 * 
 *  IT Management System
 *  People Nav Menu Script
 * 
 *  peopleMenu.js
 * 
 *  v0.1
 *  10 June 2019
 *  Zachary Kascak
 */
var menuNode = document.getElementById("peopleMenu");
var spacerNode = document.createTextNode(" | ");

var createPersonNode = document.createElement("A");
createPersonNode.setAttribute("href", "createPerson.html");
createPersonNode.innerHTML = "Create Person";
menuNode.appendChild(createPersonNode);

menuNode.appendChild(spacerNode);