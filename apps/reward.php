<?php
require_once ('../core/init.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Reward Diet</title>
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
				<h3 class="text-center display-4">Reward Diet</h3>
			</form>
			<?php
			$conn = mysqli_connect("localhost", "root", "", "PPL");

			$id_user=$_SESSION['id'];
			$query = "SELECT * FROM progres_diet where id_user=$id_user ORDER BY tanggal DESC";
			$result = mysqli_query($conn, $query);

			//diambil 2 data awal untuk dikurangi
			if (mysqli_num_rows($result) > 0) {
				while($row = mysqli_fetch_assoc($result)) {
					$berat[]=$row["berat"];
				}
			} 

			if (mysqli_num_rows($result) == 1)
			{
				$selisih_berat=0;
			}
			else{
				$selisih_berat=$berat[1]-$berat[0];
			}
			
				//print_r($kalori);
				// echo($selisih_kalori);
				// $selisih_kalori=0;
			if(($selisih_berat>0) && ($selisih_berat<=5))
			{
				echo "<div class='card' id='myDIV'><div class='card-body'><img src='../assets/voucher.png' width=50px' height='50px'><a style='margin:20px'>Voucher Rp. 50.000,00</a><button type='button' class='btn btn-danger' style='float: right' onclick='myFunction()'>Klaim</button></div></div>";
			}
			elseif(($selisih_berat>=5) && ($selisih_berat<=10))
			{
				echo "<div class='card' id='myDIV'><div class='card-body'><img src='../assets/voucher.png' width=50px' height='50px'><a style='margin:20px'>Voucher Rp. 100.000,00<button type='button' class='btn btn-danger' style='float: right' onclick='myFunction()'>Klaim</button></div></div>";
			}
			elseif($selisih_berat>=11)
			{
				echo "<div class='card'  id='myDIV'><div class='card-body'><img src='../assets/voucher.png' width=50px' height='50px'><a style='margin:20px'>Voucher Rp. 150.000,00<button type='button' class='btn btn-danger' style='float: right' onclick='myFunction()'>Klaim</button></div></div>";
			}
			else
			{
				echo "<div class='card'><div class='card-body'><h4 style='color:red;text-align:center'><b>Belum ada reward untuk Anda!</b></h4></div></div>";
			}
			mysqli_close($conn);


			?>
		</div>
		<div class="col">
		</div>
	</div>
</div>
<script type="text/javascript">
	function myFunction() {
		var x = document.getElementById("myDIV");
		if (x.style.display === "none") {
			x.style.display = "block";
		} else {
			x.style.display = "none";
		}
		alert("Reward berhasil diklaim!!");
	} 
</script>
</body>
</html>
