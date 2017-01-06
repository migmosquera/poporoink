<!DOCTYPE HTML>
<?php 
	require 'controller/sendEmail.php';
?>
<html>
	<head>
		<title>User</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/blog.css" />
	</head>
	<body>

		<!-- Page Wrapper -->
		<div id="page-wrapper">

			<!-- Header -->
			<header id="header">
				<h1><a href="index.php">POPOROINK</a></h1>
				<nav id="nav">
					<ul>
						<li class="special">
							<a href="#menu" class="menuToggle"><span>Menu</span></a>
							<div id="menu">
								<ul>
									<li>
										<a href="index.php">Home</a>
									</li>
									<li>
										<a href="photoGallery.php">Galeria</a>
									</li>
									<li>
										<a href="index.php#three">Contactame</a>
									</li>
									<li>
										<a href="blog.php">Blog</a>
									</li>
									<li>
										<a id="myBtn" href="login.php" style="cursor: pointer;">Login</a>
									</li>
								</ul>
							</div>
						</li>
					</ul>
				</nav>
			</header>

			<!-- Main -->
			<article id="main">
				<header>
					<p>
						Si deseas algun tipo de informacion escribenos y nos comunicaremos con usted
					</p>
				</header>
				<section class="wrapper style5">
					<div class="inner">
						<form action="" id="formUpdateUser" name="formUpdateUser" method="post" accept-charset="utf-8" class="formUpdate">
							
						</form>
					</div>
				</section>
				
			</article>

		</div>

		<!-- Scripts -->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/jquery.scrollex.min.js"></script>
		<script src="assets/js/jquery.scrolly.min.js"></script>
		<script src="assets/js/skel.min.js"></script>
		<script src="assets/js/util.js"></script>
		<script src="assets/js/main.js"></script>

	</body>
</html>