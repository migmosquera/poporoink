<?php
 	
	if(isset($_POST['fileUpload'])) {
		include_once "model/photo.php";
		$dir_subida = '/opt/lampp/htdocs/img/';
		$target_file = $dir_subida . basename($_FILES["fileToUpload"]["name"]);
		if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file)) {
		    echo "El fichero es válido y se subió con éxito.\n";
			print getdate();
		} else {
		    echo "¡Posible ataque de subida de ficheros!\n";
		}
	}
?>