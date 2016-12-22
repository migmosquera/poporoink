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
	
	
?>