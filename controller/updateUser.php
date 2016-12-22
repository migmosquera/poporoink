<?php
	require_once  'model/user.php';
    session_start();
	$id=$_SESSION['id'];
	$user = Users::selectForId($id);
	if ($user) {
		return $user;
	} else {
		echo "no se a encontrado ninguna persona";
	}
	
	if(isset($_POST['formUpdateUser'])){
		echo "paso por aqui";
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$urlFacebook = $_POST['facebook'];
		$urlInstagram = $_POST['instagram'];
		$id = $_POST['id'];
		
		echo $name . '<br>';
		echo $email . '<br>';
		echo $phone . '<br>';
		echo $urlFacebook . '<br>';
		echo $urlInstagram . '<br>';
		echo $id . '<br>';
	}
?>