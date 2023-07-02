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
		<form method = "post" action ="Login.php">
	
			<table>
				<tr>
					<td>Username:</td>
					<td><input type="text" name="username"> </td>
				</tr>
				<tr>
					<td>Password:</td>
					<td><input type="password" name="password"></td>
				</tr>
				<tr>
					<td><input type="submit" name="Login" value="Login"></td>
					<td><input type="submit" name="Registration" value="New user?"></td>
				</tr>
			</table>
		</form>
	</fieldset>
</center>
<?php
if(isset($_POST['Login']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == 'emon' && $password == 123)
    {
        session_start();
        $_SESSION['username']=$username;
        $_SESSION['password']=$password;

        header("location: Home.php");
    }
    {
        echo "Password not matched";
    
    }
}

?>
</body>
</html>
 
<?php
	if(isset($_POST['Registration']))
	{
		header("location: Registration.php");
	}
?> 