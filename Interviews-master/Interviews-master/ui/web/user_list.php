<?php
	include_once 'config.php';
	session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login Interface</title>
    </head>
    <body>

    <?php
            include_once 'config.php';


        $recordEmail =$_SESSION['Email'];
        $recordPassword =$_SESSION['Password'];

        $sql = "SELECT * FROM User WHERE username = $recordEmail AND password = $recordPassword";
        $result = $conn -> query($sql);
	
			
        if($result->num_rows > 0){
        //ouput data of each row
        
            while ($row = $result->fetch_assoc()){
            
                $userid=$row["id"];
                $name = $row["name"];
                $uname= $row["username"];
                $email= $row["email"];

                
            }
        }



    
    ?>
        <center>User Details</center>

        <div style="margin-left: 40%;margin-right: 40%;"><br><br>
        <fieldset>
        User ID
        <input type="text" name="id" placeholder="id" value =<?php echo $userid?>><br><br>
        Name
        <input type="text" name="name" placeholder="name" value =<?php echo $name?>>
        USer name
        <input type="text" name="Uname" placeholder="user name" value =<?php echo $uname?>><br><br>
        E-mail
        <input type="text" name="email" placeholder="email" value =<?php echo $email?>><br><br>
        <input type="submit" name ="btn">
        </fieldset>

        </div>

      

    </body>
</html>