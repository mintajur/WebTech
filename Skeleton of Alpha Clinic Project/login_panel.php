<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<img src="Alpha.PNG" alt="clinic logo" height="110">
<h1>Alpha Clinic Center</h1>
<br>
<br>
<center >
    <fieldset>
      <legend>Please Login</legend>
      <form method="post" action="login_panel.php">
                <table>
                    <tr>

                    <td><input style = "width:250px; height:80px" type="submit" name="adminlogin" value="Admin"></td>
                    <td><input style = "width:250px; height:80px" type="submit" name="doctorlogin" value="Doctor"></td>
                    <td><input style = "width:250px; height:80px" type="submit" name="patientlogin" value="Patient"></td>
                    

                </table>
                </form>
    </fieldset>
</body>
</html>
<?php

?>
</center>
<form method="post" action="login_panel.php">
                <table>
                    <tr>

                    <td><input style = "width:200px; height:50px" type="submit" name="Backtomain" value="Back"></td>
                    

                </table>
                </form>
                <?php
if(isset($_POST['Backtomain']))
{
    header("location: main.php");
}

?> 



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
if(isset($_POST['adminlogin']))
{
    header("location: registration.php");
}

?> 

<?php
if(isset($_POST['doctorlogin']))
{
    header("location: registration.php");
}

?>

