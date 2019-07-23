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
require "/includes/createPersonForm.php";

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

// Check for CSU ID
$csuIDSelectQuery = "SELECT * FROM users WHERE csuID = ('".$cleanCSUID."')";
$csuIDSelectResults = mysqli_query($selectMySQL, $csuIDSelectQuery);
$csuIDSelectNumRows = mysqli_num_rows($selectMySQL, $csuIDSelectResults);
if ($csuIDSelectNumRows > 0){
    $displayBlock .= "
    <br />
    <br />
    Please Check CSU ID Number, Number already exists in database.
    <br />
    ". $createPersonForm_DisplayBlock;
}
else
{
    // Start MySQL Transaction
    mysqli_autocommit($userInsertMySQL, FALSE);
    mysqli_begin_transaction($userInsertMySQL);

    // Create and run query
    $personCreateQuery = "INSERT INTO itSystems.users (csuID, firstName, lastName,  phone, email) VALUES ('".$cleanCSUID."', '".$cleanFirstName."',  '".$cleanLastName."', '".$cleanEmail."', '".$cleanPhone."')";
    $personCreateResult = mysqli($userInsertMySQL, $personCreateQuery) or die   ($userInsertMySQL);

    // Retrive new person IT ID from DB
    $itID = mysqli_insert_id($userInsertMySQL);

    // Test person insert
    $testNewPersonQuery = "SELECT * WHERE itID = ('".$itID."')";
    $testNewPersonResult = mysqli($selectMySQL, $testNewPersonQuery);
    $testNewPersonArray = mysqli_fetch_all($testNewPersonResult);
    mysqli_close($selectMySQL);

    $testNewPersonNumRows = mysqli_num_rows($testNewPersonArray);
    if ($testNewPersonNumRows < 1 || $testNewPersonNumRows > 1)
    {
        mysqli_rollback($userInsertMySQL);
        mysqli_close($userInsertMySQL);
        $displayBlock .= "Error 3: SQL Error. Please contact a system   administrator.";
    }
    else if ($testNewPersonArray['csuID'] === $cleanCSUID && $testNewPersonArray['firstName'] === $cleanFirstName && $testNewPersonArray['lastName'] === $cleanLastName && $testNewPersonArray['email'] === $cleanEmail && $testNewPersonArray['phone'] === $cleanPhone)
    {
        mysqli_commit($userInsertMySQL);
        mysqli_close($userInsertMySQL);
        header("Location: home.php");
    }
    else
    {
        mysqli_rollback($userInsertMySQL);
        mysqli_close($userInsertMySQL);
        $displayBlock .= "Error 4: Insert Error. Please contact system administrator and try again.
        <br />
        <br />
        " . $createPersonForm_DisplayBlock;
    }
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