<!DOCTYPE html>
<html>
<head>
    <title>Halaman View Data Menu</title>
    <script type="text/javascript" language="javascript" src="js/jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script type="text/javascript" language="javascript" src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
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
    <nav class="navbar justify-content-between" style="background-color:#C70039">
        <div class="container-fluid">
            <div class="navbar-header">
                <img src="../assets/logo.png" width="100px" height="40px">
                <a style="color:#e6e6e6;font-family: 'Rubik', sans-serif;" class="navbar-brand" href=".php">Home</a> 
            </div>
            <a style="color:#e6e6e6;font-family: 'Rubik', sans-serif;" class="navbar-brand" href="logout.php">Logout</a>
        </div>
    </nav>
    <div class="container" id="home">
        <div class="row">
            <div class="col">
            </div>
            <div class="col-12">
                <h3 class="text-center display-4">Lihat Data Menu</h3>
                <?php
                $conn = mysqli_connect("localhost", "root", "", "PPL");

                $query = "SELECT * FROM data_menu";
                $result = mysqli_query($conn, $query);

                echo '<table class="table">
                <thead>
                <tr style="text-align: center;">
                <th scope="col">Id Menu</th>
                <th scope="col">Judul Menu</th>
                <th scope="col">Gambar Menu</th>
                <th scope="col">Isi Menu</th>
                <th scope="col">Update Data</th>
                <th scope="col">Hapus Data</th>
                </tr>
                </thead>
                <tbody>
                ';
                if (mysqli_num_rows($result) > 0) {
                  while($row = mysqli_fetch_assoc($result)) {
                    echo "<tr scope='row'><td>" . $row['id'] . "</td><td>" . $row['judul'] . "</td><td><img src='" . $row['gambar'] . "' class='img-thumbnail'></td><td>" . $row['isi'] . "</td><td><a class='btn btn-outline-success' href=update_data_menu.php?id=".$row['id'].">Update</a></td><td><a class='btn btn-outline-danger' href=delete_data_menu.php?id=".$row['id'].">Hapus</a></td></tr>";
                }
            } 

            echo "</table>";
            mysqli_close($conn);
            ?>
        </div>
        <div class="col">
        </div>
    </div>
</div>
</body>
</html>
