<!DOCTYPE HTML>
<?php
	session_start();
	include_once 'controller/showAllPhoto.php';
	require_once  'controller/changeLanguage.php';
?>
<html>
	<head>
		<title>User</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/prettyPhoto.css" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/phptoGallery.css" />	
	</head>
	<body>

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header">
						<h1><a href="controller/logout.php">POPOROINK</a></h1>
						<nav id="nav">
							<ul>
								<li class="special">
									<a href="#menu" class="menuToggle"><span>Menu</span></a>
									<div id="menu">
										<ul>
											<li><a href="index.php">Home</a></li>
											<li><a href="blog.php">Blog</a></li>
											<li><a href="index.php#three"><?php echo $contactame ?></a></li>
											<li><a id="myBtn" href="login.php" style="cursor: pointer;">Login</a></li>
										</ul>
									</div>
								</li>
							</ul>
						</nav>
					</header>

				<!-- Main -->
					<article id="main">
						<header>
							<p><?php echo $galeria_foto ?></p>
						</header>
						<section class="wrapper style5">
							<div class="inner">
								<form action="" method="post" enctype="multipart/form-data" class="formUpdate">
									<div  class="containerUser">
										<div class="contentTitle">
											<h4 class="titleUser"><?php echo $tatuajes ?></h4> 
										</div>	
										<div id="containerPhotoAll">
											 <?php foreach($photo as $item): ?>
												<div id="containerPhoto_<?php echo $item['id'] ?>" class="containerPhoto">
													 <a href=" <?php echo $item['photo'] ?>" rel="prettyPhoto">
											              <img src=" <?php echo $item['photo'] ?>" class="img-imagenUser" style="max-height: 207px;"> 
											        </a>
											       	<!--<img id="imagenUser_<?php echo $item['id'] ?>" class="imagenUser" src=" <?php echo $item['photo'] ?>" alt="" />-->
											       	
											    </div>
											<?php endforeach; ?>
										</div>
									</div>
								</form>
							</div>
						</section>
					</article>

			</div>
			<footer id="footer">
				
				<form action="" method="post" accept-charset="utf-8">
							
					<input type="hidden" name="language" value="<?php echo $inputLanguage ?>" id="language"/>
					<button id="buttonChangeLanguage" class="buttonChangeLanguage" type="submit" value="btnLenguage"><?php if($lang=='en')  { ?> <p class="nameChangeLanguage">Español</p>  <img src="assets/images/spain.png" alt="" /><?php } else { ?> <p class="nameChangeLanguage" >English</p>  <img src="assets/images/usa.png" alt="" /><?php } ?></button>
				</form>
						
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/bootstrap.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.prettyPhoto.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/photoGallery.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>