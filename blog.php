<!DOCTYPE HTML>
<?php 
	require 'controller/showAllComent.php';
	require_once 'controller/createComent.php';
	require_once  'controller/changeLanguage.php';
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
										<a href="photoGallery.php"><?php echo $gallery ?></a>
									</li>
									<li>
										<a href="index.php#three"><?php echo $contactame ?></a>
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
						<?php echo $escribe_muro ?>
					</p>
				</header>
				<section class="wrapper style5">
					<div class="inner">
						<form action="controller/paginationComent.php" id="formUpdateUser" name="formUpdateUser" method="post" accept-charset="utf-8" class="formUpdate">
							<div class="containerUser">
								<div class="contentTitle">
									<h4 class="titleUser"><?php echo $msj_blog ?></h4>  
								</div>
								<div id="containerBlogAll" name="containerBlogAll" style="overflow-x: auto;">
									 <table >
									    <tr>
									      <td style="font-weight: 700"><?php echo $nombre ?>:</td>
									      <td style="font-weight: 700"><?php echo $comentario ?>:</td>
									    </tr>
									    <?php foreach($blog as $item): ?>
											<tr>
										      <td style="width: 30%;"><?php echo $item['name'] ?></td>
										      <td ><?php echo $item['coment'] ?></td>
										    </tr>
										<?php endforeach; ?>
									</table>
									
									<?php 
										if ($pagina != 1)
      											echo '<a style="border-bottom: 0" href="?pag='.($pagina-1).'"> < </a>';
										for( $i = 0; $i < $pagination; $i++ ){
										    $pagina_texto = $i + 1;
											$clase="";
											
											if($pagina == $pagina_texto)
	       										$clase = 'active';
												echo '<a class="pagination ' .$clase. ' " href="?pag=' . $pagina_texto .  '">' . $pagina_texto . '</a>';
											
										}
										if ($pagina != $pagination)
      											echo '<a style="border-bottom: 0" href="?pag='.($pagina+1).'"> > </a>';
									?>
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
									<h4 class="titleUser"><?php echo $dato_persona ?></h4>  
								</div>
								<p style="background-color: #DAECDE;width: 80%;  margin: 0 auto;"  ></p>
								<p class="msj"><?php echo $msj ?></p>
								<div id="containerLeft" class="subContainer">
					
									<p style="margin-bottom: 10px;"><?php echo $nombre ?></p>
									<input style="color: #000000;margin-bottom: 20px;" type="text" name="name" value="" id="name" required="required" />
									<p style="margin-bottom: 10px;"><?php echo $email ?></p>
									<input style="color: #000000;margin-bottom: 20px;" type="text" name="email" value="" id="email" required="required" />
									
								</div>
								<div id="containerRight" class="subContainerRight">
									<p style="margin-bottom: 10px;"><?php echo $comentario ?></p>
									<textarea class="inputClass"  name="coment" id="coment" required="required" maxlength="150"></textarea>
									
								</div>
								<button type="submit" class="myButton" name="saveComent" id="saveComent" ><span><?php echo $enviar ?></span></button>
								   			
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
		<script src="assets/js/jquery.scrollex.min.js"></script>
		<script src="assets/js/jquery.scrolly.min.js"></script>
		<script src="assets/js/skel.min.js"></script>
		<script src="assets/js/util.js"></script>
		<script src="assets/js/main.js"></script>

	</body>
</html>