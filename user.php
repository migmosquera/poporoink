<!DOCTYPE HTML>
<?php
	session_start();
?>
<html>
	<head>
		<title>User</title>
		
	</head>
	<body class="landing">
		<p>el usuario se a logeado</p>
		<p><?php echo $_SESSION['id'] ;?></p>
	</body>
</html>