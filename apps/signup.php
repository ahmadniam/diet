<?php
$conn = mysqli_connect("localhost", "root", "", "PPL");

if(isset($_POST['signup'])){
    $username = $_POST["username"];
    $password = $_POST["password"];

    $insert = "insert into user values (null,'$username','$password')";
    $sukses=mysqli_query($conn, $insert) or die(mysqli_error($conn));

    if($sukses){
        $_SESSION['username']=$username;
        echo "<script> alert('$username'); </script>";
        header("Location:login.php");
    }
    else{
        header("Location:signup.php");
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Halaman Sign Up</title>
    <script type="text/javascript" language="javascript" src="../js/jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <script type="text/javascript" language="javascript" src="../js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
    <style type="text/css">
        body{
            background-image: url("../assets/diet.jpg");
            background-size:cover;
        }
        #home{
            margin-top: 8%;    
            opacity: 0.90;
            font-family: 'Rubik', sans-serif;
        }
        h3 {
            padding-bottom: 30px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg" style="background-color:#C70039">
        <img src="../assets/logo.png" width="100px" height="40px">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="home.php" style="color: white">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="view_menu_user.php" style="color: white">Menu Diet</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color: white">Tips Diet</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container" id="home">
        <div class="row">
            <div class="col">
            </div>
            <div class="col-6">
             <form method="post">
                <div class="card" style="width: 30rem;">
                  <div class="card-body">
                    <h3 class="text-center display-4">Sign Up</h3>
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Username</label>
                            <input type="username" class="form-control" id="username" name="username" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-danger center btn-block" name="signup">Sign Up</button>
                    </form>
                </div>
            </div>
        </form>
    </div>
    <div class="col">
    </div>
</div>
</body>
</html>
