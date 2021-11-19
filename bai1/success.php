<?php
function success() {
    if(!empty($_POST)) {
        $sessionEmail = "";
        $sessionPassword = "";
        if(isset($_SESSION['email'])) {
            $sessionEmail = $_SESSION['email'];
        }
        if(isset($_SESSION['password'])) {
            $sessionPassword = $_SESSION['password'];
        }
        $email = $_POST['email'];
        $password = $_POST['password'];
        if($email == $sessionEmail && $password == $sessionPassword) {
            header('Location: hello.php');
        }else {
            echo "<script> alert('Tài khoản không đúng') </script>";
        }
    };
}

?>