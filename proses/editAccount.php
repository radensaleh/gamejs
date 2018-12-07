<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<link rel="icon" type="image/png" href="img/edit.png">
	<title>Edit Account</title>

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
						<a href="editAccount.php">
							<img class="logo" src="img/logosnake.png" alt="logo">
							<img class="logo-alt" src="img/logosnake-white.png" alt="logo">
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
					<li><a href="home.php">Home</a></li>
					<!-- <li><a href="#about">About</a></li> -->
					<!-- <li><a href="#ss">Screenshot Games</a></li> -->
					<!-- <li><a href="#">Edit Account</a></li> -->
					<!-- <li><a href="#topscore">Top Score Global</a></li>
          <li><a href="#yourscore">Your Score</a></li> -->
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
							<h3 class="main-color">Edit Account</h3>
							<p class="main-color"><span class="fa fa-user-circle"></span>
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

								?> !</p>
								<button class="btn btn-success" id="btnHome"><span class="fas fa-home"></span> Home</button>
								<button class="btn btn-info" data-toggle="modal" data-target="#editAccount"><span class="fas fa-cog"></span> Edit Account</button>
						</div>
					</div>
					<!-- /home content -->

				</div>
			</div>
		</div>
		<!-- /home wrapper -->

	</header>
	<!-- /Header -->

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
						<form id="modal-form-edit" action="edit.php" method="POST" role="form">
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




	<!-- Footer -->
	<footer id="footer" class="sm-padding bg-dark">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<div class="col-md-12">

					<!-- footer logo -->
					<div class="footer-logo">
						<a href="editAccount.php"><img src="img/logosnake-white.png" alt="logo"></a>
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
						<p>Copyright © 2018. Kelompok 7 P-WEB . Designed by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
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
					var btnHome  = $('#btnHome');
					var formEdit = $('#modal-form-edit');

					//back to home
					btnHome.click(function (){
							window.location.href = "home.php";
					});

					//form edit
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

					//set form value
					var username  = $('#username').val();
					$.ajax({
							url:"myaccount.php",
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

			});
	</script>
</body>
</html>
