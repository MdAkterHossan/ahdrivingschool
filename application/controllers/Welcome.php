<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
		function __construct(){
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->model(array('mix_model'));
	}

public function index(){


		$data['message']= '';
		$this->load->view('welcome_message',$data);
		//$this->load->view('header_view',$data);

	}
}
