<?php
require_once  'model/user.php';

$user = Users::selectForId(1);

	if ($user) {
		return $user;
	} else {
		echo "no se a encontrado ninguna persona";
	}

?>