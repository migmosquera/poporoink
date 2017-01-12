<?php
    if(isset($_POST['sendEmail'])){
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
		$correo->Subject = "Mi primero correo con PHPMailer";
		$correo->MsgHTML("Mi Mensaje en <strong>HTML</strong>");
		if(!$correo->Send()) {
		  echo "Hubo un error: " . $correo->ErrorInfo;
		} else {
		  echo "Mensaje enviado con exito.";
		}
    }
?>