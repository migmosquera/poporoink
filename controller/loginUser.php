<?php
	include_once "model/user.php";
	session_start();
	$msjError = '';
	if(isset($_POST['btnLogin'])){
		$username = $_POST['username'];
		$pass = $_POST['password'];
		$user = Users::loginUser($username,$pass);
		if($user){
			$_SESSION['id']=$user->getId();
			header('location: user.php');
		}else{
			$msjError = 'Clave o Usuario incorrecto';
			return $msjError;
		}
	}
	/*$username = trim($_POST['username']);
	$pass = trim($_POST['password']);
	$errorMsj = 'hola miguel';
	return $errorMsj;
	
	echo "paso por aqui";
	require_once  'index.php';*/
	
	/*$username = $username = trim($_POST['username']);
	$pass = $pass = trim($_POST['password']);
	$login = Users::login($username, $pass)*/
	
	/*if ($_SERVER["REQUEST_METHOD"] == "POST"){
		$username = mysqli_real_escape_string(Conectar::conexion(),$_POST['username']);
		$pass = mysqli_real_escape_string(Conectar::conexion(),$_POST['password']);
		
		$query = "SELECT id FROM user WHERE email = '$username' and password = (md5('$pass'))";
		$result = mysqli_query(Conectar::conexion(),$query);
	    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	    $count = mysqli_num_rows($result);
		if($count == 1) {
	         //session_register('username');
	         $users = $_SESSION['username'] = $username;
	         header("location: ../user.php");
	    }else {
	         $error = "Tu clave o usuario es incorrecto";
			 echo $error;
	   	}
			
		
	}*/

?>