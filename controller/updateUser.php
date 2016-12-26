<?php
	$msj='';
    if(isset($_POST['updateUser'])){
    	
		require_once 'model/user.php';
		$id = $_POST['id'];
		$user->setName($_POST['name']);
		$user->setEmail($_POST['email']);
		$user->setPhone($_POST['phone']);
		$user->setUrl_facebook($_POST['facebook']);
		$user->setUrlInstagram($_POST['instagram']);
		$user->update($id);
		$msj = 'El usuario se a modificado';
		return $msj;
	}
?>