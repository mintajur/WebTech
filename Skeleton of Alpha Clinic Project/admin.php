<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <body>
<img src="Alpha.PNG" alt="clinic logo" height="95">
<br>

<h1>Admin</h1>
                <hr>

            </form>
            <form style = "text-align:left">
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            </form>


            <form method="post" action="admin.php">
                <table>
                    <tr>

                    <td><input style = "width:250px; height:80px" type="submit" name="Adddoctor" value="Manage Doctor"></td>
                    

                </table>
                </form>
<?php

if(isset($_POST['Adddoctor']))
{
  header("location: index.php");
}

?>



      <!-- Logout code -->
    <form method="post" action="admin.php">
    <br>
    <input type="submit" name="LogOut" value="LogOut">
  
      </form>

      <?php

if(isset($_POST['LogOut']))
{
  header("location: main.php");
}
      ?>
      
 

      <!-- Last part of each page code -->
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


