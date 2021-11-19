<?php
    
    function login() {
        if(!empty($_POST)) {
            $getName = $_POST['name'];
            $getEmail = $_POST['email'];
            $getPassword = $_POST['password'];

            $_SESSION['name'] = $getName;
            $_SESSION['email'] = $getEmail;
            $_SESSION['password'] = $getPassword;
            
        };
        if(!empty($_POST)) {
            header("Location:register.php");
           
        }
    };

?>