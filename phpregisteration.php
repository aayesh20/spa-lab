<?php
    include_once("connection.php");
    if(isset($_POST['submit']))
    {
        $first_name=$_POST['fname'];
        $last_name=$_POST['lname'];
        $phone=$_POST['phone'];
        $email=$_POST['email'];
        $pass=$_POST['pass'];

        $sql="select * from register where fname='$first_name' and password='$pass'";
        $result=mysqli_query($con, $sql);
        $count=mysqli_num_rows($result);
        if($count==1)
        {
            header("Location:phpreg.php");
        }
        else
        {
            echo '<script type="text/javascript">
                alert("Registration Failed. Invalid information");
                </script>';
        }
    }
?>