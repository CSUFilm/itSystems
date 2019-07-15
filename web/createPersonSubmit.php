<?php
/*
 * Cleveland State University
 * School of Film & Media Arts
 *
 * IT Management System
 * Submit New Person
 *
 * createPersonSubmit.php
 *
 * V. 0.1
 * 11 July 2019
 * Zachary Kascak
 */

session_start();

// Required Scripts
require "config.php";

// Variable Declarations
$displayBlock = "";
$csuID = $_POST['csuID'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$phone = $_POST['phone'];

// Checking for Little Bobby Tables
$cleanCSUID = mysqli_real_escape_string($selectMySQL, $csuID);
$cleanFirstName = mysqli_real_escape_string($selectMySQL, $firstName);
$cleanLastName = mysqli_real_escape_string($selectMySQL, $lastName);
$cleanEmail = mysqli_real_escape_string($selectMySQL, $email);
$cleanPhone = mysqli_real_escape_string($selectMySQL, $phone);

// Start MySQL Transaction
mysqli_autocommit($userInsertMySQL, FALSE);

$personCreateQuery = "INSERT INTO itSystems.users (csuID, firstName, lastName, phone, email) VALUES ('".$cleanCSUID."', '".$cleanFirstName."', '".$cleanLastName."', '".$cleanEmail."', '".$cleanPhone."')";
$personCreateResult = mysqli($userInsertMySQL, $personCreateQuery) or die ($userInsertMySQL);

// Retrive new person IT ID from DB
$itID = mysqli_insert_id($userInsertMySQL);

// Test person insert
$testNewPersonQuery = "SELECT * WHERE itID = ('".$itID."')";
$testNewPersonResult = mysqli($selectMySQL, $testNewPersonQuery);
$testNewPersonArray = mysqli_fetch_all($testNewPersonResult);
mysqli_close($selectMySQL);

$arrayCount = count($testNewPersonArray);
if ($arrayCount < 1 || $arraycount > 1)
{
    mysqli_rollback($userInsertMySQL);
    mysqli_close($userInsertMySQL);
    $displayBlock .= "Error 3: SQL Error. Please contact a system administrator.";
}
else
{
    mysqli_commit($userInsertMySQL);
    mysqli_close($userInsertMySQL);
    header("Location: home.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FMA IT Systems||Create New Person</title>
</head>
<body>
    <?php echo $displayBlock; ?>
</body>
</html>