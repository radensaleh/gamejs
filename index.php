<?php
		session_start();
		if(isset($_SESSION['username'])){
				header('location:home.php');
		}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<link rel="icon" type="image/png" href="img/index.png">
	<title>Index</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CVarela+Round" rel="stylesheet">

	<!-- Flat Admin CSS -->
	<link rel="stylesheet" type="text/css" href="css/flat-admin/vendor.css">
  <link rel="stylesheet" type="text/css" href="css/flat-admin/flat-admin.css">

	<!-- sweetalert2 -->
	<link type="text/css" rel="stylesheet" href="css/sweetalert2.min.css">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- CDN Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">

	<!-- Owl Carousel -->
	<link type="text/css" rel="stylesheet" href="css/owl.carousel.css" />
	<link type="text/css" rel="stylesheet" href="css/owl.theme.default.css" />

	<!-- Magnific Popup -->
	<link type="text/css" rel="stylesheet" href="css/magnific-popup.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<!-- Header -->
	<header id="home">
		<!-- Background Image -->
		<div class="bg-img" style="background-image: url('./img/play-background.jpg');">
			<!-- <div class="overlay"></div> -->
		</div>
		<!-- /Background Image -->

		<!-- Nav -->
		<nav id="nav" class="navbar nav-transparent">
			<div class="container">

				<div class="navbar-header">
					<!-- Logo -->
					<div class="navbar-brand">
						<a href="index.php">
							<img class="logo" src="img/Logo.png" alt="logo">
							<img class="logo-alt" src="img/Logo1.png" alt="logo">
						</a>
					</div>
					<!-- /Logo -->

					<!-- Collapse nav button -->
					<div class="nav-collapse">
						<span></span>
					</div>
					<!-- /Collapse nav button -->
				</div>

				<!--  Main navigation  -->
				<ul class="main-nav nav navbar-nav navbar-right">
					<li><a href="#home">Index</a></li>
					<!-- <li><a href="#about">About</a></li> -->
					<li><a href="#ss">Screenshot Games</a></li>
					<li><a href="#game">Game</a></li>
					<li><a href="#topscore">Top Score Global</a></li>
					<!-- <li><a href="#pricing">Prices</a></li> -->
					<li><a href="#team">Team Developer</a></li>
					<!-- <li class="has-dropdown"><a href="#blog">Blog</a>
						<ul class="dropdown">
							<li><a href="blog-single.html">blog post</a></li>
						</ul>
					</li> -->
					<li><a href="#contact">Contact</a></li>
				</ul>
				<!-- /Main navigation -->

			</div>
		</nav>
		<!-- /Nav -->

		<!-- home wrapper -->
		<div class="home-wrapper">
			<div class="container">
				<div class="row">

					<!-- home content -->
					<div class="col-md-10 col-md-offset-1">
						<div class="home-content">
							<p class="main-color">Selamat Datang di </p>
							<i><img src="img/Logo2.png" width="180" height="40"></i>
							<p class="main-color">
								Anda bisa bermain gratis disini :)
								<!-- <br> " Be a  <b>[ Winner ]</b> "; -->
							</p>
							<button class="btn btn-info" data-toggle="modal" data-target="#login"><span class="fas fa-sign-in-alt"></span> Login</button>
							<button class="btn btn-danger" data-toggle="modal" data-target="#register"><span class="fas fa-plus-circle"></span> Register</button>
							<button class="btn btn-warning" data-toggle="modal" data-target="#about"><span class="fas fa-info-circle"></span> About Us</button>
						</div>
					</div>
					<!-- /home content -->

				</div>
			</div>
		</div>
		<!-- /home wrapper -->

	</header>
	<!-- /Header -->

	<!-- Modal Login-->
	<div id="login" class="modal fade" role="dialog">
	  <div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title"><span class="fas fa-sign-in-alt"></span> Login</h4>
				</div>
				<div class="modal-body">
					<form id="modal-form-login" action="proses/login.php" method="POST" role="form">
						<div class="form-group has-success">
							<label for="username" class="form-control-label">Username</label>
							<input type="text" name="username" class="form-control" required/>
							<span class="text-warning" ></span>
						</div>
						<div class="form-group has-success">
							<label for="password" class="form-control-label">Password</label>
							<input type="password" name="password" class="form-control" required/>
						</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class=" btn btn-success" name="login"><span class="fas fa-sign-in-alt"></span> Login</button>
					<button type="button" class="btn btn-info" data-dismiss="modal"><span class="fa fa-times-circle"></span> Close</button>
				</div>
				</form>
			</div>
		</div>
	</div>

	<!-- Modal Register-->
	<div id="register" class="modal fade" role="dialog">
	  <div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title"><span class="fa fa-plus-circle"></span> Register</h4>
				</div>
				<div class="modal-body">
					<form id="modal-form-register" action="proses/register.php" method="POST" role="form">
						<div class="form-group has-success">
							<label for="username" class="form-control-label">Username</label>
							<input type="text" name="username" class="form-control" required/>
							<span class="text-warning" ></span>
						</div>
						<div class="form-group has-success">
							<label for="name_user" class="form-control-label">Name</label>
							<input type="text"  name="name_user" class="form-control" required />
						</div>
						<div class="form-group has-success">
							<label for="password" class="form-control-label">Password</label>
							<input type="password" name="password" class="form-control" required/>
						</div>
						<div class="form-group has-success">
							<label for="email" class="form-control-label">Email</label>
							<input type="email"  name="email" class="form-control" required/>
						</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class=" btn btn-success" name="register"><span class="fa fa-plus-circle"></span> Register</button>
					<button type="button" class="btn btn-info" data-dismiss="modal"><span class="fa fa-times-circle"></span> Close</button>
				</div>
				</form>
			</div>
		</div>
	</div>

	<!-- Modal About-->
	<div id="about" class="modal fade" role="dialog">
	  <div class="modal-dialog">

	    <!-- Modal content-->
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	        <h4 class="modal-title"><span class="fa fa-info-circle"></span> About Us</h4>
	      </div>
	        <div class="modal-body">
						<p>
							Perkenalkan Kami dari <b> kelompok 7 Pemrograman Web </b> yang beranggotakan 3 orang yaitu :
						</p>
						<p>
							<span class="fa fa-user-circle"></span> Harsa Yamani <br>
							<span class="fa fa-user-circle"></span> Raden M Saleh Idris <br>
							<span class="fa fa-user-circle"></span> Rheza Khairullah Al Aziz
						</p>
						<p>
							Kami mendapatkan tugas yang bertemakan <span class="fa fa-gamepad"></span> <b>Game</b>, dan disini kami membuat 2 game yaitu game <b> <span class="fa fa-square"></span> Snake </b> dan <b><span class="fas fa-shapes"></span> Tetris. </b> <br>
							Game-game tersebut kami bungkus dalam satu halaman website yang bernama <b>ngeGAMEJS</b>
						</p>
	        </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-info" data-dismiss="modal"><span class="fa fa-times-circle"></span> Close</button>
	      </div>
	    </div>
	  </div>
	</div>

	<!-- Modal Readmore Snake Game-->
	<div id="readmore-snake" class="modal fade" role="dialog">
		<div class="modal-dialog">

			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title"><i><img src="img/snake1.png" width="30" height="30"></i> Snake</h4>
				</div>
					<div class="modal-body">
						<p>
							<b>Snake</b> adalah sebuah video game sederhana yang diciptakan pada akhir tahun 1970 pada arcade. <b>Arcade</b> sendiri adalah platform video game seperti di bioskop-bioskop untuk game tekken. Sejak diciptakannya, kepopularannya terus meningkat dan akhirnya terkenal sebagai game klasik. Lalu sejak dirilis di Handphone Nokia pada tahun 1998, kepopularannya terus meningkat.
						</p>
						<p>
							Si pemain akan mengendalikan sebuah mahluk yang menyerupai ular yang akan bergerak mengitari sebuah bidang berbentuk kotak, dengan tujuan mengambil makanan yang aslinya berbentuk dot atau titik. Selama bermain, si pemain harus berusaha untuk tidak menabrak dinding atau ekornya sendiri dan itu akan semakin susah, karena setiap kali si pemain memakan makanan, ekornya akan bertambah panjang. Kontrol-pun sangat mudah, yakni hanya atas, bawah, kiri dan kanan, ular akan berjalan secara otomatis dan tidak dapat dihentikan.
						</p>
					</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-info" data-dismiss="modal"><span class="fa fa-times-circle"></span> Close</button>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal Readmore Tetris Game-->
	<div id="readmore-tetris" class="modal fade" role="dialog">
		<div class="modal-dialog">

			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title"><i><img src="img/tetris.png" width="30" height="30"></i> Tetris</h4>
				</div>
					<div class="modal-body">
						<p>
							<b>Tetris</b> (bahasa Rusia: Тетрис) adalah <b>teka-teki</b> yang didesain dan diprogram oleh <b>Alexey Pajitnov</b> pada bulan <b>Juni 1985</b>, pada saat ia bekerja di Pusat Komputer Dorodnicyn di Akademi Sains Uni Soviet di Moskow. Namanya berasal dari awalan numerik Yunani tetra yang bermakna bangun dengan empat bagian.
								Permainan ini (atau variasi lainnya) terdapat pada hampir setiap konsol permainan video dan komputer pribadi, begitu juga pada peralatan lainnya seperti kalkulator, ponsel, pemutar media portabel, PDA dan bahkan sebagai rahasia pada produk non-media seperti osiloskop.
						</p>
						<p>
								Walaupun Tetris muncul kebanyakan pada komputer rumahan, permainan ini lebih sukses pada versi Gameboy yang dirilis pada 1989 yang membuatnya sebagai permainan paling populer sepanjang masa. Pada berita Electronic Gaming Monthly ke-100, <b>Tetris</b> berada pada urutan pertama pada <b>"Permainan Terbaik Sepanjang Masa". Pada tahun 2007</b>, <b>Tetris</b> berada di urutan kedua pada <b>"100 Permainan Terbaik Sepanjang Masa" menurut IGN </b>.
						</p>
					</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-info" data-dismiss="modal"><span class="fa fa-times-circle"></span> Close</button>
				</div>
			</div>
		</div>
	</div>

	<!-- Screenshot Games -->
	<div id="ss" class="section md-padding bg-grey">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title">Screenshot Games</h2>
				</div>
				<!-- /Section header -->

				<!-- Work -->
				<div class="col-md-4 col-xs-6 work">
					<img class="img-responsive" src="./img/SS-Snake1.png" alt="">
					<div class="overlay"></div>
					<div class="work-content">
						<span>Snake</span>
						<h3>Start Game</h3>
						<div class="work-link">
							<a class="lightbox" href="./img/SS-Snake1.png"><i class="fa fa-search"></i></a>
						</div>
					</div>
				</div>
				<!-- /Work -->

				<!-- Work -->
				<div class="col-md-4 col-xs-6 work">
					<img class="img-responsive" src="./img/SS-Snake2.png" alt="">
					<div class="overlay"></div>
					<div class="work-content">
						<span>Snake</span>
						<h3>In Game</h3>
						<div class="work-link">
							<a class="lightbox" href="./img/SS-Snake2.png"><i class="fa fa-search"></i></a>
						</div>
					</div>
				</div>
				<!-- /Work -->

				<!-- Work -->
				<div class="col-md-4 col-xs-6 work">
					<img class="img-responsive" src="./img/SS-Snake3.png" alt="">
					<div class="overlay"></div>
					<div class="work-content">
						<span>Snake</span>
						<h3>Game Over</h3>
						<div class="work-link">
							<a class="lightbox" href="./img/SS-Snake3.png"><i class="fa fa-search"></i></a>
						</div>
					</div>
				</div>
				<!-- /Work -->

				<!-- Work -->
				<div class="col-md-4 col-xs-6 work">
					<img class="img-responsive" src="./img/SS-Tetris1.png" alt="">
					<div class="overlay"></div>
					<div class="work-content">
						<span>Tetris</span>
						<h3>Start Game</h3>
						<div class="work-link">
							<a class="lightbox" href="./img/SS-Tetris1.png"><i class="fa fa-search"></i></a>
						</div>
					</div>
				</div>
				<!-- /Work -->

				<!-- Work -->
				<div class="col-md-4 col-xs-6 work">
					<img class="img-responsive" src="./img/SS-Tetris2.png" alt="">
					<div class="overlay"></div>
					<div class="work-content">
						<span>Tetris</span>
						<h3>In Game</h3>
						<div class="work-link">
							<a class="lightbox" href="./img/SS-Tetris2.png"><i class="fa fa-search"></i></a>
						</div>
					</div>
				</div>
				<!-- /Work -->

				<!-- Work -->
				<div class="col-md-4 col-xs-6 work">
					<img class="img-responsive" src="./img/SS-Tetris3.png" alt="">
					<div class="overlay"></div>
					<div class="work-content">
						<span>Tetris</span>
						<h3>Game Over</h3>
						<div class="work-link">
							<a class="lightbox" href="./img/SS-Tetris3.png"><i class="fa fa-search"></i></a>
						</div>
					</div>
				</div>
				<!-- /Work -->

			</div>
			<!-- /Row -->
		</div>
		<!-- /Container -->
	</div>
	<!-- /Portfolio -->

	<!-- Snake Game -->
	<div id="game" class="section md-padding">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section header -->
				<!-- <div class="section-header text-center">
					<h2 class="title">Game</h2>
				</div> -->
				<!-- /Section header -->

				<!-- Snake Game -->
				<div class="col-md-6">
					<div class="about">
						<i><img src="img/snake1.png" width="50" height="50"></i>
						<h3>Snake Game</h3>
						<p><b>Snake</b> adalah sebuah video game sederhana yang diciptakan pada akhir tahun 1970 pada arcade.
							 <b>Arcade</b> sendiri adalah platform video game seperti di bioskop-bioskop untuk game tekken. Sejak diciptakannya, kepopularannya terus meningkat dan akhirnya terkenal sebagai game klasik. Lalu sejak dirilis di Handphone Nokia pada tahun 1998, kepopularannya terus meningkat.
						</p>
						<button class="btn btn-danger" data-toggle="modal" data-target="#login"><span class="fas fa-gamepad"></span> Play Now</button>
						<button class="btn btn-info" data-toggle="modal" data-target="#readmore-snake"><span class="fas fa-info-circle"></span> Readmore</button>
					</div>
				</div>
				<!-- /Snake Game -->

				<!-- Tetris Game -->
				<div class="col-md-6">
					<div class="about">
						<i><img src="img/tetris.png" width="50" height="50"></i>
						<h3>Tetris Game</h3>
						<p><b>Tetris</b> adalah <b>teka-teki</b> yang didesain dan diprogram oleh <b>Alexey Pajitnov</b> pada bulan <b>Juni 1985</b>.
							 Permainan ini (atau variasi lainnya) terdapat pada hampir setiap konsol permainan video dan komputer pribadi, begitu juga pada peralatan lainnya seperti kalkulator, ponsel, pemutar media portabel, PDA dan bahkan sebagai rahasia pada produk non-media seperti osiloskop.
						</p>
						<button class="btn btn-danger" data-toggle="modal" data-target="#login"><span class="fas fa-gamepad"></span> Play Now</button>
						<button class="btn btn-info" data-toggle="modal" data-target="#readmore-tetris"><span class="fas fa-info-circle"></span> Readmore</button>
					</div>
				</div>
				<!-- /Tetris Game -->

			</div>
			<!-- /Row -->
		</div>
		<!-- /Container -->
	</div>
	<!-- /Snake Game -->


	<!-- Top Global Score Snake -->
	<div id="topscore" class="section sm-padding">

		<!-- Background Image -->
		<div class="bg-img" style="background-image: url('./img/background2.jpg');">
			<div class="overlay"></div>
		</div>
		<!-- /Background Image -->

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section header -->
				<div class="section-header text-center">
					<h3 class="title white-text">TOP SCORE GLOBAL GAME SNAKE</h3>
				</div>

				<!-- snake top score -->
				<div class="col-sm-3 col-xs-6">
					<div class="number">
						<i><img src="img/trophy1.png" width="35" height="35"></i>
						<h6 class="white-text"><span class="counter">1st Top Score Global</span></h6>
						<h3 id="topSG1st" class="white-text"><span class="counter">0</span></h3>
						<h6 class="white-text"><span class="counter">Score</span></h6>
						<span id="topUG1st" class="white-text">username</span>
					</div>
				</div>
				<!-- /snake top score -->

				<!-- snake top score -->
				<div class="col-sm-3 col-xs-6">
					<div class="number">
						<i><img src="img/trophy2.png" width="35" height="35"></i>
						<h6 class="white-text"><span class="counter">2nd Top Score Global</span></h6>
						<h3 id="topSG2nd" class="white-text"><span class="counter">0</span></h3>
						<h6 class="white-text"><span class="counter">Score</span></h6>
						<span id="topUG2nd" class="white-text">username</span>
					</div>
				</div>
				<!-- /snake top score -->

				<!-- snake top score -->
				<div class="col-sm-3 col-xs-6">
					<div class="number">
						<i><img src="img/trophy3.png" width="35" height="35"></i>
						<h6 class="white-text"><span class="counter">3rd Top Score Global</span></h6>
						<h3 id="topSG3rd" class="white-text"><span class="counter">0</span></h3>
						<h6 class="white-text"><span class="counter">Score</span></h6>
						<span id="topUG3rd" class="white-text">username</span>
					</div>
				</div>
				<!-- /snake top score -->

				<!-- all player -->
				<div class="col-sm-3 col-xs-6">
					<div class="number">
						<i class="fa fa-user-circle"></i>
						<h6 class="white-text"><span class="counter">All Username</span></h6>
						<h3 id="alluser" class="white-text"><span class="counter">0</span></h3>
						<span class="white-text">Username</span>
					</div>
				</div>
				<!-- /all player -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Top Score Global Snake -->

	<!-- Top Score Global Tetris-->
	<div id="topscore" class="section sm-padding">

		<!-- Background Image -->
		<div class="bg-img" style="background-image: url('./img/background2.jpg');">
			<div class="overlay"></div>
		</div>
		<!-- /Background Image -->

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section header -->
				<div class="section-header text-center">
					<h3 class="title white-text">TOP SCORE GLOBAL GAME TETRIS</h3>
				</div>

				<!-- tetris top score -->
				<div class="col-sm-3 col-xs-6">
					<div class="number">
							<i><img src="img/trophy1.png" width="35" height="35"></i>
						<h6 class="white-text"><span class="counter">1st Top Score Global</span></h6>
						<h3 id="TTtopSG1st" class="white-text"><span class="counter">0</span></h3>
						<h6 class="white-text"><span class="counter">Score</span></h6>
						<span id="TTtopUG1st" class="white-text">username</span>
					</div>
				</div>
				<!-- /tetris top score -->

				<!-- tetris top score -->
				<div class="col-sm-3 col-xs-6">
					<div class="number">
							<i><img src="img/trophy2.png" width="35" height="35"></i>
						<h6 class="white-text"><span class="counter">2nd Top Score Global</span></h6>
						<h3 id="TTtopSG2nd" class="white-text"><span class="counter">0</span></h3>
						<h6 class="white-text"><span class="counter">Score</span></h6>
						<span id="TTtopUG2nd" class="white-text">username</span>
					</div>
				</div>
				<!-- /tetris top score -->

				<!-- tetris top score -->
				<div class="col-sm-3 col-xs-6">
					<div class="number">
						<i><img src="img/trophy3.png" width="35" height="35"></i>
						<h6 class="white-text"><span class="counter">3rd Top Score Global</span></h6>
						<h3 id="TTtopSG3rd" class="white-text"><span class="counter">0</span></h3>
						<h6 class="white-text"><span class="counter">Score</span></h6>
						<span id="TTtopUG3rd" class="white-text">username</span>
					</div>
				</div>
				<!-- /tetris top score -->

				<!-- all player -->
				<div class="col-sm-3 col-xs-6">
					<div class="number">
						<i class="fa fa-user-circle"></i>
						<h6 class="white-text"><span class="counter">All Username</span></h6>
						<h3 id="TTalluser" class="white-text"><span class="counter">0</span></h3>
						<span class="white-text">Username</span>
					</div>
				</div>
				<!-- /all player -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Top Score Global Tetris-->


	<!-- Team -->
	<div id="team" class="section md-padding">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title">Our Team</h2>
				</div>
				<!-- /Section header -->

				<!-- team -->
				<div class="col-sm-4">
					<div class="team">
						<div class="team-img">
							<img class="img-responsive" src="./img/harsa.png" alt="">
							<div class="overlay">
								<div class="team-social">
									<a href="https://www.facebook.com/harsa.yamani" target="_blank"><i class="fa fa-facebook"></i></a>
									<a href="https://www.instagram.com/harsa_y/" target="_blank"><i class="fa fa-instagram"></i></a>
									<!-- <a href="#"><i class="fa fa-twitter"></i></a> -->
								</div>
							</div>
						</div>
						<div class="team-content">
							<h3>Harsa Yamani</h3>
							<span>UI/UX Design</span>
						</div>
					</div>
				</div>
				<!-- /team -->

				<!-- team -->
				<div class="col-sm-4">
					<div class="team">
						<div class="team-img">
							<img class="img-responsive" src="./img/raden.jpg" alt="">
							<div class="overlay">
								<div class="team-social">
									<a href="https://www.facebook.com/rd.saleh" target="_blank"><i class="fa fa-facebook"></i></a>
									<a href="https://www.instagram.com/radensaleh_/" target="_blank"><i class="fa fa-instagram"></i></a>
									<!-- <a href="#"><i class="fa fa-twitter"></i></a> -->
								</div>
							</div>
						</div>
						<div class="team-content">
							<h3>Raden Saleh</h3>
							<span>Web Developer</span>
						</div>
					</div>
				</div>
				<!-- /team -->

				<!-- team -->
				<div class="col-sm-4">
					<div class="team">
						<div class="team-img">
							<img class="img-responsive" src="./img/rere.jpg" alt="">
							<div class="overlay">
								<div class="team-social">
									<a href="https://www.facebook.com/profile.php?id=100006956866473" target="_blank"><i class="fa fa-facebook"></i></a>
									<a href="https://www.instagram.com/rhezakhairullahal/" target="_blank"><i class="fa fa-instagram"></i></a>
									<!-- <a href="#"><i class="fa fa-twitter"></i></a> -->
								</div>
							</div>
						</div>
						<div class="team-content">
							<h3>Rheza Khairullah</h3>
							<span>Game Developer</span>
						</div>
					</div>
				</div>
				<!-- /team -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Team -->

	<!-- Contact -->
	<div id="contact" class="section md-padding">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section-header -->
				<div class="section-header text-center">
					<h2 class="title">Contact</h2>
				</div>
				<!-- /Section-header -->

				<!-- contact -->
				<div class="col-sm-4">
					<div class="contact">
						<i class="fa fa-phone"></i>
						<h3>Phone</h3>
						<p>(+62)89-677-471-833</p>
					</div>
				</div>
				<!-- /contact -->

				<!-- contact -->
				<div class="col-sm-4">
					<div class="contact">
						<i class="fa fa-envelope"></i>
						<h3>Email</h3>
						<p>m.salehidris13@gmail.com</p>
					</div>
				</div>
				<!-- /contact -->

				<!-- contact -->
				<div class="col-sm-4">
					<div class="contact">
						<i class="fa fa-map-marker"></i>
						<h3>Address</h3>
						<p>Jl. Lohbener Lama no. 8</p>
					</div>
				</div>
				<!-- /contact -->

				<!-- contact form -->
				<!-- <div class="col-md-8 col-md-offset-2">
					<form class="contact-form">
						<input type="text" class="input" placeholder="Name" required>
						<input type="email" class="input" placeholder="Email" required>
						<input type="text" class="input" placeholder="Subject" required>
						<textarea class="input" placeholder="Message"></textarea>
						<button class="main-btn">Send message</button>
					</form>
				</div> -->
				<!-- /contact form -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Contact -->


	<!-- Footer -->
	<footer id="footer" class="sm-padding bg-dark">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<div class="col-md-12">

					<!-- footer logo -->
					<div class="footer-logo">
						<a href="index.php"><img src="img/Logo1.png" alt="logo"></a>
					</div>
					<!-- /footer logo -->

					<!-- footer follow -->
					<ul class="footer-follow">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#"><i class="fa fa-instagram"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#"><i class="fa fa-youtube"></i></a></li>
					</ul>
					<!-- /footer follow -->

					<!-- footer copyright -->
					<div class="footer-copyright">
						<p>Copyright © 2018. Kelompok 7 P-WEB . </p>
							<!-- Designed by <a href="https://colorlib.com" target="_blank">Colorlib</a></p> -->
					</div>
					<!-- /footer copyright -->

				</div>

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</footer>
	<!-- /Footer -->

	<!-- Back to top -->
	<div id="back-to-top"></div>
	<!-- /Back to top -->

	<!-- Preloader -->
	<div id="preloader">
		<div class="preloader">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
	<!-- /Preloader -->

	<!-- jQuery Plugins -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="js/jquery.magnific-popup.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	<script type="text/javascript" src="js/sweetalert2.min.js"></script>

	<script type="text/javascript">
			$(document).ready(function (){
					var formRegis = $('#modal-form-register');
					var formLogin = $('#modal-form-login');

					//regis form
					formRegis.submit(function (e) {
						e.preventDefault();

						$.ajax({
								url:formRegis.attr('action'),
								type:formRegis.attr('method'),
								data: formRegis.serialize(),
								dataType: "json",
								success: function( res ){
									if( res.error == 0 ){
										console.log(res);
											$('#register').modal('hide');
											swal(
												'Success',
												res.message,
												'success'
											).then(OK => {
												if(OK){
													location.reload();
												}
											});
									}else{
										$('#register').modal('hide');
										swal(
											'Failed',
											res.message,
											'error'
										).then(OK => {
												if(OK){
													location.reload();
												}
										});
									}
								}
						})
					});

					//login form
					formLogin.submit(function (e) {
						e.preventDefault();

						$.ajax({
								url:formLogin.attr('action'),
								type:formLogin.attr('method'),
								data: formLogin.serialize(),
								dataType: "json",
								success: function( res ){
									if( res.error == 0 ){
										console.log(res);
											$('#login').modal('hide');
											swal(
												'Success',
												res.message,
												'success'
											).then(OK => {
												if(OK){
													window.location.replace("home.php");
												}
											});
									}else{
										$('#login').modal('hide');
										swal(
											'Failed',
											res.message,
											'error'
										).then(OK => {
												if(OK){
													location.reload();
												}
										});
									}
								}
						})
					});

					//top score global 1st
					var topUG1st = document.getElementById("topUG1st");
					var topSG1st = document.getElementById("topSG1st");
					$.ajax({
							url:"globalScore/topScoreGlobal1st.php",
							type:"POST",
							data:{},
							dataType:"json",
							success: function(res){
								topUG1st.innerHTML = res.username;
								topSG1st.innerHTML    = res.score;
								// console.log(res);
							}
					});

					//top score global 2nd
					var topUG2nd = document.getElementById("topUG2nd");
					var topSG2nd = document.getElementById("topSG2nd");
					$.ajax({
							url:"globalScore/topScoreGlobal2nd.php",
							type:"POST",
							data:{},
							dataType:"json",
							success: function(res){
								topUG2nd.innerHTML = res.username;
								topSG2nd.innerHTML    = res.score;
								// console.log(res);
							}
					});

					//top score global 3rd
					var topUG3rd = document.getElementById("topUG3rd");
					var topSG3rd = document.getElementById("topSG3rd");
					$.ajax({
							url:"globalScore/topScoreGlobal3rd.php",
							type:"POST",
							data:{},
							dataType:"json",
							success: function(res){
								topUG3rd.innerHTML = res.username;
								topSG3rd.innerHTML    = res.score;
								// console.log(res);
							}
					});

					//count all user
					var alluser = document.getElementById("alluser");
					$.ajax({
							url:"proses/alluser.php",
							type:"POST",
							data:{},
							dataType:"json",
							success: function(res){
								alluser.innerHTML = res;
								// console.log(res);
							}
					});

					//count all user
					var TTalluser = document.getElementById("TTalluser");
					$.ajax({
							url:"proses/alluser.php",
							type:"POST",
							data:{},
							dataType:"json",
							success: function(res){
								TTalluser.innerHTML = res;
								// console.log(res);
							}
					});

					// --------------------- TOP SCORE TETRIS ------------------ //

					//top score global 1st
					var TTtopUG1st = document.getElementById("TTtopUG1st");
					var TTtopSG1st = document.getElementById("TTtopSG1st");
					$.ajax({
							url:"globalScore/TTtopScoreGlobal1st.php",
							type:"POST",
							data:{},
							dataType:"json",
							success: function(res){
								TTtopUG1st.innerHTML = res.username;
								TTtopSG1st.innerHTML = res.score;
								// console.log(res);
							}
					});

					//top score global 2nd
					var TTtopUG2nd = document.getElementById("TTtopUG2nd");
					var TTtopSG2nd = document.getElementById("TTtopSG2nd");
					$.ajax({
							url:"globalScore/TTtopScoreGlobal2nd.php",
							type:"POST",
							data:{},
							dataType:"json",
							success: function(res){
								TTtopUG2nd.innerHTML = res.username;
								TTtopSG2nd.innerHTML = res.score;
								// console.log(res);
							}
					});

					//top score global 3rd
					var TTtopUG3rd = document.getElementById("TTtopUG3rd");
					var TTtopSG3rd = document.getElementById("TTtopSG3rd");
					$.ajax({
							url:"globalScore/TTtopScoreGlobal3rd.php",
							type:"POST",
							data:{},
							dataType:"json",
							success: function(res){
								TTtopUG3rd.innerHTML = res.username;
								TTtopSG3rd.innerHTML = res.score;
								// console.log(res);
							}
					});

			});
	</script>

</body>

</html>
