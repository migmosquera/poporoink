<?php
class Conectar extends PDO {
	private $tipo_de_base = 'mysql';
	private $host = 'localhost';
	private $nombre_de_base = 'poporoink';
	private $usuario = 'root';
	private $contrasena = 'root';
	private $dns = 'mysql:dbname=poporoink;host=127.0.0.1';
	/*public static function conexion(){
	 $conexion=new mysqli("127.0.0.1", "root", "root", "poporoink", 3306);
	 $conexion->query("SET NAMES 'utf8'");
	 return $conexion;
	 }*/
	
	public function __construct() {
		try {
			parent::__construct($this->dns, "root", "root");
			echo 'Conexion exitosa' . "<br>";
		} catch(PDOException $e) {
			echo 'Ha surgido un error y no se puede conectar a la base de datos. Detalle: ' . $e -> getMessage();
			exit ;
		}
	}

}
?>