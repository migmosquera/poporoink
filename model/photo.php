<?php
require_once 'conexion/conexion.php';
require_once 'model/user.php';
class Photo {
	private $id;
	private $photo;
	private $id_user;
	private $date_photo;
	const TABLA = 'photo';

	public function getId() {
		return $this -> id;
	}

	public function getPhoto() {
		return $this -> photo;
	}

	public function setPhoto($photo) {
		$this -> photo = $photo;
	}
	
	public function getIdUser() {
		return $this -> id_user;
	}
	
	public function getDatePhoto() {
		return $this -> date_photo;
	}

	public function setDatePhoto($date_photo) {
		$this -> date_photo = $date_photo;
	}

	
	public function __construct($photo, $id_user, $date_photo, $id = null) {
		$this -> id = $id;
		$this -> photo = $photo;
		$this -> id_user = $id_user;
		$this -> date_photo = $date_photo;
	}

	public function functionName($ruta,$idUser)
	{
		$conectar = new Conectar();

		$query = $conectar -> prepare('INSERT INTO ' . self::TABLA . ' (photo,idUser,datePhoto) VALUES(:photo, :idUser, :datePhoto)');
		$query -> bindParam(':photo', $ruta);
		$query -> bindParam(':idUser', $idUser);
		$query -> bindParam(':datePhoto', $this -> password);
		$query -> execute();
		$this -> id = $conectar -> lastInsertId();

		$conectar = null;	
	}

}
?>