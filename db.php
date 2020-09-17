<?php 

    $connect = mysqli_connect('localhost', 'root', '', 'lostnfound');

    if($connect){
        //echo "Database connected successfully";
    }else{
        die("Database connection failed");
    }
?>  