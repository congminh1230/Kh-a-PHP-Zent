<?php
    session_start();
    function register() {
        if(!empty($_POST)) {
            $fullName = $_POST['name'];
            $useEmail = $_POST['email'];
            $usePassword = $_POST['password'];
            // if(isset($_POST['name'])) {
            //     $getName = $_POST['name'];
            // }
            // if(isset($_POST['email'])) {
            //     $useEmail = $_POST['email'];
            // }
            // if(isset($_POST['password'])) {
            //     $usePassword = $_POST['password'];
            // }
            // tạo kết nối với database
            $db_user = "root";
            $db_pass = '';
            $db_name = "demo";

            $db = new PDO('mysql:host=localhost;dbname='. $db_name . ';charset=utf8', $db_user, $db_pass);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    
            
            // 
            $sql = "SELECT * FROM users WHERE email = ? AND password = ? LIMIT 1";
            $stmtselect  = $db->prepare($sql);
            $result = $stmtselect->execute([$fullName, $usePassword]);

            if($result){
	            $user = $stmtselect->fetch(PDO::FETCH_ASSOC);
	            if($stmtselect->rowCount() > 0){
		            $_SESSION['userlogin'] = $user;
		            echo '1';
	            }else{
		            echo 'There no user for that combo';		
	            }
}else{
	echo 'There were errors while connecting to database.';
}


            header('Location:login.php');
        }
    }

?>