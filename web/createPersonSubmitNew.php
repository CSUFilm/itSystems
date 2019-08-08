<?php
$mysqli = mysqli_connect("137.148.137.10", "zak", "Bordy#58", "itSystems");
$displayBlock = "";

if (mysqli_connect_errno())
{
    $displayBlock .= "Connection Failed: " . mysqli_connect_error();
}
else
{
    $csuID = mysqli_real_escape_string($mysqli, "1234567");
    $firstName = mysqli_real_escape_string($mysqli, "Magnus");
    $lastName = mysqli_real_escape_string($mysqli, "Viking");
    $phone = mysqli_real_escape_string($mysqli,"2165558453");
    $email = mysqli_real_escape_string($mysqli, "m.viking@vikes.csuohio.edu");

    $personInsertQuery = "INSERT INTO users (csuID, firstName, lastName, phone, email) VALUES ('".$csuID."', '".$firstName."', '".$lastName."', '".$phone."', '".$email"')";
    $personInsertResult = mysqli_query($mysqli, $personInsertQuery) or die(mysqli_error($mysqli));

    if ($personInsertResult === TRUE)
    {
        $displayBlock .= "Insert Successful";
    }
    else
    {
        $displayBlock .= "Insert Failed";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Person Submit</title>
</head>
<body>
    <?php echo $displayBlock; ?>
</body>
</html>