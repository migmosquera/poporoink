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
	private $username;
	const TABLA = 'users';

	public function getId() {
		return $this -> id;
	}

	public function getName() {
		return $this -> name;
	}

	public function setName($name) {
		$this -> name = $name;
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

	public  function setUrlInstagram($url_instagram) {
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
	
	public function getUsername() {
		return $this -> username;
	}

	public function setUsername($username) {
		$this -> username = $username;
	}

	public function __construct($name, $email, $password, $url_instagram, $url_facebook, $phone, $username, $id = null) {
		$this -> id = $id;
		$this -> name = $name;
		$this -> password = $password;
		$this -> email = $email;
		$this -> url_instagram = $url_instagram;
		$this -> url_facebook = $url_facebook;
		$this -> phone = $phone;
		$this -> username = $username;
	}

	public function register() {
		$conectar = new Conectar();

		$query = $conectar -> prepare('INSERT INTO ' . self::TABLA . ' (name, email, password, url_instagram, url_facebook, ) VALUES(:name, :email, :password, :url_instagram, :url_facebook, :phone)');
		$query -> bindParam(':name', $this -> name);
		$query -> bindParam(':email', $this -> email);
		$query -> bindParam(':password', $this -> password);
		$query -> bindParam(':url_instagram', $this -> url_instagram);
		$query -> bindParam(':url_facebook', $this -> url_facebook);
		$query -> bindParam(':phone', $this -> phone);
		$query -> execute();
		$this -> id = $conectar -> lastInsertId();

		$conectar = null;
	}

	public function update($id) {
		$conectar = new Conectar();
		
		$query = $conectar -> prepare('UPDATE users SET name = :name, email = :email, url_instagram = :url_instagram, url_facebook = :url_facebook, phone = :phone, username = :username WHERE id = :id');
		$query -> bindParam(':name', $this->getName());
		$query -> bindParam(':email', $this->getEmail());
		$query -> bindParam(':url_instagram', $this->getUrlInstagram());
		$query -> bindParam(':url_facebook', $this->getUrl_facebook());
		$query -> bindParam(':phone', $this->getPhone());
		$query -> bindParam(':username', $this->getUsername());
		$query -> bindParam(':id', $id);
		$query -> execute();
		$conectar = null;
		
	}

	public static function selectForId($id) {
		$conectar = new Conectar();
		$query = $conectar -> prepare('SELECT * FROM ' . self::TABLA . ' WHERE id = :id');
		$query -> bindParam(':id', $id);
		$query -> execute();
		$data = $query -> fetch();

		if ($data) {
			return new self($data['name'], $data['email'], $data['password'], $data['url_instagram'], $data['url_facebook'], $data['phone'], $id);
		} else {
			return FALSE;
		}
		$conectar = null;
	}

	public static function selectAll() {
		$conectar = new Conectar();
		$query = $conectar -> prepare('SELECT * FROM ' . self::TABLA);
		$query -> execute();
		$data = $query -> fetchAll();

		return $data;
		$conectar = null;
	}

	public static function loginUser($username, $pass) {

		$conectar = new Conectar();
		$query = $conectar -> prepare('SELECT * FROM ' . self::TABLA . ' WHERE username = :username AND password = md5(:pass)');
		$query -> bindParam(':username', $username);
		$query -> bindParam(':pass', $pass);
		$query -> execute();
		$data = $query -> fetch();
		if ($data) {
			echo "paso por aqui";
			return new self($data['name'], $data['email'], $data['password'], $data['url_instagram'], $data['url_facebook'], $data['phone'], $data['username'], $data['id']);
		} else {
			return FALSE;
		}
		$conectar = null;

	}

}
?>