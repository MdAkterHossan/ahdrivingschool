<?php
use PHPMailer\PHPMailer\PHPMailer;
require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

if(isset($_POST['submit'])){

	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];

	try{
		$mail->isSMTP();
		$mail->Host ='smtp.gmail.com';
		$mail->SMTPAuth = true;
		$mail->Username = 'zakirjack50@gmail.com';
		$mail->Password = 'salina21';
		$mail->PHPMailer::ENCRYPTION_STARTTLS;
		$mail->Port = '587';
		
		$mail->setForm('zakirjack50@gmail.com');
		$mail->addAddress('zakirjack50@gmail.com');

		$mail->isHTML(true);
		$mail->Subject = 'Message Received';
		$mail->Body = "<h3>Name : $name <br> Email : $email <br> Message : $message</h3>";
		$mail->send();
	} catch(Exception $e){

	}
}

?>