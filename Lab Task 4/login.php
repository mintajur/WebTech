<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Page</title>
</head>
<body>
<center>
	<fieldset>
		<legend><i>Login Page</i></legend>
		<form method = "post" action ="login.php">
			<table>
				<tr>
					<td>Username:</td>
					<td><input type="text" name="uname"> </td>
				</tr>
				<tr>
					<td>Password:</td>
					<td><input type="password" name="pass1"></td>
				</tr>
				<tr>
					<td><input type="submit" name="login" value="Login"></td>
					<td><input type="submit" name="reg" value="New user?"></td>
				</tr>
			</table>
		</form>
	</fieldset>
</center>
</body>
</html>
<?php
	//echo time();
	if(isset($_POST['reg']))
	{
		$cookie_name = "new_user";
		$cookie_value = "user1";
		setcookie($cookie_name,$cookie_value, time()+300);
		header("location: reg.php");
	}
	if(isset($_POST['login']))
	{
		$db = mysqli_connect("localhost","root","","sample_project");
		session_start();
		$uname = $_POST['uname'];
		$pass1 = $_POST['pass1'];
		$sql = "SELECT * from user where uname = '$uname' AND pass1 = '$pass1'";
		$varify = mysqli_query($db, $sql);
		if(mysqli_num_rows($varify) == 1) //1 row return
		{
			$_SESSION['uname'] = $uname;
			//print("<center>Login Successfull!</center>");
			//cookies implementation
			header("location: userhome.php");
		}
		else 
		{
			print("<center>Wrong username/password!</center>");
			echo ("<center><a href= 'forgot-password.php'>Forget Username/Password?</a></center>");
		}
	}
?>