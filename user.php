<!DOCTYPE HTML>
<?php
	include_once 'controller/updateUser.php';
	include_once 'controller/logout.php';
?>
<html>
	<head>
		<title>Generic - Spectral by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/user.css" />	
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header">
						<h1><a href="index.html">POPOROINK</a></h1>
						<nav id="nav">
							<ul>
								<li class="">
									<a  class=""><span>Salir</span></a>
								</li>
							</ul>
						</nav>
					</header>

				<!-- Main -->
					<article id="main">
						<header>
							<p>Panel de Configuracion de la Pagina Web</p>
						</header>
						<section class="wrapper style5">
							<div class="inner">
								<form action="" id="formUpdateUser" name="formUpdateUser" method="post" accept-charset="utf-8" class="formUpdate">
									<div class="containerUser">
										<div class="contentTitle">
											<h4 class="titleUser">Datos del Tatuador</h4>  
										</div>
										<input type="hidden" name="id" value="<?php echo $user->getId() ?>" id="id"/>
									 	<p>Nombre del Tatuador</p>
									 	<input style="color: #000000" type="text" name="name" value="<?php echo $user->getName() ?>" id="name"/>
									 	<p>Email del Tatuador</p>
									 	<input style="color: #000000" type="text" name="email" value="<?php echo $user->getEmail() ?>" id="email"/>
									 	<p>Telefono del Tatuador</p>
									 	<input style="color: #000000" type="text" name="phone" value="<?php echo $user->getPhone() ?>" id="phone"/>
									 	<p>Link de Facebook del Tatuador</p>
									 	<input style="color: #000000" type="text" name="facebook" value="<?php echo $user->getUrl_facebook() ?>" id="facebook"/>
									 	<p>Link de Instagram del Tatuador</p>
									 	<input style="color: #000000" type="text" name="instagram" value="<?php echo $user->getUrlInstagram() ?>" id="instagram"/>	
								   		<button type="submit" name="updateUser" id="updateUser" ><span>Guardar</span></button>
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