<?php

//require_once("model/user.php");

require_once  'model/user.php';

$user = Users::getUser(2);
	/*if ($user) {
		echo "paso por aqui";
		echo $user->getName() . "<br>";
    	echo $user->getEmail() . "<br>";
		echo $user->getId() . "<br>";
		echo $user->getPhone() . "<br>";
		echo $user->getUrlInstagram() . "<br>";
		echo $user->getUrl_facebook() . "<br>";
	} else {
		
	}*/

require_once  'index.php';

?>