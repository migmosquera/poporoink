<?php
	$msj='';
    if(isset($_POST['updateUser'])){
    	
		require_once 'model/user.php';
		$id = $_POST['id'];
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$facebook = $_POST['facebook'];
		$instagram = $_POST['instagram'];
		$username = $_POST['username'];
		$user->setName($name);
		$user->setEmail($email);
		$user->setPhone($phone);
		$user->setUrl_facebook($facebook);
		$user->setUrlInstagram($instagram);
		$user->update($id,$name,$email,$phone,$facebook,$instagram,$username);
		$msj = 'El usuario se a modificado';
		return $msj;
	}
?>