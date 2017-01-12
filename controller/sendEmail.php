<?php
	$msjSendEmail = "";
    if(isset($_POST['sendEmail'])){
    	require_once 'controller/email/PHPMailerAutoload.php';
    	require_once 'controller/email/class.phpmailer.php';
    	$name = $_POST['name'];
		$email = $_POST['email'];
		$msjEmail = $_POST['msjEmail'];
		
		$correo = new PHPMailer();
		$correo->IsSMTP();
		$correo->SMTPAuth = true;
		$correo->SMTPSecure = 'ssl';
		$correo->Host = "smtp.zoho.com";
		$correo->Port = 465;
		$correo->Username = "administrador@poporoink.com.ve";
		$correo->Password = "syslife12*";
		$correo->setFrom("administrador@poporoink.com.ve");
		$correo->addAddress('migmosquera2303@gmail.com');
		$correo->Subject = "correo enviado por '.$name.'";
		$correo->MsgHTML("<strong>Mensaje enviado por el usuario:</strong> $name </br> <strong>Email:</strong> $email  </br> <strong>Mensaje:</strong> $msjEmail  ");
		if(!$correo->Send()) {
		  $msjSendEmail = "Hubo un error: " . $correo->ErrorInfo;
		} else {
		  $msjSendEmail = "Mensaje enviado con exito.";
		}
    }
?>