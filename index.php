<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<script type="text/javascript" language="javascript" src="js/jquery-3.4.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" language="javascript" src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet">
	<style type="text/css">
		body{
			background-size:cover;
			margin: 0;
			padding: 0;
		}
		#home{  
			opacity: 0.90;
			font-family:'Secular One', sans-serif;
			text-align: center;
		}
		h3 {
			text-align: center;
		}
		#about{
			font-family: 'Secular One', sans-serif;
		}
		#kontak{
			font-family: 'Secular One', sans-serif;
		}
		img{
			align-items: center;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg" style="background-color:#C70039">
		<img src="assets/logo.png" width="100px" height="40px">
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="home.php" style="color: white">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="apps/view_menu_user.php" style="color: white">Menu Diet</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="apps/view_tips_user.php" style="color: white">Tips Diet</a>
				</li>
			</ul>
			<a class="nav-link" href="apps/login.php" style="color: white">Login</a>
		</div>
	</nav>
		<!-- konten 1-slide -->
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img class="d-block w-100" src="assets/pic16.jpg" alt="First slide" style="width: 100%;height: 600px;vertical-align: middle;border: 0;-ms-interpolation-mode: bicubic;opacity: 0.85">
				<!-- teks -->
				<div class="carousel-caption d-none d-md-block">
					<div style="margin-top: 10px;margin-bottom: 10px;">
						<div>
							<img src="assets/ikon.png" width="100px" height="100px">
							<h3 style="font-family: 'Courgette', cursive;color: #C70039" class="display-2"><b>MyDiet</b></h3>
						</div>
						<h4 style="margin-bottom: 10px;color:black;font-family:'Secular One', sans-serif;"><b>"Memulai Diet dengan Mudah"</b></h4>
						<div class="row">
							<div class="col">
							</div>
							<div class="col-4">
								<div class="border-bottom border-danger"></div>
							</div>
							<div class="col">
							</div>
						</div>
						<div class="row" style="margin-bottom: 30px;margin-top: 35px">
							<div class="col">
							</div>
							<div class="col-8">
								<h5 style="color:black;font-family:'Secular One', sans-serif;">Website ini membantu Anda dalam merencanakan dan mengatur program diet. Membantu untuk membuat jadwal diet, menyarankan makanan untuk program diet, dan menghitung kalori yang dibutuhkan.</h5>
							</div>
							<div class="col">
							</div>
						</div>
						<button type="submit" class="btn btn-danger btn-lg" onclick="location.href = 'apps/signup.php';">DAFTAR SEKARANG</button>
					</div>
				</div>
			</div>
			<div class="carousel-item">
				<img class="d-block w-100" src="assets/pic21.jpg" alt="Second slide" style="width: 100%;height: 600px;vertical-align: middle;border: 0;-ms-interpolation-mode: bicubic;">
				<div class="carousel-caption d-none d-md-block">
					<h3 style="font-family: 'Secular One', sans-serif;color:#C70039" class="display-2"><b>INFO TENTANG DIET</b></h3>
				</div>
			</div>
			<div class="carousel-item">
				<img class="d-block w-100" src="assets/pic18.jpg" alt="Third slide" style="width: 100%;height: 600px;vertical-align: middle;border: 0;-ms-interpolation-mode: bicubic;opacity: 0.85">
				<div class="carousel-caption d-none d-md-block">
					<h3 style="font-family: 'Secular One', sans-serif;color:#C70039" class="display-2"><b>TENTANG KAMI</b></h3>
					<button type="submit" class="btn btn-danger btn-lg">Baca Selengkapnya</button>
				</div>
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>

	<!-- konten2 -->
	<div class="container" id="home">
		<div style="color:black">
			<h3 style="margin-top:80px;font-family: 'Secular One', sans-serif;" class="display-4"><b>TIPS DIET</b></h3>
		</div>
		<div class="row" style="margin-top: 35px">
			<div class="col">
				<div class="card" style="width: 18rem;">
					<img class="card-img-top" src="assets/protein.jpg" alt="Card image cap" style="height: 200px">
					<div class="card-body">
						<h5 class="card-text"><b>Makanan kaya protein</b></h5>
						<p>Protein membantu dalam penurunan berat badan. Makanan kaya protein seperti daging, telur, ikan,dan kacang-kacangan.</p>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="card" style="width: 18rem;">
					<img class="card-img-top" src="assets/olahraga.jpg" alt="Card image cap" style="height: 200px">
					<div class="card-body">
						<h5 class="card-text"><b>Berolahraga</b></h5>
						<p>Diet harus diimbangi dengan olahraga. Olahraga fisik secara teratur adalah hal paling penting untuk menurunkan berat badan.</p>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="card" style="width: 18rem;">
					<img class="card-img-top" src="assets/tidur.jpg" alt="Card image cap" style="height: 200px">
					<div class="card-body">
						<h5 class="card-text"><b>Pola Tidur</b></h5>
						<p>Tidur memainkan peran penting dalam manajemen berat badan.  Kita harus memastikan untuk tidur selama enam hingga delapan jam setiap hari.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- konten3 -->
	<div id="about" style="background-color:#C70039 ">
		<div>
			<h3 style="margin-top:80px;padding-top: 50px" class="display-4"><b>TENTANG KAMI</b></h3>
			<div class="row" style="margin-top: 35px;padding-bottom: 40px">
				<div class="col">
				</div>
				<div class="col-8">
					<p style="text-align: center;">Kami membuat wesbite ini dikarenakan selama pandemi Covid-19 kesehatan dan imun tubuh sangatlah penting. Salah satunya dengan menjaga pola hidup sehat dan konsumsi makanan yang bergizi. Selama pandemi, kebanyakan orang akan berada dirumah saja dan kegiatan olahraga juga terbatas sehingga berat badan semakin bertambah. Maka dari itu, kami membuat wesbite diet.</p>
				</div>
				<div class="col">
				</div>
			</div>    
		</div>
	</div>
	<div id="kontak">
		<h3 style="padding-top: 50px" class="display-4"><b>KONTAK KAMI</b></h3>
		<div class="row">
			<div class="col">
			</div>
			<div class="col text-center">
				<img src="assets/facebook.png" width="70px" height="70px" style="margin-right: 12px;">
				<img src="assets/instagram.png" width="60px" height="60px" style="margin: 12px">
				<img src="assets/wa.png" width="60px" height="60px" style="margin: 12px">
			</div>
			<div class="col">
			</div>
		</div>
	</div>
	<!-- <footer class="footer" style="background-color: red">
    <div class="container text-center">
      <h3>Kontak Kami</h3>
      <img src="assets/img/facebook.png" width="70px" height="70px" style="margin-right: 12px;">
      <img src="assets/img/instagram.png" width="60px" height="60px" style="margin: 12px">
      <img src="assets/img/wa.png" width="60px" height="60px" style="margin: 12px">

    </div>
  </footer> -->
</body>
</html>
