/*
 *  Cleveland State University
 *  School of Film and Media Arts
 * 
 *  IT Management System
 *  Base Stylesheet
 * 
 *  baseStyle.css
 * 
 *  v0.1
 *  31 May 2019
 *  Zachary Kascak
 */
var menuNode = document.getElementById("navMenu");
var spacerNode = document.createTextNode(" | ");

var homeNode = document.createElement("A");
homeNode.setAttribute("href", "index.html");
homeNode.innerHTML = "Home";
menuNode.appendChild(homeNode);

menuNode.appendChild(spacerNode);

var peopleNode = document.createElement("A");
peopleNode.setAttribute("href", "people.html");
peopleNode.innerHTML = "People";
menuNode.appendChild(peopleNode);

menuNode.appendChild(spacerNode);

var ticketNode = document.createElement("A");
ticketNode.setAttribute("href", "https://dvcomm.on.spiceworks.com");
ticketNode.innerHTML = "HD Tickets",
menuNode.appendChild(ticketNode);

menuNode.appendChild(spacerNode);

var theiAssistNode = document.createElement("a");
theiAssistNode.setAttribute("href", "https://filmschool.csuohio.edu");
theiAssistNode.innerHTML = "TheiAssist";
menuNode.appendChild(theiAssistNode);
