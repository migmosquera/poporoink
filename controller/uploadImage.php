<?php
 	$msjPhoto = '';
	if(isset($_POST['fileUpload'])) {
		include_once "model/photo.php";
		$dir_subida = '/opt/lampp/htdocs/poporoink/imagenes/';
		$target_file = $dir_subida . basename($_FILES["fileToUpload"]["name"]);
		$idUser = $_POST['id'];
		if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file)) {
			$msjPhoto = 'la imagen se a subido';
			$photo_url = '/poporoink/imagenes/'.basename($_FILES["fileToUpload"]["name"]);
		   	$photo= Photo::registerPhoto($photo_url, $idUser);
			return $msjPhoto;
		} else {
			$msjPhoto = 'Error al subir la Imagen';
			return $msjPhoto;
		}
	}
?>