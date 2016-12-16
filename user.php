<!DOCTYPE HTML>
<?php
	
	require_once  'controller/login.php';
	echo $users;
?>
<html>
	<head>
		<title>User</title>
		
	</head>
	<body class="landing">
		<p>el usuario se a logeado</p>
		<p><?php echo $users ;?></p>
	</body>
</html>