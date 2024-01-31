<?php
    $con=mysqli_connect("localhost", "root", "", "visitas");
    if(mysqli_connect_errno()){
        echo "DB Connection Failed!".mysqli_connect_error();
    }
