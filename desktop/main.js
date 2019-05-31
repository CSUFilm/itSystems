/*
 *  Cleveland State University
 *  School of Film and Media Arts
 * 
 *  IT Management System
 *  Main JavaScript
 * 
 *  main.js
 * 
 *  v0.1
 *  29 May 2019
 *  Zachary Kascak
 */

 const { app, BrowserWindow } = require('electron')

 function createWindow () {
     // Create the browser window.
     let win = new BrowserWindow({
         width: 800,
         height: 600,
         webPreferences: {
             nodeIntegration: true
         }
     })

     //and load the index.html of the app.
     win.loadFile('index.html')

     //Emitted when the window is closed
     win.on('closed', () => {
         win === null
     })
 }

 app.on('ready', createWindow)

 //Quit when al windows are closed.
 app.on('window-all-closed', () => {
     if (process.platform !== 'darwin') {
         app.quit()
     }
 })