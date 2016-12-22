<?php
	if(isset($_POST['logoutBtn'])){
		if (session_destroy()){
			header('Location: index.php');
		}
	}
?>