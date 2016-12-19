<?php

//require_once("model/user.php");

require_once  'model/user.php';

$user = Users::selectForId(2);

	if ($user) {
		return $user;
	} else {
		echo "no se a encontrado ninguna persona";
	}

require_once  'index.php';

?>