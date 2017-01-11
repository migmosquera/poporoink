<!DOCTYPE HTML>
<?php
	require_once  'controller/controllerUsers.php';
?>
<html>
	<head>
		<title>Poporo Ink</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/index.css" />
		
		<script>
			var distributorToken = "1720436277.1677ed0.42958b3ad5494310a9fb5f366ffe2e40";
		</script>
	</head>
	<body class="landing">

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<h1><a href="index.php">Poporo Ink</a></h1>
						<nav id="nav">
							<ul>
								<li class="special">
									<a href="#menu" class="menuToggle"><span>Menu</span></a>
									<div id="menu">
										<ul>
											<li><a href="photoGallery.php">Galeria</a></li>
											<li><a href="blog.php">Blog</a></li>
											<li><a href="#three">Contactame</a></li>
											<li><a id="myBtn" href="login.php" style="cursor: pointer;">Login</a></li>
										</ul>
									</div>
								</li>
							</ul>
						</nav>
					</header>

				<!-- Banner -->
					<section id="banner">
						<video loop  autoplay muted class="video">
							<source src="video/video-1472087242.mp4" type="video/mp4">
  							<source src="video/video-1472087242.ogv" type="video/ogg">
						</video>
							<div class="inner">
								<h2>Poporo Ink</h2>
								<p>Bienvenidos a Poporo Ink<br />
								Un lugar para que conozcas mi trabajo<br />
								<a style="border-bottom: 0;" href="<?php echo $user->getUrlInstagram() ?>" target="_blank">Visita mi instagram</a>.</p>
							</div>
							<a href="#two" class="more scrolly">Conoceme</a>
					</section>

				<!-- One -->
					<section id="two" class="wrapper alt style2">
						<section class="spotlight">
							<div class="image"><img src="assets/images/poporoLogo.png" alt="" /></div><div class="content">
								<h2>Poporo INK</h2>
								<p class='textSectionOne'>Es la mejor de opcion a la hora de hacer un arte en tu cuerpo, nos especializamos en tatuajes en cualquier parte de tu cuerpo y garantizamos la calidad e higiene a la hora de hacer nuestro trabajo</p>
							</div>
						</section>
						<section class="spotlight">
							<div class="image"><img src="assets/images/manuel.jpg" alt="" style="padding-top: 15px; padding-bottom: 15px;"/></div><div class="content">
								<p style="margin-bottom: 10px">Esta una pagina para los amantes de los tatuajes, ya seas una persona que quiere por primera vez un tatuaje o ya tatuada, o con interes en iniciarte en el mundo del tatuaje. </p>
								<p> Te invito a que navegues por la pagina y disfrutes del mundo de los tatuajes. Aqui encontraras diferentes tipos de tatuajes, profecionalidad, calidad e higiene</p>
							</div>
						</section>
						<section class="spotlight">
							<div class="containerButtons">
								<a href="photoGallery.php" style="text-decoration:none; ">
									<div style="width: 99%; margin: 0 auto; height: 100%;">
										<p class="textButtons">Visita la Galeria de Tatuajes</p>
										<div id="imgTattoo"></div>
									</div>
								</a>
							</div>
							<div class="containerButtons">
								<a href="blog.php" style="text-decoration:none; ">
									<div style="width: 99%; margin: 0 auto; height: 100%;">
										<p class="textButtons">Escribe en nuestro Muro</p>
										<div id="imgBlog"></div>	
									</div>
								</a>
							</div>
							<div class="containerButtons">
								<a href="#three" class="more scrolly" style="text-decoration:none; ">
									<div style="width: 99%; margin: 0 auto; height: 100%;">
										<p class="textButtons">Contactame</p>
										<div id="imgContact"></div>	
									</div>
								</a>
							</div>
						</section>
					</section>
				<!-- Two -->
					<section id="one" class="wrapper style1 special">
						<div class="inner">
							<header class="major">
								<h2>Mis ultimos Tatuajes</h2>
							</header>
							<ul class="icons major">
								<div class="instagram" id="instragram">
									<div id="instafeed" style="display: inline-block">
	                				</div>
                				</div>
							</ul>
						</div>
					</section>

				<!-- Three -->
					<section id="three" class="wrapper style3 special">
						<div class="inner">
							<header class="major" style="margin-bottom: 0">
								<h2>Contactame a traves</h2>
							</header>
							<p>Mis redes Sociales</p>
							<div class="containerSocial" id="containerSocial">
							  <a target="_blank" class="icon" href="<?php echo $user->getUrlInstagram() ?>"><div id="socialInstagram"></div></a>
							  <a target="_blank" class="icon" href="<?php echo $user->getUrl_facebook() ?>"><div id="socialFacebook"></div></a>
							</div>
							<div class="containerFooterSocial" style="">
								<div class="containerSocialText">
									<div class="containerPhone">
									  	<img class="textInlineBlock" src="assets/images/phone.png" />
								  		<p style="margin-bottom: 15px" class="textInlineBlock">Celular</p>
									</div>
									<p class="textInlineBlock"><?php echo $user->getPhone() ?></p>
									<div class="containerEmail">
									  	<img class="textInlineBlock" src="assets/images/emails.png" />
								  		<p style="margin-bottom: 15px" class="textInlineBlock" >Email</p>
									</div>
								  	<p class="textInlineBlock"><?php echo $user->getEmail() ?></p>
								</div>
								<div class="containerSocialText">
								  	<p class="titleSocial">Ubicanos</p>
								  	<div style="margin: 0 auto; text-align: -webkit-center;">
										<div class="googleMaps" id="map"></div>
									</div>
									
								</div>
							</div>
						</div>
					</section>

				<!-- Footer -->
					<footer id="footer">
						<ul class="icons">
							<!--<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>-->
							<li><a target="_blank"  href="<?php echo $user->getUrl_facebook() ?>" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a target="_blank" href="<?php echo $user->getUrlInstagram() ?>" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
							<!-- <li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
							<li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>-->
						</ul>
						<ul class="copyright">
							<li>&copy; Creada por:</li><li><a  style="border-bottom: 0px"> Miguel Mosquera </a></li>
						</ul>
					</footer>

			</div>
			
			
		<!-- Scripts -->
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC0YRxhZY0MuH2yz1dHp0-E3PH6UgISLcQ&callback=initMap"></script>
			<script>
				function initialize() {
			        var myCenter = new google.maps.LatLng(10.269168, -68.0312526);
			        var mapProp = new google.maps.Map(document.getElementById('map'), {
			            center: myCenter,
			            scrollwheel: false,
			            zoom: 15
			        });
			
			        var map = new google.maps.Map(document.getElementById("map"), mapProp);
			
			        var marker = new google.maps.Marker({
			            position: myCenter,
			            animation: google.maps.Animation.BOUNCE
			        });
			
			        marker.setMap(map);
			     }
			        google.maps.event.addDomListener(window, 'load', initialize);
			</script>
			<script src="assets/js/jquery.min.js"></script>
			<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  			<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
  			<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<script src="assets/js/index.js"></script>
			<script src="assets/js/instafeed/instafeed.min.js"></script>
	</body>
</html>