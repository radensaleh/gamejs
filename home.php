<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<link rel="icon" type="image/png" href="img/home.png">
	<title>Home</title>

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

	<style>
				#canvastetris{
					background-color: #000;
				}
	</style>
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
						<a href="home.php">
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
					<li><a href="#home">Home</a></li>
					<!-- <li><a href="#about">About</a></li> -->
					<!-- <li><a href="#ss">Screenshot Games</a></li> -->
					<li><a href="#game">Game</a></li>
					<li><a href="#topscore">Top Score Global</a></li>
          <li><a href="#yourscore">Your Score</a></li>
					<!-- <li><a href="#pricing">Prices</a></li> -->
					<!-- <li><a href="#team">Team Developer</a></li> -->
					<!-- <li class="has-dropdown"><a href="#blog">Blog</a>
						<ul class="dropdown">
							<li><a href="blog-single.html">blog post</a></li>
						</ul>
					</li> -->
					<!-- <li><a href="#contact">Contact</a></li> -->
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
							<h3 class="main-color">Hello <span class="fa fa-user-circle"></span>
								<?php
										session_start();

										if(!isset($_SESSION['username'])){
											header('location:index.php');
										}

										$username = $_SESSION['username'];
										echo $username;

										echo "
													<input type='hidden' id='username' value='$username'/>
										";

								?> !</h3>
							<p class="main-color">Selamat <span class="fa fa-gamepad"></span> Bermain :)</p>
							<button class="btn btn-info" data-toggle="modal" data-target="#myaccount"><span class="fas fa-info-circle"></span> My Account</button>
							<button class="btn btn-danger" id="logout"><span class="fas fa-sign-in-alt"></span> Logout</button>
							<!-- <button class="btn btn-warning" data-toggle="modal" data-target="#about"><span class="fas fa-info-circle"></span> About Us</button> -->
						</div>
					</div>
					<!-- /home content -->

				</div>
			</div>
		</div>
		<!-- /home wrapper -->

	</header>
	<!-- /Header -->

	<!-- Modal myaccount-->
	<div id="myaccount" class="modal fade" role="dialog">
		<div class="modal-dialog">

			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title"><span class="fas fa-info-circle"></span> My Account</h4>
				</div>
					<div class="modal-body">
						<table class="table table-striped table-bordered table-hover no-footer">
                <tr>
                    <th>Username</th>
                    <td id="iusername"></td>
                </tr>
                <tr>
                    <th>Name</th>
                    <td id="iname"></td>
                </tr>
                <tr>
                    <th>Password</th>
                    <td id="ipassword"></td>
                </tr>
                <tr>
                  <th>Email</th>
                  <td id="iemail"></td>
                </tr>
                <tr>
                  <th>Top Score Snake</th>
                  <td id="topUL1stt">0</td>
                </tr>
								<tr>
                  <th>Top Score Tetris</th>
                  <td id="TTtopUL1stt">0</td>
                </tr>
            </table>
					</div>
				<div class="modal-footer">
					<!-- <a href="editAccount.php" class="btn btn-success"><span class="fa fa-cog"></span> Edit Account</a> -->
					<button class="btn btn-xs btn-success" data-toggle="modal" data-target="#editAccount"><span class="fa fa-cog"></span> Edit Account</button>
					<button class="btn btn-xs btn-danger" data-toggle="modal" data-target="#deleteSnakeScore"><span class="fa fa-trash"></span> Delete Snake Score</button>
					<button class="btn btn-xs btn-danger" data-toggle="modal" data-target="#deleteTetrisScore"><span class="fa fa-trash"></span> Delete Tetris Score</button>
					<button type="button" class="btn btn-info" data-dismiss="modal"><span class="fa fa-times-circle"></span> Close</button>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal Delete Snake Score-->
	<div id="deleteSnakeScore" class="modal fade" role="dialog">
	  <div class="modal-dialog">

	    <!-- Modal content-->
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	        <h4 class="modal-title text-center"><span class="fa fa-check"></span> Delete Confirmation</h4>
	      </div>
	        <form id="modal-form-delete-scoreSnake" method="POST" action="proses/deleteSnakeScore.php">
	      <div class="modal-body">
	            <input type="hidden" name="username" id="cat_username" value="">
	            <p><center>Are you sure you want to delete your Score ?</center></p>
	      </div>
	      <div class="modal-footer">
	        <button type="submit" class="btn btn-danger"><span class="fa fa-trash"></span> Yes, Delete</button>
	        <button type="button" class="btn btn-info" data-dismiss="modal"><span class="fa fa-times-circle"></span> No, Cancel</button>
	      </div>
	      </form>
	    </div>
	  </div>
	</div>

	<!-- Modal Delete Tetris Score-->
	<div id="deleteTetrisScore" class="modal fade" role="dialog">
		<div class="modal-dialog">

			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title text-center"><span class="fa fa-check"></span> Delete Confirmation</h4>
				</div>
					<form id="modal-form-delete-scoreTetris" method="POST" action="proses/deleteTetrisScore.php">
				<div class="modal-body">
							<input type="hidden" name="username" id="cat_usernameTT" value="">
							<p><center>Are you sure you want to delete your Score ?</center></p>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-danger"><span class="fa fa-trash"></span> Yes, Delete</button>
					<button type="button" class="btn btn-info" data-dismiss="modal"><span class="fa fa-times-circle"></span> No, Cancel</button>
				</div>
				</form>
			</div>
		</div>
	</div>

	<!-- Modal Edit Account -->
	<div id="editAccount" class="modal fade" role="dialog">
		<div class="modal-dialog">

			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title"><span class="fas fa-cog"></span> Edit Account</h4>
				</div>
					<div class="modal-body">
						<form id="modal-form-edit" action="proses/edit.php" method="POST" role="form">
							<div class="form-group has-success">
								<label for="username" class="form-control-label">Username</label>
								<input type="text" id="eusername" name="eusername" class="form-control" readonly/>
								<span class="text-warning" ></span>
							</div>
							<div class="form-group has-success">
								<label for="name_user" class="form-control-label">Name</label>
								<input type="text"  id="ename_user" name="ename_user" class="form-control" required />
							</div>
							<div class="form-group has-success">
								<label for="password" class="form-control-label">Password</label>
								<input type="password" id="epassword" name="epassword" class="form-control" required/>
							</div>
							<div class="form-group has-success">
								<label for="email" class="form-control-label">Email</label>
								<input type="email" id="eemail" name="eemail" class="form-control" required/>
							</div>
					</div>
					<div class="modal-footer">
						<button type="submit" class=" btn btn-success" name="editAccount"><span class="fa fa-cog"></span> Change</button>
						<button type="button" class="btn btn-info" data-dismiss="modal"><span class="fa fa-times-circle"></span> Close</button>
					</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal Snake Game-->
	<div id="snake" class="modal fade" role="dialog">
		<div class="modal-dialog">

			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title"><i><img src="img/snake1.png" width="30" height="30"></i> Snake</h4>
				</div>
					<div class="modal-body">
						<p>
							<canvas id="canvas" width="542" height="362"></canvas>
							<script src="gamejs/game.js"></script>
							<script>
									Snake();
							</script>
						</p>
					</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-info" data-dismiss="modal"><span class="fa fa-times-circle"></span> Close</button>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal Tetris Game-->
	<div id="tetris" class="modal fade" role="dialog">
		<div class="modal-dialog" style="width:300px;">

			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title"><i><img src="img/tetris.png" width="30" height="30"></i> Tetris</h4>
				</div>
					<div class="modal-body">
						<p>
							<!-- <div id="ket">Press "S" to Start Game</div> -->
							<canvas id="canvastetris" width="240" height="400"></canvas>
							<script src="gamejs/game.js"></script>
							<script>
										Tetris();
							</script>
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
						<button class="btn btn-danger" data-toggle="modal" data-target="#snake"><span class="fas fa-gamepad"></span> Play Now</button>
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
						<button class="btn btn-danger" data-toggle="modal" data-target="#tetris"><span class="fas fa-gamepad"></span> Play Now</button>
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

	<!-- Top Score Global Snake-->
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

  <!-- your Score Snake -->
  <div id="yourscore" class="section sm-padding">

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
					<h3 class="title white-text">YOUR SCORE GAME SNAKE</h3>
				</div>

        <!-- snake your score 1st -->
        <div class="col-sm-4 col-xs-6">
          <div class="number">
            <i><img src="img/medal1.png" width="35" height="35"></i>
            <h6 class="white-text"><span class="counter">1st Top Score</span></h6>
            <h3 id="topUL1st" class="white-text"><span class="counter">0</span></h3>
            <h6 class="white-text"><span class="counter">Score</span></h6>
            <!-- <span class="white-text">@rdsaleh</span> -->
          </div>
        </div>
        <!-- /snake your score -->

        <!-- snake your score 2nd -->
        <div class="col-sm-4 col-xs-6">
          <div class="number">
            <i><img src="img/medal2.png" width="35" height="35"></i>
            <h6 class="white-text"><span class="counter">2nd Top Score</span></h6>
            <h3 id="topUL2nd" class="white-text"><span class="counter">0</span></h3>
            <h6 class="white-text"><span class="counter">Score</span></h6>
            <!-- <span class="white-text">@rere</span> -->
          </div>
        </div>
        <!-- /snake your score -->


        <!-- snake your score 3rd -->
        <div class="col-sm-4 col-xs-6">
          <div class="number">
            <i><img src="img/medal3.png" width="35" height="35"></i>
            <h6 class="white-text"><span class="counter">3rd Top Score</span></h6>
            <h3 id="topUL3rd" class="white-text"><span class="counter">0</span></h3>
            <h6 class="white-text"><span class="counter">Score</span></h6>
            <!-- <span class="white-text">@harsa</span> -->
          </div>
        </div>
        <!-- /snake your score -->

      </div>
      <!-- /Row -->

    </div>
    <!-- /Container -->

  </div>
  <!-- /your Score snake -->

	<!-- your Score Tetris -->
	<div id="yourscore" class="section sm-padding">

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
					<h3 class="title white-text">YOUR SCORE GAME TETRIS</h3>
				</div>

				<!-- tetris your score 1st -->
				<div class="col-sm-4 col-xs-6">
					<div class="number">
						<i><img src="img/medal1.png" width="35" height="35"></i>
						<h6 class="white-text"><span class="counter">1st Top Score</span></h6>
						<h3 id="TTtopUL1st" class="white-text"><span class="counter">0</span></h3>
						<h6 class="white-text"><span class="counter">Score</span></h6>
						<!-- <span class="white-text">@rdsaleh</span> -->
					</div>
				</div>
				<!-- /tetris your score -->

				<!-- tetris your score 2nd -->
				<div class="col-sm-4 col-xs-6">
					<div class="number">
						<i><img src="img/medal2.png" width="35" height="35"></i>
						<h6 class="white-text"><span class="counter">2nd Top Score</span></h6>
						<h3 id="TTtopUL2nd" class="white-text"><span class="counter">0</span></h3>
						<h6 class="white-text"><span class="counter">Score</span></h6>
						<!-- <span class="white-text">@rere</span> -->
					</div>
				</div>
				<!-- /tetris your score -->


				<!-- tetris your score 3rd -->
				<div class="col-sm-4 col-xs-6">
					<div class="number">
						<i><img src="img/medal3.png" width="35" height="35"></i>
						<h6 class="white-text"><span class="counter">3rd Top Score</span></h6>
						<h3 id="TTtopUL3rd" class="white-text"><span class="counter">0</span></h3>
						<h6 class="white-text"><span class="counter">Score</span></h6>
						<!-- <span class="white-text">@harsa</span> -->
					</div>
				</div>
				<!-- /tetris your score -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /your Score -->

	<!-- Footer -->
	<footer id="footer" class="sm-padding bg-dark">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<div class="col-md-12">

					<!-- footer logo -->
					<div class="footer-logo">
						<a href="home.php"><img src="img/Logo1.png" alt="logo"></a>
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
          var btnLogout = $('#logout');

					//logout
          btnLogout.click(function() {
            swal({
              title: 'Are you sure?',
              text: "You will logout!",
              type: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Logout'
            }).then(OK => {
              if (OK) {
                swal(
                  'Success!',
                  'Logout Success',
                  'success'
                ).then(OK => {
                  if(OK){
										window.location.replace("proses/logout.php");
                  }
                })
              }
            })
          });


					//get value username
					var username  = document.getElementById("username").value;
					// ----------------- TOP SCORE SNAKE --------------------- //

					//top score local 1st
					var topUL1st    = document.getElementById("topUL1st");
					var topUL1stt   = document.getElementById("topUL1stt");

					$.ajax({
							url:"localScore/topScoreLocal1st.php",
							type:"POST",
							data:{username:username},
							dataType:"json",
							success: function(res){
								topUL1st.innerHTML = res.score;
								topUL1stt.innerHTML = res.score;
							}
					});

					//top score local 2nd
					var topUL2nd    = document.getElementById("topUL2nd");
					$.ajax({
							url:"localScore/topScoreLocal2nd.php",
							type:"POST",
							data:{username:username},
							dataType:"json",
							success: function(res){
								topUL2nd.innerHTML = res.score;
							}
					});

					//top score local 2nd
					var topUL3rd    = document.getElementById("topUL3rd");
					$.ajax({
							url:"localScore/topScoreLocal3rd.php",
							type:"POST",
							data:{username:username},
							dataType:"json",
							success: function(res){
								topUL3rd.innerHTML = res.score;
							}
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

					// --------------------- TOP SCORE TETRIS ------------------ //

					//top score local 1st
					var TTtopUL1st    = document.getElementById("TTtopUL1st");
					var TTtopUL1stt   = document.getElementById("TTtopUL1stt");
					$.ajax({
							url:"localScore/TTtopScoreLocal1st.php",
							type:"POST",
							data:{username:username},
							dataType:"json",
							success: function(res){
								TTtopUL1st.innerHTML = res.score;
								TTtopUL1stt.innerHTML = res.score;
							}
					});

					//top score local 2nd
					var TTtopUL2nd    = document.getElementById("TTtopUL2nd");
					$.ajax({
							url:"localScore/TTtopScoreLocal2nd.php",
							type:"POST",
							data:{username:username},
							dataType:"json",
							success: function(res){
								TTtopUL2nd.innerHTML = res.score;
							}
					});

					//top score local 2nd
					var TTtopUL3rd    = document.getElementById("TTtopUL3rd");
					$.ajax({
							url:"localScore/TTtopScoreLocal3rd.php",
							type:"POST",
							data:{username:username},
							dataType:"json",
							success: function(res){
								TTtopUL3rd.innerHTML = res.score;
							}
					});

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

					//myaccount
					var iusername = document.getElementById("iusername");
					var iname     = document.getElementById("iname");
					var iemail    = document.getElementById("iemail");
					var ipassword = document.getElementById("ipassword");
					$.ajax({
							url:"proses/myaccount.php",
							type:"POST",
							data:{username:username},
							dataType:"json",
							success: function(res){
									iusername.innerHTML = res.data.username;
									iname.innerHTML 		= res.data.name_user;
									ipassword.innerHTML = res.data.password;
									iemail.innerHTML 		= res.data.email;
							}
					});

					//edit account
					var formEdit = $('#modal-form-edit');

					$.ajax({
							url:"proses/myaccount.php",
							type:"POST",
							data:{username:username},
							dataType:"json",
							success:function(res){
									var eusername  = $('#eusername').val(res.data.username);
									var ename_user = $('#ename_user').val(res.data.name_user);
									var epassword  = $('#epassword').val(res.data.password);
									var eemail     = $('#eemail').val(res.data.email);
							}
					});

					formEdit.submit(function(e){
						e.preventDefault();

						$.ajax({
								url:formEdit.attr('action'),
								type:formEdit.attr('method'),
								data:formEdit.serialize(),
								dataType:"json",
								success: function(res){
										if(res.error == 0){
												$('#editAccount').modal('hide');
												$('#myaccount').modal('hide');
												swal(
													'Success',
													res.message,
													'success'
												).then(OK => {
													if(OK){
														 location.reload();
													}
												});
										}
								}
						});
					});

					//delete Snake Score
					var formDelete = $('#modal-form-delete-scoreSnake');
					var cat = $('#cat_username').val(username);

					formDelete.submit(function(e) {
						e.preventDefault();

						$.ajax({
								url:formDelete.attr('action'),
								type:formDelete.attr('method'),
								data: formDelete.serialize(),
								dataType: "json",
								success: function( res ){
									if( res.error == 0 ){
										console.log(res);
											$('#myaccount').modal('hide');
											$('#deleteSnakeScore').modal('hide');
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
										$('#myaccount').modal('hide');
										$('#deleteSnakeScore').modal('hide');
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

					//delete Tetris Score
					var formDeleteTT = $('#modal-form-delete-scoreTetris');
					var catTT = $('#cat_usernameTT').val(username);

					formDeleteTT.submit(function(e) {
						e.preventDefault();

						$.ajax({
								url:formDeleteTT.attr('action'),
								type:formDeleteTT.attr('method'),
								data: formDeleteTT.serialize(),
								dataType: "json",
								success: function( res ){
									if( res.error == 0 ){
										console.log(res);
											$('#myaccount').modal('hide');
											$('#deleteTetrisScore').modal('hide');
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
										$('#myaccount').modal('hide');
										$('#deleteTetrisScore').modal('hide');
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

			});
	</script>

</body>

</html>
