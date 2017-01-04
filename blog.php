<!DOCTYPE HTML>
<?php 
	require_once 'controller/showAllComent.php';
	require_once 'controller/createComent.php';
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
						Escribe en Nuestro Muro
					</p>
				</header>
				<section class="wrapper style5">
					<div class="inner">
						<form action="" id="formUpdateUser" name="formUpdateUser" method="post" accept-charset="utf-8" class="formUpdate">
							<div class="containerUser">
								<div class="contentTitle">
									<h4 class="titleUser">Mensajes</h4>  
								</div>
								<div id="containerPhotoAll">
									<?php foreach($blog as $item): ?>
										<div id="name">
										  <?php echo $item['id'] ?>
										</div>
									<?php endforeach; ?>
								</div>
								   			
							</div>
						</form>
					</div>
				</section>
				<section class="wrapper style5">
					<div class="inner">
						<form action="" id="formUpdateUser" name="formUpdateUser" method="post" accept-charset="utf-8" class="formUpdate">
							<div class="containerUser">
								<div class="contentTitle">
									<h4 class="titleUser">Datos de la Persona</h4>  
								</div>
								<p style="background-color: #DAECDE;width: 80%;  margin: 0 auto;"  ></p>
								<div id="containerLeft" class="subContainer">
					
									<p style="margin-bottom: 10px;">Nombre</p>
									<input style="color: #000000;margin-bottom: 20px;" type="text" name="name" value="" id="name" required="required" />
									<p style="margin-bottom: 10px;">Email</p>
									<input style="color: #000000;margin-bottom: 20px;" type="text" name="email" value="" id="email" required="required" />
									
								</div>
								<div id="containerRight" class="subContainerRight">
									<p style="margin-bottom: 10px;">Comentario</p>
									<textarea class="inputClass"  name="coment" id="coment" required="required"></textarea>
									
								</div>
								<button type="submit" class="myButton" name="saveComent" id="saveComent" ><span>Enviar</span></button>
								   			
							</div>
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