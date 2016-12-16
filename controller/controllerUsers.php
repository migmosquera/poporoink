<?php

//require_once("model/user.php");

require_once  'model/user.php';
$user=new Users();
$data=$user->getUser();

require_once  'index.php';

?>