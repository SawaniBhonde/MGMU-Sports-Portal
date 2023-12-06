<!doctype html>
<html lang="en">
	<head>
    <!-- Made by : Sawani Satish Bhonde, B-Tech-CSE_3088 -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta content="" name="keywords">
		<meta content="" name="description">
		<!-- Favicons -->
		<link href="../images/favicon.ico" rel="icon">

		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

		<!-- Bootstrap CSS File -->
		<link rel="stylesheet" href="../bootstrap-4.1.0-dist/css/bootstrap.min.css"/>

		<!-- Libraries CSS Files -->
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
		<link href="../lib/animate/animate.min.css" rel="stylesheet">

		<!-- Main Stylesheet File -->
		<link rel="stylesheet" href="../main.css">

		<title>Registraion</title>
	</head>
	<body>
	 <header id="header">
		<div class="container">

			<div id="logo" class="pull-left">
				<a href="../index.html#start"><img src="../images/logo2.png" width="100" height="40" alt="" title=""  /></img></a>
				<!--<h1><a href="#start">IITH Sports</a></h1>-->
			</div>

			<div id="logo2" class="pull-left">
				<a href="../index.html#start"><img src="../images/logo3.png" alt="" title=""  /></img></a>
			</div>

			<nav id="nav-menu-container">
				<ul class="nav-menu">
					<li class="menu-active"><a href="../index.html#start">Home</a></li>
					
					<!-- <li><a href="#news">News</a></li> -->

					<li class="menu-has-children"><a href="#sports">Sports</a>
						<ul>
						<li><a href="../sports/aquatics/aquatics.html">Aquatics</a></li>
						<li><a href="../sports/athletics/athletics.html">Athletics</a></li> 
						<li><a href="../sports/badminton/badminton.html">Badminton</a></li>
						<li><a href="../sports/basketball/basketball.html">Basketball</a></li>
						<li><a href="../sports/chess/chess.html">Chess</a></li>
						<li><a href="../sports/cricket/cricket.html">Cricket</a></li>
						<li><a href="../sports/e-sports/e_sports.html">E-Sports</a></li>
						<li><a href="../sports/football/football.html">Football</a></li>
						<li><a href="../sports/gym/gym.html">Gym</a></li>
						<li><a href="../sports/hockey/hockey.html">Hockey</a></li>
						<li><a href="../sports/lawnTennis/lawn_tennis.html">Lawn Tennis</a></li>
						<li><a href="../sports/tt/tt.html">Table Tennis</a></li>
						<li><a href="../sports/volleyball/volleyball.html">Volleyball</a></li>
						</ul>
					</li>
					<li><a href="../index.html#about">About Us</a></li>
					
					<li><a href="../index.html#team">Contact Us</a></li>
				</ul>
			</nav>
			</div>
		</header>

		<!--==========================
			Start Section
		============================-->
		<section id="start" class="start-athletics">
			<div class="start-container">
				<a href="#"></a><h1 class="loading">Register yourself<br>for Individual Sport</h1>
			</div>
		</section>

		<main id="main"><br><br><br>

			<!--==========================
				News Section
			============================-->
			
			<div class="row justify-content-center">
				<div class="col-md-7">
					<form action="connect2.php" method="post">
					<div class="form-group row">
					  <div class="col-md-6 mb-3 mb-lg-0">
						<input type="text" class="form-control" placeholder="First name" name="firstName">
					  </div>
					  <div class="col-md-6">
						<input type="text" class="form-control" placeholder="Last name" name="lastName">
					  </div>
					</div>

					<div class="form-group">
						<label for="email">Gender</label>
						<div>
						  <label for="male" class="radio-inline"><input type="radio" name="gender" value="m" id="male">Male</label>
						  <label for="female" class="radio-inline"><input type="radio" name="gender" value="f" id="male">Female</label>
						  <label for="others" class="radio-inline"><input type="radio" name="gender" value="o" id="male">Others</label>
						</div>
					  </div>
		  
					<div class="form-group row">
					  <div class="col-md-12">
						<input type="text" class="form-control" placeholder="Department" name="Dept">
					  </div>
					</div>
		  
					<div class="form-group row">
					  <div class="col-md-12">
						<input type="email" class="form-control" placeholder="Email" name="Email">
					  </div>
					</div>

					<div class="form-group row">
						<div class="col-md-12">
						  <input type="sport_name" class="form-control" placeholder="Sport Name" name="sportName">
						</div>
					  </div>
					
		  
					<div class="form-group row">
					  <div class="col-md-6">
		  
						<input type="submit" class="btn btn-primary py-3 px-5 btn-block" value="submit">
					  </div>
					</div>
		  
				  </form>
				</div>
			  </div>
		<!--==========================
			Footer
		============================-->
		<footer class="footer-distributed">

				<div class="footer-right">
					<a href="https://www.facebook.com/login.php"><i class="fa fa-facebook"></i></a>
					<a href="https://accounts.google.com/"><i class="fa fa-envelope"></i></a>
				</div>

				<div class="footer-left">
					<p>&copy; MGM JNEC Sports</p><br>
				</div>

		</footer><!-- #footer -->

		<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>



		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<!-- JavaScript Libraries -->
		<script src="../lib/jquery/jquery.min.js"></script>
		<script src="../lib/jquery/jquery-migrate.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
		<script src="../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
		<script src="../lib/easing/easing.min.js"></script>
		<script src="../lib/wow/wow.min.js"></script>

		<script src="../lib/waypoints/waypoints.min.js"></script>
		<script src="../lib/counterup/counterup.min.js"></script>
		<script src="../lib/superfish/hoverIntent.js"></script>
		<script src="../lib/superfish/superfish.min.js"></script>

		<!-- Template Main Javascript File -->
		<script src="../js/main.js"></script>
	</body>
</html>
