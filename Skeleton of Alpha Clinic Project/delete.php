<?php

$connection = mysqli_connect("localhost","root","");

$db = mysqli_select_db($connection,"alphaclinic");
$delete = $_GET['del'];


$sql = "delete from crud where id = '$delete'";


if(mysqli_query($connection,$sql))
           {

            echo '<script> location.replace("index.php")</script>';  
           }
           else
           {
           echo "Some thing Error" . $connection->error;

           }

?>