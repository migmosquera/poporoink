<?php
    if(isset($_POST['sendEmail'])){
    	require_once('controller/email/class.phpmailer.php');
		$email_user = $_POST['sujectEmail'];
		$title = $_POST['suject'];
		$msj_send = $_POST['msjEmail'];
		
		$correo = new PHPMailer(); //Creamos una instancia en lugar usar mail()
 
		//Usamos el SetFrom para decirle al script quien envia el correo
		$correo->SetFrom("migmosquera@hotmail.com", "Mi Codigo PHP");
		 
		//Usamos el AddReplyTo para decirle al script a quien tiene que responder el correo
		$correo->AddReplyTo("migmosquera@hotmail.com","Mi Codigo PHP");
		 
		//Usamos el AddAddress para agregar un destinatario
		$correo->AddAddress("migmosquera2303@gmail.com", "Robot");
		 
		//Ponemos el asunto del mensaje
		$correo->Subject = "Mi primero correo con PHPMailer";
		 
		$correo->MsgHTML("Mi Mensaje en <strong>HTML</strong>");
		 
		//Enviamos el correo
		if(!$correo->Send()) {
		  echo "Hubo un error: " . $correo->ErrorInfo;
		} else {
		  echo "Mensaje enviado con exito.";
		}
	}
?>