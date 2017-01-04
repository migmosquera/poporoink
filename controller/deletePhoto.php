<?php
    if(isset($_POST['idPhotoData'])){
    	require_once '../conexion/conexion.php';
		$conectar = new Conectar();
    	$id_photo = $_POST['idPhotoData'];
		$query = $conectar -> prepare('SELECT * FROM photo WHERE id = :id');
		$query -> bindParam(':id', $id_photo);
		$query -> execute();
		$data = $query -> fetch();
		if ($data) {
			$delete = $conectar -> prepare('DELETE FROM photo WHERE id = :id');
			$delete -> bindParam(':id', $id_photo);
			$delete -> execute();
			unlink('/opt/lampp/htdocs/'.$data['photo']);
			echo "La imagen ha sido borrada";
		} else {
			echo "No se ah eliminado la imagen";
		}
		
	}
	
	
?>