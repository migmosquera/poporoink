<?php
require_once 'conexion/conexion.php';
class Users {
	private $id;
	private $name;
	private $password;
	private $email;
	private $url_instagram;
	private $url_facebook;
	private $phone;
	const TABLA = 'user';

	public function getId() {
		return $this -> id;
	}

	public function getName() {
		return $this -> name;
	}

	public function setName($name) {
		$this -> nombre = $name;
	}

	public function getPassword() {
		return $this -> password;
	}

	public function setPassword($password) {
		$this -> password = $password;
	}

	public function getEmail() {
		return $this -> email;
	}

	public function setEmail($email) {
		$this -> email = $email;
	}

	public function getUrlInstagram() {
		return $this -> url_instagram;
	}

	public function setUrlInstagram($url_instagram) {
		$this -> url_instagram = $url_instagram;
	}

	public function getUrl_facebook() {
		return $this -> url_facebook;
	}

	public function setUrl_facebook($url_facebook) {
		$this -> url_facebook = $url_facebook;
	}

	public function getPhone() {
		return $this -> phone;
	}

	public function setPhone($phone) {
		$this -> phone = $phone;
	}

	public function __construct($name, $email, $password, $url_instagram, $url_facebook, $phone, $id = null) {
		$this -> id = $id;
		$this -> name = $name;
		$this -> password = $password;
		$this -> email = $email;
		$this -> url_instagram = $url_instagram;
		$this -> url_facebook = $url_facebook;
		$this -> phone = $phone;
	}

	public function updateAndCreate() {
		echo "guardar";
		$conectar = new Conectar();
		if ($this -> id) {
			echo "modificar";
			$query = $conectar -> prepare('UPDATE' . self::TABLA . 'SET name = :name, email = :email, url_instagram = :url_instagram, token_instagram = :token_instagram, phone = :phone WHERE id = :id');
			$query -> bindParam(':name', $this -> name);
			$query -> bindParam(':email', $this -> email);
			$query -> bindParam(':url_instagram', $this -> url_instagram);
			$query -> bindParam(':token_instagram', $this -> token_instagram);
			$query -> bindParam(':phone', $this -> phone);
			$query -> bindParam(':id', $this -> id);
			$query -> execute();
		} else {
			$query = $conectar -> prepare('INSERT INTO ' . self::TABLA . ' (name, email, password, url_instagram, url_facebook, phone) VALUES(:name, :email, :password, :url_instagram, :url_facebook, :phone)');
			$query -> bindParam(':name', $this -> name);
			$query -> bindParam(':email', $this -> email);
			$query -> bindParam(':password', $this -> password);
			$query -> bindParam(':url_instagram', $this -> url_instagram);
			$query -> bindParam(':url_facebook', $this -> url_facebook);
			$query -> bindParam(':phone', $this -> phone);
			$query -> execute();
			$this -> id = $conectar -> lastInsertId();
		}
		$conectar = null;
	}

	public static function selectForId($id) {
		$conectar = new Conectar();
		$query = $conectar->prepare('SELECT * FROM ' . self::TABLA . ' WHERE id = :id');
		$query -> bindParam(':id', $id);
		$query -> execute();
		$data = $query->fetch();
		
		if ($data) {
			return $data;
		}else{
			return FALSE;
		}
	}

	public static function selectAll() {
		$conectar = new Conectar();
		$query = $conectar->prepare('SELECT * FROM ' . self::TABLA );
		$query -> execute();
		$data = $query->fetchAll();
		
		return $data;
	}

}
?>