<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Page</title>
	</head>
<body>
<img src="Alpha.PNG" alt="clinic logo" height="110">
<h1>Alpha Clinic Center</h1>
<br>
<br>
<center>
<fieldset>
    <br>
    <br>
    <br>
		<legend><i>Login Page</i></legend>
		<form action="validate.php" method="post">
        <div class="login-box">
            <h1>Login</h1>
 
            <div class="textbox">
                <i class="fa fa-user" aria-hidden="true"></i>
                <input type="text" placeholder="Username"
                         name="username" value="">
            </div>
 
            <div class="textbox">
                <i class="fa fa-lock" aria-hidden="true"></i>
                <input type="password" placeholder="Password"
                         name="password" value="">
            </div>
 
            <input class="button" type="submit"
                     name="login" value="Sign In">
        </div>
    </form>
    <br>
    <br>
    <br>
	</fieldset>

        
</center>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<hr>
<pre><h1> Alpha Clinic Center        Contact Us               Emergency?          Social Media        Carrer Opportunity</h1></pre>
    <pre><h3>  plot 05, Road 11, Purbachal                   Email: alphaclinic@gmail.com               +880-1783753302                   Facebook:                         Job Openings</h3></pre>
    <pre><h3>  Dhaka 1212, Bangladesh                        Phone Number: +880-1783653302                                                Linkedin:</h3></pre>
 <br>
 <br>

<hr>
<pre><h3>  Developed by: GroupSigmaBoys.</h3></pre>
<pre><h3>  © 2023 Alpha Clinic Center. All Rights Reserved.</h3></pre>
</body>
</html>
<?php
	//echo time();
	// if(isset($_POST['register']))
	// {
	// 	$cookie_name = "SignUp";
	// 	$cookie_value = "user1";
	// 	setcookie($cookie_name,$cookie_value, time()+300);
	// 	header("location: registration.php");
	// }
	// if(isset($_POST['login']))
	// {
	// 	$db = mysqli_connect("localhost","root","","alphaClinic");
	// 	session_start();
	// 	$username = $_POST['username'];
	// 	$password = $_POST['password'];
	// 	$sql = "SELECT * from user where username = '$username' AND password = '$password'";
	// 	$varify = mysqli_query($db, $sql);
	// 	if(mysqli_num_rows($varify) == 1) //1 row return
	// 	{
	// 		$_SESSION['username'] = $username;
	// 		//print("<center>Login Successfull!</center>");
	// 		//cookies implementation
	// 		header("location: userhome.php");
	// 	}
	// 	else 
	// 	{
	// 		print("<center>Wrong username/password!</center>");
	// 		echo ("<center><a href= 'forget.php'>Forget Username/Password?</a></center>");
	// 	}
	// }
    if(isset($_POST['back']))
	{
		header("location: main.php");
	}
?>