<?php
        require_once('register.php');           
        register();
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <form  method="POST">
            <h1> Đăng Ký </h1>
            <div class="mb-3">
                <label  class="form-label">Name</label>
                <input type="text" class="form-control"  name="name" >
            </div>
            <div class="mb-3">
                <label  class="form-label">Email</label>
                <input type="text" class="form-control"  name="email" >
            </div>
            <div class="mb-3">
                <label  class="form-label">Password</label>
                <input type="password" class="form-control"  name="password" >
            </div>
            <button type="submit" name="add" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>