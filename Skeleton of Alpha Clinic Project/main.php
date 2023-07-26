<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


</head>
<body>
<img src="Alpha.PNG" alt="clinic logo" height="95">
<br>


            <form method="post" action="main.php">
                <table>
                    <tr>
                    <td><input type="submit" name="services" value="Services"></td>

                    <td><input type="submit" name="gallery" value="Gallery"></td>

                    <td><input type="submit" name="research" value="Research"></td>

                    <td><input type="submit" name="Login" value="Login"></td>

                </table>
                

                <hr>

                <video width="1600" autoplay muted loop>
        <source src="Alpha_Clinic_Promo_Video.mp4" type="video/mp4">
</video>


            </form>
         
            <form style = "text-align:left">
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>


            
            <h1>About Us</h1> 
            <video width="400" autoplay muted loop>
        <source src="AboutVideo1.mp4" type="video/mp4">
</video>
            
            <pre> <h2>We are always relentless and
passionate about our healthcare
services. Every life is important
for us. We have the group of our
doctors to immediately takeover
your appointments and we focus on
our service to be adequetly done. 
</h2> </pre>



                <!--Write About us-->
            </form>


            <form method="post" action="main.php">
                <table>
                    <tr>

                    <td><input style = "width:250px; height:80px" type="submit" name="AppointMent" value="Take Appointment"></td>

                </table>
                </form>

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
if(isset($_POST['Login']))
{
    header("location: Login_panel.php");
}

?>

<?php
if(isset($_POST['AppointMent']))
{
    header("location: Login_panel.php");
}

?> 