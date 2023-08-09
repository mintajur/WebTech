<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DisplayPage</title>
</head>
<body>
    <center>
    <h1>You have Inserted</h1>
    </center>
</body>
</html>

<center>
<?php

$first_name = $_POST['fname']; 
$last_name = $_POST['lname'];
$CountryName = $_POST['country'];
$EmailId = $_POST['email'];

echo $first_name. "<br>"; 
echo $last_name. "<br>"; 
echo $CountryName. "<br>"; 
echo $EmailId. "<br>"; 

?>
</center>