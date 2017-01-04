<!DOCTYPE HTML>
<?php
	include_once 'controller/showAllPhoto.php';
?>
<html>
	<head>
		<title>User</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/user.css" />	
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
											<li><a href="index.php">Home</a></li>
											<li><a href="blog.php">Blog</a></li>
											<li><a href="index.php#three">Contactame</a></li>
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
							<p>Galeria de fotos</p>
						</header>
						<section class="wrapper style5">
							<div class="inner">
								<form action="" method="post" enctype="multipart/form-data" class="formUpdate">
									<div  class="containerUser">
										<div class="contentTitle">
											<h4 class="titleUser">Fotos</h4> 
										</div>	
										<div id="containerPhotoAll">
											 <?php foreach($photo as $item): ?>
												<div id="containerPhoto_<?php echo $item['id'] ?>" style="max-width: 200px; width: 100%; display: inline-block; text-align: center; margin-right: 10px; vertical-align: top;">
											       	<img id="imagenUser_<?php echo $item['id'] ?>" style="height:210px; max-width: 200px" src=" <?php echo $item['photo'] ?>" alt="" />
											       	<div id="containerMsjBorrar_<?php echo $item['id'] ?>" style="height:210px; max-width: 200px;border: 1px solid #74AD83; border-radius: 5px;" class="labelHide" >
											       		<p style=" max-width: 200px; margin: 0">Deseas Elminiar la Imagen</p>
											       		<button class="buttonYEsDeletePhoto" type="button" name="<?php echo $item['id'] ?>" id="deletePhoto_<?php echo $item['id'] ?>" ><span>Si</span></button>
											       		<p class="buttonNotDeletePhoto" name="notDeletePhoto" id="notDeletePhoto" >No</button>
											       		<input type="hidden" name="id" value="<?php echo $item['id'] ?>" id="id"/>		
											       	</div>
											    </div>
											<?php endforeach; ?>
										</div>
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