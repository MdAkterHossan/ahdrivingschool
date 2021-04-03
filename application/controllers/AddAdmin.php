<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AddAdmin extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->model(array('mix_model'));


	}
	public function index(){	
		
		$log_sess=$this->session->userdata('logged_in');
	   	if($log_sess){
		
		$data['message']= '';
		$data['admin']  = $this->mix_model->getallAdmin();
		$this->load->view('header_view',$data);
		$this->load->view('menu_view',$data);
		$this->load->view('addAdmin_view',$data);
		
		}else{
			$data['message']="<div class='alert alert-danger alert-dismissable'>
			<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
	                <strong>Oops!</strong> Time out or session destroyed.</div>";
			$this->load->view('login_view',$data);
			$this->load->view('header_view',$data);
		}	


	}

	public function addNewAdmin() {
		
		$log_sess=$this->session->userdata('logged_in');
	   	if($log_sess){
		
		$data['message']= '';
		$data['admin']  = $this->mix_model->getallAdmin();

		$res = $this->mix_model->insertIntoAdmin($_REQUEST);
		$this->load->view('header_view',$data);
		$this->load->view('menu_view',$data);
		$this->load->view('addAdmin_view',$data);
		
	}else{
			$data['message']="<div class='alert alert-danger alert-dismissable'>
			<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
	                <strong>Oops!</strong> Time out or session destroyed.</div>";
			$this->load->view('login_view',$data);
			$this->load->view('header_view',$data);
		}
	
	}

}
