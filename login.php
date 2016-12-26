<!DOCTYPE HTML>
<?php 
	include_once 'controller/loginUser.php';
?>
<html>
	<head>
		<title>Login</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/login.css" />
		
	</head>
	<body style="background-color: #FFFFFF">

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
											<!--<li><a href="generic.html">Generic</a></li>
											<li><a href="elements.html">Elements</a></li>
											<li><a href="#">Sign Up</a></li>
											<li><a href="#">Log In</a></li>-->
										</ul>
									</div>
								</li>
							</ul>
						</nav>
					</header>

				<!-- Main -->
					<article id="main" style="display: table; width: 100%; height: 500px;">
					
				  		<div class="modal-content" style="display: table-cell; vertical-align: middle; width: 50%; text-align: center;" >
							   
							    <form action="" method="post" name="loginUser" id="loginUser" accept-charset="utf-8" class="formLogin">
							    	<h2 style="color: #000000">Login</h2>
								    <div class="modal-body">
								      	<p style="color: #000000; margin-bottom: 10px">Ingresa Usuario</p>
								      	<input type="text"required="required" id="username" name="username" style="color: #000000" placeholder="Usuario"/>	
								      	<p style="color: #000000; margin-bottom: 10px">Ingresa Clave</p>
								    	<input type="password" required="required" id="password" name="password" style="color: #000000" placeholder="Clave"/>
								    	<p style="color: red; margin-bottom: 0px; padding-top: 12px; "><?php echo $msjError ?></p>	  	
								    </div>
								    <div id="footer-modal" style="text-align: center; padding-bottom: 15px; padding-top: 15px">
									  	<button type="button" class="buttonLimpiar" name="limpiarBtn" value="Limpiar" id="limpiarBtn">Limpiar</button>
									  	<button type="submit" name="btnLogin" id="btnLogin" class="buttonRegister"><span>Login </span></button>
									</div>
								</form>
								
							  </div>
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
			<script src="assets/js/login.js"></script>
	</body>
</html>