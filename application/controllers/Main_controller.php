<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_controller extends CI_Controller {
		function __construct(){
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->model(array('mix_model'));
	}

public function index(){


		$data['message']= '';
		//$data['aboutUs']  = $this->mix_model->getAboutUs();
		//$data['portfolio']  = $this->mix_model->getPortfolioImage();
		//$this->load->view('websiteMenu_view',$data);
		//$this->load->view('menu_view',$data);
		$this->load->view('book_view',$data);
		$this->load->view('header_view',$data);

	}





public function send(){

	$name = $_POST['name'];
	$email = $_POST['email'];
    $phone = $_POST['phone'];
	$message = $_POST['message'];



        // Load PHPMailer library
        $this->load->library('phpmailer_lib');
        
        // PHPMailer object
        $mail = $this->phpmailer_lib->load();
        
        // SMTP configuration
        $mail->isSMTP();// when live server delete this line
        $mail->Host     = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'iRepair.newcastle@gmail.com';
        $mail->Password = 'silverfish2130';
        $mail->SMTPSecure = 'tls'; //when it goes to live server it will be 'ssl'
        $mail->Port     = 587;
        
        $mail->setFrom('iRepair.newcastle@gmail.com', 'Test');
        $mail->addReplyTo('iRepair.newcastle@gmail.com', 'Test');
        
        // Add a recipient
        $mail->addAddress('iRepair.newcastle@gmail.com');
        
        // Add cc or bcc 
        //$mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');
        
        // Email subject
        $mail->Subject = 'Book';
        
        // Set email format to HTML
        $mail->isHTML(true);
        
        // Email body content
        //$mailContent = "<h1>Send HTML Email using SMTP in CodeIgniter</h1>
            //<p>This is a test email sending using SMTP mail server with PHPMailer.</p>";
       // $mail->Body = $mailContent;
        

        $mail->Body = "<h3>Name : $name <br> Email : $email <br>  Phone : $phone <br> Message : $message </h3>";
        // Send email
        if(!$mail->send()){
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }else{
            echo "<h1>Thank you ! Your Message has been sent</h1>";

        }//$this->load->view('book_view');
    }

}
