<?php
require_once ('../core/init.php');
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Kalkulator Kalori</title>
	<script type="text/javascript" language="javascript" src="../js/jquery-3.4.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<script type="text/javascript" language="javascript" src="../js/bootstrap.min.js"></script>
	<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.1/js/bootstrap-datepicker.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.1/css/bootstrap-datepicker.min.css" />

<!-- 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" />
	 -->
	<style type="text/css">
		body{
			background-image: url("../assets/diet.jpg");
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
	<div class="container">
		<div class="jumbotron" id="home">
			<h3 class="display-4">Kalkulator Kalori</h3>
			<form method="post">
				<div class="row" style="padding-bottom: 30px;">
					<div class="col-md-6">
						<div class="row" style="margin-top: 5px">
							Kalkulator kalori adalah alat yang digunakan untuk mengetahui berapa asupan kalori yang dibutuhkan seseorang. Hasil perhitungannya dapat digunakan sebagai salah satu acuan untuk mengontrol asupan kalori per hari.<br><br>
							Kalori adalah energi yang dibutuhkan manusia agar fungsi tubuh berjalan dengan baik untuk bisa melakukan aktivitas harian. Sumber kalori didapatkan melalui makanan dan minuman yang dikonsumsi. Hampir semua jenis makanan dan minuman yang dikonsumsi mengandung kalori.<br><br>
							Kebutuhan kalori harian setiap orang pasti berbeda-beda, tergantung beberapa faktor. Anda harus mengetahui ini untuk bisa mengatur makanan dan minuman yang dikonsumsi serta jadwal olahraga dan kegiatan fisik rutin. Dengan demikian, Anda bisa menjaga kesehatan dan bahkan mendapatkan berat badan ideal.<br>
						</div>
					</div>
					<div class="col-md-6">
						<fieldset>
							<div class="form-group">
								<label for="datepicker1">Tanggal</label>
								<input type="text" class="form-control" id="datepicker1">
							</div>
						</fieldset>
						<div class="row" style="margin-top: 5px">
							<div class="col">
								<label for="file">ID user</label>
								<input type="text" class="form-control" id="id_user" name="id_user" value="<?php echo $_SESSION['id']; ?>" disabled>
							</div>
						</div>
						<div class="row" style="margin-top: 5px">
							<div class="col">
								<label for="file">Jenis Kelamin</label>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="pria">
									<label class="form-check-label" for="inlineRadio1">Pria</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="wanita">
									<label class="form-check-label" for="inlineRadio2">Wanita</label>
								</div>
							</div>
						</div>
						<div class="row" style="margin-top: 5px">
							<div class="col">
								<label for="file">Berat Badan(Kg)</label>
								<input type="text" class="form-control" id="berat" name="berat">
							</div>
						</div>
						<div class="row" style="margin-top: 5px">
							<div class="col">
								<label for="file">Tinggi Badan(Cm)</label>
								<input type="text" class="form-control" id="tinggi" name="tinggi">
							</div>
						</div>
						<div class="row" style="margin-top: 5px">
							<div class="col">
								<label for="file">Usia</label>
								<input type="text" class="form-control" id="usia" name="usia">
							</div>
						</div>
						<div class="row" style="margin-top: 5px">
							<div class="col">
								<label for="aktivitas">Level Aktivitas Fisik </label>
								<div class="mb-2 mr-sm-2 mb-sm-0">
									<select class="form-control" id="aktivitas">
										<option value="1">Jarang atau sama sekali tidak berolahraga</option>
										<option value="2">Olahraga ringan (1-3 hari/minggu)</option>
										<option value="3">Olahraga sedang (3-5 hari/minggu)</option>
										<option value="4">Sangat aktif (6-7 hari/minggu)</option>
										<option value="5">Ekstra aktif</option>
									</select>
								</div>
							</div>
						</div>
						<div class="row" style="margin-top: 10px">
							<div class="col-md-2">
								<button id="hitung" type="button" class="btn btn-danger" required>Hitung</button>
							</div>
							<div class="col-md-10">
								<div id="hasil"></div>
								<div class="col">
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
			<script type="text/javascript">
				$(document).ready(function(){
					var date = new Date();
					var today = new Date(date.getFullYear(), date.getMonth(), date.getDate());
					var end = new Date(date.getFullYear(), date.getMonth(), date.getDate());

					$('#datepicker1').datepicker({
						format: "yyyy-mm-dd",
						todayHighlight: true,
						startDate: today,
						endDate: end,
						autoclose: true
					});

					$('#datepicker1').datepicker('setDate', today);

                //var pathh;
                $('#hitung').on('click', function(e) {
                	e.preventDefault();
                	e.stopPropagation();

                	var form_data = new FormData();
                	var tanggal= $('#datepicker1').val();
                	var id_user= $('#id_user').val();
                	var berat = $('#berat').val();
                	var tinggi = $('#tinggi').val();
                	var usia = $('#usia').val();
                	var radioValue=$("input[name='jenis_kelamin']:checked").val();  
                	var aktivitas=$('#aktivitas').val();

                	form_data.append('tanggal', tanggal);
                	form_data.append('id_user', id_user);
                	form_data.append('berat', berat);
                	form_data.append('tinggi', tinggi);
                	form_data.append('usia',usia);
                	form_data.append('radioValue',radioValue);
                	form_data.append('aktivitas',aktivitas);


                    //alert(tanggal);                         
                    $.ajax({
                            url: 'hitung.php', // point to server-side PHP script 
                            dataType: 'text',  // what to expect back from the PHP script, if anything
                            cache: false,
                            contentType: false,
                            processData: false,
                            data:form_data,                    
                            type: 'post',
                            success: function(res){
                            	document.getElementById("hasil").innerHTML = "<b>"+res+"</b>";
                            }
                        });
                });
            });
        </script>
    </body>
    </html>
