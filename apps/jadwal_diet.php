<?php
require_once ('../core/init.php');
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Jadwal Diet</title>
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
				<h3 class="text-center display-4">Jadwal Diet</h3>  
				<button type="button" class="btn btn-primary" class="text-right" style="float: right; margin: 20px" onclick="location.href = 'tambah_jadwal.php';">Tambah</button>
				<!-- <form action="" method="post">
					<input type="submit" value="Send details to embassy" />
					<input type="hidden" name="button_pressed" value="1" />
				</form> -->
				<?php
				$conn = mysqli_connect("localhost", "root", "", "PPL");

				$id_user=$_SESSION['id'];
				$query = "SELECT * FROM jadwal_diet where id_user=$id_user";
				$result = mysqli_query($conn, $query);

				echo '<table class="table">
				<thead>
				<tr style="">
				<th scope="col">Id</th>
				<th scope="col">Jenis Kegiatan</th>
				<th scope="col">Detail</th>
				<th scope="col">Informasi tambahan</th>
				<th scope="col">Tanggal</th>
				<th scope="col">Waktu</th>
				<th scope="col">Update</th>
				<th scope="col">Hapus</th>
				</tr>
				</thead>
				<tbody>
				';
				if (mysqli_num_rows($result) > 0) {
					while($row = mysqli_fetch_assoc($result)) {
						echo "<tr scope='row'><td>" . $row['id'] . "</td><td>" . $row['jenis'] . "</td><td>" . $row['detail'] . "</td><td>" . $row['info_tambahan'] . "</td><td>" . $row['tanggal'] . "</td><td>" . $row['waktu'] . "</td><td><a class='btn btn-outline-success' href=perbarui_jadwal.php?id=".$row['id'].">Update</a></td><td><a class='btn btn-outline-danger' href=delete_jadwal.php?id=".$row['id'].">Hapus</a></td></tr>";
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
	<script type="text/javascript">

	</script>
</body>
</html>
