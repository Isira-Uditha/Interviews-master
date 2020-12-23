<?php
session_start();
if($_SERVER['REQUEST_METHOD'] == 'POST')
{


	$_SESSION['Email']=$_POST['email'];
    $_SESSION['Password']=$_POST['password'];
    

}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Login Interface</title>
    </head>
    <body>
        <center>LOGIN</center>
        <form method="POST" action ="/controller">
        <div style="margin-left: 40%;margin-right: 40%;"><br><br>
        <fieldset>
        E-mail
        <input type="text" name="email" placeholder="email"><br><br>
        Password
        <input type="text" name="password" placeholder="password"><br><br>
        <input type="submit" name ="btn">
        </fieldset>

        </div>
        </form>
        <?php

        $recordEmail=$_POST['email'];
        $recordPassword=$_POST['password'];

        include_once 'config.php';

        $sql = "SELECT * FROM User WHERE username = $recordEmail AND password = $recordPassword" ;
        $result = $conn -> query($sql);
        if($result->num_rows > 0){
            header("Location:user_list.php");
        }else{
            echo '<script>alert("invalid password")</script>'; 
        }
        ?>

    </body>
</html>