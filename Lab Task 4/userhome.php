<?php
	if(isset($_POST['reg']))
	{
		header("location: reg.php");
	}
?>      


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
    if(isset($_SESSION['uname'])
    )
    {
        echo "Welcome Home: ".$_SESSION['uname'];
    }
?>
    </fieldset>
</center>
</body>
</html>
<center>
	<fieldset>
		<legend><i>Home Page</i></legend>
		<form method = "post" action ="userhome.php">
	
			<table>
			<td><input type="submit" name="reg" value="Click Here to Register"></td>
					
				</tr>
			</table>
		</form>
	</fieldset>
</center>
 
    
   