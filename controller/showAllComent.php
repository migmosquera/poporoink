<?php
    require_once 'model/blogs.php';
	$cant_blog = 10;
	$pagina="";
	if(isset($_GET['pag'])){
		$pagina = (int)$_GET['pag'];
	}
	$blog_total=Blog::allComent();
	$columns = count($blog_total);
	$pagination = ceil($columns/$cant_blog);
	$url = $_SERVER['HTTP_HOST']. ':' .$_SERVER['SERVER_PORT'].$_SERVER['REQUEST_URI'];
	if ($pagina == 1 || $pagina==""){
		$inicio= 0;
		$pagina = 1;
	} else{
		$inicio = ($pagina - 1) * $cant_blog;
	}
	$offset = $pagina*$cant_blog;
	$pagination = ceil($columns/$cant_blog);
	$blog=Blog::paginationComent($inicio,$cant_blog);
	
?>