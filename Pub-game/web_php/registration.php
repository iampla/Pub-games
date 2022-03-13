<?php

    session_start()

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pub-game</title>
    <link rel = "stylesheet"href = "css/stylea.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
 <link href="https://fonts.googleapis.com/css2?family=Bai+Jamjuree:wght@400&display=swap" rel="stylesheet">

</head>

<body>
    <?php
        require('db.php');
        //if form submitted, insert values into the database.
    if(isset($_REQUEST['username'] )and( $_REQUEST['password'] == $_REQUEST['passwordre'])){
        //removes backslashes
        $username = stripslashes($_REQUEST['username']);
        // escape special charecters in a string
        $username = mysqli_real_escape_string($con,$username);
        $email =stripslashes($_REQUEST['email']);
        $email = mysqli_real_escape_string($con,$email);
        $password =stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con,$password); 
        $trn_date = date("Y-m-d H:i:s");
        
        $query =" INSERT INTO users (username,password,email,trn_date)
        VALUES ('$username','".md5($password)."','$email','$trn_date')";

        $result = mysqli_query ($con,$query);

        if($result){
            header("location: login.php");
        }
        else{
        }
    }else{
    }

    ?>
        
        
            <form name = "Registration" action =""method = "post">
                <h1>Registration</h1><div class = "form">
                <?php if (isset($_SESSION['error'])) : ?>
                <div class="error">   
                    <?php
                        echo $_SESSION['error'];
                    ?>
                </div>
                <?php endif; ?>
                <input type = "text" name = "username" placeholder ="Username"require><br>
                <input type = "email" name = "email" placeholder ="Email"require><br>
                <input type = "password" name = "password" placeholder ="Password"require><br>
                <input type = "password" name = "passwordre" placeholder ="Passwordre"require><br>
                
                <input type = "submit" name = "submit" value ="Register">
                 <p>Click Here to <a href = "login.php">Login</a></p>
         </form>
         
        </div>
    <?php}?> 
</body>
</html>

<?php
?>
 