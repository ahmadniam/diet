<?php
require_once ('../core/init.php');

$conn = mysqli_connect("localhost", "root", "", "PPL");

$id_user=$_SESSION['id'];
$query = "SELECT * FROM progres_diet where id_user=$id_user";
$result = mysqli_query($conn, $query);


if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
    $tgl=$row['tanggal'];
    $formated_date = date("d-m-Y", strtotime($tgl));


    $tanggal[]=$formated_date;
    $berat[]=$row['berat'];
    $kalori[]=$row['kalori'];
     // echo $tanggal;
     // echo $kalori;
}
}
mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Progres Diet</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
    <script type="text/javascript" language="javascript" src="../js/jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <script type="text/javascript" language="javascript" src="../js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <style type="text/css">
        body{
            /*background-image: url("assets/diet.jpg");*/
            background-size:cover;
        }
        #home{
            margin-top: 5%;    
            opacity: 0.90;
            font-family: 'Rubik', sans-serif;
        }
        h3 {
            padding-bottom: 30px;
        }
        .btn-custom-black {
            background: black;
            color: #fff;
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
                    <a class="nav-link" href="reward.php" style="color: white">Reward</a>
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
                <h3 class="text-center display-4">Progres Diet</h3>
                <canvas id="myChart"></canvas> 

            </div>
            <div class="col">
            </div>
        </div>
    </div>
    <script>

        var ctx = document.getElementById("myChart").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: <?php echo json_encode($tanggal); ?>,
                datasets: [{
                    label: 'Berat badan',
                    data: <?php echo json_encode($berat); ?>,
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgba(255,99,132,1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    xAxes: [{
                        scaleLabel: {
                            display: true,
                            labelString: "Tanggal"
                        },
                    }],
                    yAxes: [{
                        scaleLabel: {
                            display: true,
                            labelString: "Berat"
                        },
                        ticks: {
                            beginAtZero:true
                        },
                    }]
                }
            },
        }


        );

    </script>
</body>
</html>
