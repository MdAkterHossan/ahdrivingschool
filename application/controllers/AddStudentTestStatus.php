<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AddStudentTestStatus extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->model(array('mix_model'));


	}
	public function index(){	
		
		$log_sess=$this->session->userdata('logged_in');
	   	if($log_sess){
		
		$data['message']= '';
		$data['teststatus']  = $this->mix_model->getstudentteststatus();
		$this->load->view('header_view',$data);
		$this->load->view('menu_view',$data);
		$this->load->view('addStudentTestStatus_view',$data);
		
		}else{
			$data['message']="<div class='alert alert-danger alert-dismissable'>
			<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
	                <strong>Oops!</strong> Time out or session destroyed.</div>";
			$this->load->view('login_view',$data);
			$this->load->view('header_view',$data);
		}	


	}

	public function addTestStatus() {
		
		$log_sess=$this->session->userdata('logged_in');
	   	if($log_sess){
		
		$data['message']= '';
		$data['teststatus']  = $this->mix_model->getstudentteststatus();

		$res = $this->mix_model->insertIntoTestStatus($_REQUEST);
		$this->load->view('header_view',$data);
		$this->load->view('menu_view',$data);
		$this->load->view('addStudentTestStatus_view',$data);
		
	}else{
			$data['message']="<div class='alert alert-danger alert-dismissable'>
			<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
	                <strong>Oops!</strong> Time out or session destroyed.</div>";
			$this->load->view('login_view',$data);
			$this->load->view('header_view',$data);
		}
	
	}

}
