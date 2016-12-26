<?php
	include_once "model/user.php";
	session_start();
	$msjError = '';
	if(isset($_POST['btnLogin'])){
		$username = $_POST['username'];
		$pass = $_POST['password'];
		$user = Users::loginUser($username,$pass);
		if($user){
			echo $user->getId();
			$_SESSION['id']=$user->getId();
			header('location: user.php');
		}else{
			$msjError = 'Clave o Usuario incorrecto';
			return $msjError;
		}
	}

?>