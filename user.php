<!DOCTYPE HTML>
<?php
	include 'controller/searchUser.php';
	include_once 'controller/updateUser.php';
	include_once 'controller/uploadImage.php';
	include_once 'controller/showAllPhoto.php';
	include_once 'controller/deletePhoto.php';
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
						<h1><a href="controller/logout.php">POPOROINK</a></h1>
						<nav id="nav">
							<ul>
								<li class="">
									<a href="controller/logout.php"  class=""><span>Salir</span></a>
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
										<p style="background-color: #DAECDE;width: 80%;  margin: 0 auto;"  ><?php echo $msj ?></p>
										<div id="containerLeft" class="subContainer">
											
										  	<input type="hidden" name="id" value="<?php echo $user->getId() ?>" id="id"/>
										  	<input type="hidden" name="username" value="<?php echo $user->getUsername() ?>" id="username"/>
										 	<p style="margin-bottom: 10px;">Nombre del Tatuador</p>
										 	<input style="color: #000000;margin-bottom: 20px;" type="text" name="name" value="<?php echo $user->getName() ?>" id="name"/>
										 	<p style="margin-bottom: 10px;">Email del Tatuador</p>
										 	<input style="color: #000000;margin-bottom: 20px;" type="text" name="email" value="<?php echo $user->getEmail() ?>" id="email"/>
										 	<p style="margin-bottom: 10px;">Telefono del Tatuador</p>
										 	<input style="color: #000000;margin-bottom: 20px;" type="text" name="phone" value="<?php echo $user->getPhone() ?>" id="phone"/>
										</div>
										<div id="containerRight" class="subContainerRight">
										  	<p style="margin-bottom: 10px;">Facebook del Tatuador</p>
									 		<input class="inputClass" type="text" name="facebook" value="<?php echo $user->getUrl_facebook() ?>" id="facebook"/>
									 		<p style="margin-bottom: 10px;">Instagram del Tatuador</p>
									 		<input class="inputClass" type="text" name="instagram" value="<?php echo $user->getUrlInstagram() ?>" id="instagram"/>
										</div>
									 		
								   		<button type="submit" class="myButton" name="updateUser" id="updateUser" ><span>Guardar</span></button>
								   			
									</div>
								</form>
							</div>
						</section>
						<section class="wrapper style5">
							<div class="inner">
								<form action="" method="post" enctype="multipart/form-data" class="formUpdate">
									<input type="hidden" name="id" value="<?php echo $user->getId() ?>" id="id"/>
									<div class="containerUser">
										<div class="contentTitle">
											<h4 class="titleUser">Subir Imagen</h4>  
										</div>
										<p style="background-color: #DAECDE;width: 80%;  margin: 0 auto; margin-bottom: 15px" ><?php echo $msjPhoto ?></p>	
											<input type="hidden" name="MAX_FILE_SIZE" value="3000000" />
											<p id="imageContainer" class="imagenContainer" ></p>
									 		<input type="file" name="fileToUpload" id="fileToUpload">	
								   			<button type="submit" class="myButton" name="fileUpload" id="fileUpload" ><span>Subir</span></button>
								   			
									</div>
								</form>
							</div>
						</section>
						<section class="wrapper style5">
							<div class="inner">
								<form action="" method="post" enctype="multipart/form-data" class="formUpdate">
									<div  class="containerUser">
										<div class="contentTitle">
											<h4 class="titleUser">Fotos Subida</h4> 
										</div>	
										<div id="containerPhotoAll">
											<form action="" id="formDeletePhoto" name="formDeletePhoto" method="post" accept-charset="utf-8">
											 <?php foreach($photo as $item): ?>
												<div id="containerPhoto_<?php echo $item['id'] ?>" style="max-width: 200px; width: 100%; display: inline-block; text-align: center; margin-right: 10px; vertical-align: top;">
											       	<img id="imagenUser_<?php echo $item['id'] ?>" style="height:210px; max-width: 200px" src=" <?php echo $item['photo'] ?>" alt="" />
											       	<div id="containerMsjBorrar_<?php echo $item['id'] ?>" style="height:210px; max-width: 200px;border: 1px solid #74AD83; border-radius: 5px;" class="labelHide" >
											       		<p style=" max-width: 200px; margin: 0">Deseas Elminiar la Imagen</p>
											       		<button class="buttonYEsDeletePhoto" type="button"  name="<?php echo $item['id'] ?>" id="deletePhoto" ><span>Si</span></button>
											       		<p class="buttonNotDeletePhoto" name="notDeletePhoto" id="notDeletePhoto" >No</button>
											       		<input class="inputHidden" type="hidden" lang="<?php echo $item['id'] ?>" name="idPhoto_<?php echo $item['id'] ?>"  id="idPhoto_<?php echo $item['id'] ?>" value=""  />
											       		
											       	</div>
											      
											    </div>
											    
											<?php endforeach; ?>  
											</form>
										</div>
										<div id="status"></div>	
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
			<script src="assets/js/user.js"></script>
			

	</body>
</html>