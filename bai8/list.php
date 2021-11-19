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
        <div class="row">
        <?php
                    $serverName = "localhost";
                    $useName = "root";
                    $password = "";
                    $database = "demo";
                    $conn = new mysqli($serverName,$useName, $password,$database);
                    $sql = 'select * from news';
                    $result =mysqli_query($conn, $sql);
                    while($row = mysqli_fetch_array($result,1)) {
                        echo '
                            <div class="col-xl-3">
                                <p> '.$row['title'].'</p>
                                <img src="'.$row['thumbnail'].'" style="width:100% " >
                                <p>'.$row['content'].'</p>
                                <p>'.$row['updated_at'].'</p>
                            </div>
                        ';
                    };
                    mysqli_close($conn);
    ?>
        </div>
    
        
    </div>
</body>
</html>