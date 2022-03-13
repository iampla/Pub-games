<?php
    $con = mysqli_connect("localhost","root","","db_webboard");

    if(mysqli_connect_error()){
        echo "Failed to connect to MySQL:".mysqli_connect_error();
    }
?>