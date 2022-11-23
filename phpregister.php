<?php
    include_once("connection.php")
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>REGISTER</title>
        <link rel="stylesheet" type="text/css" href="styles.css">
    </head>
    <body>
        <div id="form">
            <h1>REGISTRATION FORM</h1>
            <form name="form" action="phpregisteration.php" method="POST">
                <label>FIRST NAME : </label>
                <input type="text" name="fname" required><br><br>
                <label>LAST NAME : </label>
                <input type="text" name="lname" required><br><br>
                <label>PHONE : </label>
                <input type="text" name="country code" value="+91" size="1">
                <input type="text" name="phone" required><br><br>
                <label>EMAIL : </label>
                <input type="email" id="email" name="email" required><br><br>
                <label>PASSWORD : </label>
                <input type="password" id="pass" name="pass" required><br><br>
                <input type="submit" id="btn" value="REGISTER" name="submit">
            </form>
        </div>
    </body>
</html>