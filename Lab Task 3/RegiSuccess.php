<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration Success Page</title>
</head>
<body>
<center>
	<fieldset>
<?php
	session_start();
	if(isset($_SESSION['fname'])&&
			isset($_SESSION['lname'])&&
			isset($_SESSION['cname']) &&
			isset($_SESSION['address1']) &&
			isset($_SESSION['address2']) &&
			isset($_SESSION['city']) &&
			//isset($_SESSION['zip']) &&
            isset($_SESSION['phone']) &&
            isset($_SESSION['fax']) &&
            isset($_SESSION['email']) &&
            isset($_SESSION['radio1']) &&
            isset($_SESSION['radio2']) &&
            isset($_SESSION['radio3']) &&
            isset($_SESSION['radio4']) &&
            isset($_SESSION['radio5']) &&
            isset($_SESSION['radio6']) &&
            isset($_SESSION['amount']) &&
            isset($_SESSION['recurring']) &&
            isset($_SESSION['monthcr']) &&
            isset($_SESSION['monthcr2']) &&
            isset($_SESSION['radio7']) &&
            isset($_SESSION['radio8']) &&
            isset($_SESSION['name']) &&
            isset($_SESSION['ack']) &&
            isset($_SESSION['address']) &&
            isset($_SESSION['city1']) &&
            //isset($_SESSION['zip1']) &&
            isset($_SESSION['name2']) &&
            isset($_SESSION['iwould']) &&
            isset($_SESSION['giftprogram']) &&
            isset($_SESSION['pleasesave']) &&
            isset($_SESSION['textarea']) &&
            isset($_SESSION['email1']) &&
            isset($_SESSION['telephone']) &&
            isset($_SESSION['fax1']) &&
            isset($_SESSION['email2']) &&
            isset($_SESSION['iwould1']) 
	)
	{
		echo "First Name:".$_SESSION['fname'];
		echo "<br>";
		echo "Last Name:".$_SESSION['lname'];
		echo "<br>";
		echo "Company:".$_SESSION['cname'];
		echo "<br>";
		echo "Address1:".$_SESSION['address1'];
		echo "<br>";
		echo "Address2:".$_SESSION['address2'];
		echo "<br>";
		echo "City:".$_SESSION['city'];
		echo "<br>";
		echo "Zip Code:".$_SESSION['zip'];
		echo "<br>";
		echo "Phone Number:".$_SESSION['phone'];
		echo "<br>";
		echo "Fax:".$_SESSION['fax'];
		echo "<br>";
		echo "Email Address:".$_SESSION['email'];
		echo "<br>";
		echo "Donation Amount:".$_SESSION['radio1'];
		echo "<br>";
        echo "Donation Amount:".$_SESSION['radio2'];
		echo "<br>";
		echo "Donation Amount:".$_SESSION['radio3'];
		echo "<br>";
		echo "Donation Amount:".$_SESSION['radio4'];
		echo "<br>";
		echo "Donation Amount:".$_SESSION['radio5'];
		echo "<br>";
		echo "Donation Amount:".$_SESSION['radio6'];
		echo "<br>";
		echo "Other Amount:".$_SESSION['amount'];
		echo "<br>";
		echo "Recurring Donation:".$_SESSION['recurring'];
		echo "<br>";
		echo "Monthly Credit Card Amount:".$_SESSION['monthcr'];
		echo "<br>";
		echo "Monthly Credit Card Amount in Months:".$_SESSION['monthcr2'];
		echo "<br>";
		echo "To Honor:".$_SESSION['radio7'];
		echo "<br>";
		echo "In Memory Of:".$_SESSION['radio8'];
		echo "<br>";
		echo "Name:".$_SESSION['name'];
		echo "<br>";
		echo "Acknowledge Donation To:".$_SESSION['ack'];
		echo "<br>";
		echo "Address:".$_SESSION['address'];
		echo "<br>";
		echo "City:".$_SESSION['city1'];
		echo "<br>";
		echo "Zip Code:".$_SESSION['zip1'];
		echo "<br>";
		echo "Company Name:".$_SESSION['name2'];
		echo "<br>";
		echo "Anonymous Donation:".$_SESSION['iwould'];
		echo "<br>";
		echo "Gift To:".$_SESSION['giftprogram'];
		echo "<br>";
		echo "Savings:".$_SESSION['pleasesave'];
		echo "<br>";
		echo "Comments:".$_SESSION['textarea'];
		echo "<br>";
		echo "How may we contact:".$_SESSION['email1'];
		echo "<br>";
		echo "Postal Mail:".$_SESSION['postalmail'];
		echo "<br>";
		echo "Telephone Number:".$_SESSION['telephone'];
		echo "<br>";
		echo "Fax:".$_SESSION['fax1'];
		echo "<br>";
		echo "Way of Receiving Notification:".$_SESSION['email2'];
		echo "<br>";
		echo "Postal Mail:".$_SESSION['postalmail1'];
		echo "<br>";
		echo "Volunteering Information:".$_SESSION['iwould1'];
		echo "<br>";
		echo "<a href='Login.php'>Okay</a>";
	}
?>
	</fieldset>
</center>
</body>
</html>