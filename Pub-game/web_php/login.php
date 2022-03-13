<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet"href ="css/stylea.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/templatemo-style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bai+Jamjuree:wght@400&display=swap" rel="stylesheet">
 
</head>

<body>

    <?php
        require('db.php');
        session_start();
        if(isset($_POST['username'])){
            $username = stripslashes($_REQUEST['username']);
            $username = mysqli_real_escape_string($con,$username);
            $password = stripslashes($_REQUEST['password']);
            $password = mysqli_real_escape_string($con,$password);
           

            $query = "SELECT * FROM users WHERE username ='$username'AND password = '".md5($password)."'";
            $result = mysqli_query ($con,$query);
            $row =mysqli_num_rows($result);


            if($row==1){
               
            $rowsa = mysqli_fetch_array($result);
            
            $_SESSION['username'] =$username;
            $_SESSION['emailname']=$rowsa['email'];
           
            echo "class ='form' href='login.php'";
                /*header("Location: index.php");*/
            }else{
                echo "<div class ='form'
                <h3>Username/password is incorrect.</h3>
                <br>Click here to <a href='login.php'>login</a>
                </div>";
                
            }
            }
    ?>
    <div class = "form">
        
            <form action  = "" method ="post" name = "login">
            <h1>Log in</h1>
                <input type = "text" name = "username" placeholder ="Username"require><br>
                <input type = "password" name = "password" placeholder ="Password"require><br>
                <input type = "submit" name = "submit" href='index.php' value ="Login"><br>
                <p>Not registred yet ?<a href = "registration.php">Register Here</a></p>
         </form>
         
        </div>
  
</body>
</html>