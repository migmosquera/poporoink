<?php
	$msj= "";
   	if(isset($_POST['saveComent'])){
   		
   		require_once 'model/blogs.php';
		$blog_name = $_POST['name'];
		$blog_email = $_POST['email'];
		$blog_coment = $_POST['coment'];
		$blog = Blog ::registerComent($blog_name, $blog_email, $blog_coment);
		$msj='el comentario se a enviado';
		require 'controller/showAllComent.php';
   	}
?>