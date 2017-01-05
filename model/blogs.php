<?php
require_once 'conexion/conexion.php';
class Blog {
	private $id;
	private $name;
	private $email;
	private $coment;
	private $date_blog;
	const TABLA = 'blog';

	public function getId() {
		return $this -> id;
	}

	public function getNameBlog() {
		return $this -> name;
	}

	public static function setNameBlog($name) {
		$this -> name = $name;
	}
	
	public function getEmailBlog() {
		return $this -> email;
	}
	
	public function setEmailBlog($email) {
		$this -> email = $email;
	}
	
	public function getComentBlog() {
		return $this -> coment;
	}

	public function setComentBlog($coment) {
		$this -> coment = $coment;
	}
	
	public function getDateBlog() {
		return $this -> coment;
	}

	public function setDateBlog($date_blog) {
		$this -> date_blog = $date_blog;
	}

	
	public function __construct($name, $email, $coment,  $date_blog, $id = null) {
		$this -> id = $id;
		$this -> name = $name;
		$this -> email = $email;
		$this -> coment = $coment;
		$this -> date_blog = $date_blog;
	}

	public static function registerComent($name,$email,$coment)
	{
		$conectar = new Conectar();
		$date_upload = date('Y-m-d'.' h:i:s');
		$query = $conectar -> prepare('INSERT INTO ' . self::TABLA . ' (name,email,coment,date) VALUES(:name, :email, :coment, :date)');
		$query -> bindParam(':name', $name);
		$query -> bindParam(':email', $email);
		$query -> bindParam(':coment', $coment);
		$query -> bindParam(':date', $date_upload);
		$query -> execute();
		$conectar = null;	
		return TRUE;
	}
	
	public static function allComent()
	{
		$conectar = new Conectar();
		$query = $conectar -> prepare('SELECT * FROM ' . self::TABLA . ' ORDER BY date DESC');
		$query -> execute();
		$data = $query -> fetchAll();
		return $data;
		$conectar = null;
	}
	
	public static function paginationComent($limit,$total)
	{
		$conectar = new Conectar();
		$query = $conectar -> prepare('SELECT * FROM ' . self::TABLA . ' ORDER BY date DESC LIMIT ' .$limit. ' , ' .$total);
		$query -> execute();
		$data = $query -> fetchAll();
		return $data;
		$conectar = null;
	}

}
?>