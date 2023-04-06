<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        body{
            background-image: url(img1.jpg);
            background-size: cover;
        }
        .container{
            color: greenyellow;
            /* background-color: black; */
        }
        a{
            color:white;
            text-decoration: none;
        }
        button:hover{
            background: yellow !important;
        }
        
    </style>
</head>
<body>
    <?php 
    $x=$_SESSION['user'];
    require_once "database.php";
    $sql="SELECT * FROM login WHERE SL_No='$x'";
    $result=mysqli_query($conn,$sql);
    // $user=mysqli_fetch_array($result,MYSQLI_ASSOC);
    $user=mysqli_fetch_assoc($result);
    ?>
    <div class="container">
        <h1><marquee direction="left">Welcome to my DashBoard: <?php echo $user['Name']  ?></marquee></h1>
        <!-- <h1><marquee direction="left"></marquee></h1> -->
       <button class="btn btn-danger"> <a href="<?php echo "logout.php"; ?>">Logout</a></button>
    </div>
</body>
</html>