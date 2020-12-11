<?php
require_once ('../core/init.php');
 ?>
<!DOCTYPE html>
<html>
<head>
    <title>Halaman View Menu User</title>
    <script type="text/javascript" language="javascript" src="../js/jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <script type="text/javascript" language="javascript" src="../js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
    <style type="text/css">
        body{
            /*background-image: url("assets/diet.jpg");*/
            background-size:cover;
            /*background-color: #C70039;*/
        }
        #home{
            margin-top: 5%;    
            opacity: 0.90;
            font-family: 'Rubik', sans-serif;
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
                    <a class="nav-link" href="view_tips_user.php" style="color: white">Tips Diet</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="kalkulator.php" style="color: white">Kalkulator Diet</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="jadwal_diet.php" style="color: white">Jadwal Diet</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="progres_diet.php" style="color: white">Progres Diet</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="kalkulator.php" style="color: white">Reward</a>
                </li>
            </ul>
            <a class="nav-link" href="logout.php" style="color: white">Logout</a>
        </div>
    </nav>
    <div class="container" id="home">
        <div class="row">
            <div class="col">
            </div>
            <div class="col-12">
                <h3 class="text-center display-4">Menu Makanan untuk Diet</h3>
                <?php
                $conn = mysqli_connect("localhost", "root", "", "PPL");

                $query = "SELECT * FROM data_menu";
                $result = mysqli_query($conn, $query);

                echo '<div class="row" style="margin-top: 35px">';

                if (mysqli_num_rows($result) > 0) {
                  while($row = mysqli_fetch_assoc($result)) {
                    echo "<div class='col-3' style='margin-left:50px;margin-top:15px;'><div class='card' style='width: 18rem;height:30rem'><img class='card-img-top' style='height:10rem' src='".$row['gambar']."'alt='Card image cap'><div class='card-body'><h5 class='card-title'>" . $row['judul'] . "</h5><p class='card-text'>" . $row['isi'] . "</p>    <a href='#' class='btn btn-primary'>Go somewhere</a></div></div></div>";
                }
            } 

            echo "</div>";

            mysqli_close($conn);
            ?>
        </div>
        <div class="col">
        </div>
    </div>
</div>
</body>
</html>
