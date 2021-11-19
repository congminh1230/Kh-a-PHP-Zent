<?php

function register() {

    $serverName = "localhost";
    $useName = "root";
    $password = "";
    $database = "test";
    
    $conn = new mysqli($serverName,$useName, $password,$database);
    if(isset($_POST["add"])){
        $getName = $_POST["name"];
        $getEmail = $_POST["email"];
        $getPassword = $_POST["password"];
        if($conn -> query("INSERT INTO sinhvien (NAME,email,password) VALUES ('$getName','$getEmail','$getPassword')")) {
            echo "<script> alert('thành công') </script";
        }else {
            echo "<script> alert('lỗi') </script";
        }
        header('Location:login.php');
    }
    $conn -> close();
    
    


};




?>