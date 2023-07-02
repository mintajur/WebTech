<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<center>
    <fieldset>
<?php
    session_start();
    if(isset($_SESSION['username'])
    )
    {
        echo "Welcome Home: ".$_SESSION['username'];
    }
?>
    </fieldset>
</center>
</body>
</html>
<center>
	<fieldset>
		<legend><i>Home Page</i></legend>
		<form method = "post" action ="Home.php">
	
			<table>
			<td><input type="submit" name="Registration" value="Click Here to Register"></td>
					
				</tr>
			</table>
		</form>
	</fieldset>
</center>
<?php
	if(isset($_POST['Registration']))
	{
		header("location: Registration.php");
	}
?>       
    
   