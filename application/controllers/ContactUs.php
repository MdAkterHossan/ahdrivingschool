<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ContactUs extends CI_Controller {
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
		$this->load->view('contactUs_view',$data);
		$this->load->view('header_view',$data);

	}





public function contact(){


    $customername = $_POST['customername'];
    $customeremail = $_POST['customeremail'];
    $customerphone = $_POST['customerphone'];
    $message = $_POST['message'];



        // Load PHPMailer library
        $this->load->library('phpmailer_lib');
        
        // PHPMailer object
        $mail = $this->phpmailer_lib->load();
        
        // SMTP configuration
        $mail->isSMTP();
        $mail->Host     = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'akter50hossan@gmail.com';
        $mail->Password = 'skakter50';
        $mail->SMTPSecure = 'tls'; //when it goes to live server it will be 'ssl'
        $mail->Port     = 587;
        
        $mail->setFrom('akter50hossan@gmail.com', 'Test');
        $mail->addReplyTo('akter50hossan@gmail.com', 'Test');
        
        // Add a recipient
        $mail->addAddress('akter50hossan@gmail.com');
        
        // Add cc or bcc 
        //$mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');
        
        // Email subject
        $mail->Subject = 'Contact';
        
        // Set email format to HTML
        $mail->isHTML(true);
        
        // Email body content
        //$mailContent = "<h1>Send HTML Email using SMTP in CodeIgniter</h1>
            //<p>This is a test email sending using SMTP mail server with PHPMailer.</p>";
       // $mail->Body = $mailContent;
        

        $mail->Body = "<h3> Customer Name : $customername <br> Email : $customeremail <br>Phone : $customerphone <br> Message : $message </h3>";
        // Send email
        if(!$mail->send()){
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }else{
            echo "<br><br><br><br><h1>  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
            &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
            Thank you ! Your Message has been sent</h1>" ;

        }//$this->load->view('book_view');
    }

}
