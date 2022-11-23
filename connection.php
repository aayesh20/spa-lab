<?php
$servername="localhost";
$username="root";
$pass="";
$dbname="db2";

$con=mysqli_connect($servername,$username,$pass,$dbname);

if($con==true)
{
    echo "";
}
else
{
    die(mysqli_connect_error());
}
?>