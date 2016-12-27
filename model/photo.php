<?php
require_once 'conexion/conexion.php';
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

	public static function registerPhoto($photo,$idUser)
	{
		$conectar = new Conectar();
		$date_upload = date('Y-m-d'.' h:i:s');
		$query = $conectar -> prepare('INSERT INTO ' . self::TABLA . ' (photo,idUser,date_photo) VALUES(:photo, :idUser, :datePhoto)');
		$query -> bindParam(':photo', $photo);
		$query -> bindParam(':idUser', $idUser);
		$query -> bindParam(':datePhoto', $date_upload);
		$query -> execute();
		$conectar = null;	
		return TRUE;
	}
	
	public static function allPhoto()
	{
		$conectar = new Conectar();
		$query = $conectar -> prepare('SELECT * FROM ' . self::TABLA . ' ORDER BY date_photo' );
		$query -> execute();
		$data = $query -> fetchAll();
		return $data;
		$conectar = null;
	}
	


}
?>