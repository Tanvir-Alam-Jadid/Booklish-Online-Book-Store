<?php
    $con=mysqli_connect("Localhost", "root", "", "booklish");
    if(mysqli_connect_errno()){
    echo "Connection Fail".mysqli_connect_error();
    }
?>