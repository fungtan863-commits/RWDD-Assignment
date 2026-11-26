<?php 
    $host = "localhost";
    $user = "root";
    $password ="";
    $database = "Assginment";

    $conn = mysqli_connect($host, $user, $password, $database);

    if(!$conn){
        die("connection error" . mysqli_connect_error());
    }else{
        echo "<script>alert('Database connected');</script>";
    }
?>