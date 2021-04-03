<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AddAboutus extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->model(array('mix_model'));


	}
	public function index()
	{	
		$data['message']= '';
		$data['aboutus']  = $this->mix_model->getAboutUs();
		//$this->load->view('headerSecond_view',$data);
		$this->load->view('header_view',$data);
		$this->load->view('menu_view',$data);
		$this->load->view('addAboutUs_view',$data);
	


	}
	public function addAboutUs() {

		
		//$sn = $this->config->item('short_name');
		//$log_sess=$this->session->userdata($sn.'logged_in');

		//if($log_sess){
		$target_dir = "uploads/aboutusimages/";

		$target_file = $target_dir . basename($_FILES["aboutusimages"]["name"]);
		$uploadOk = 1;
		// Check if image file is a actual image or fake image
		if(isset($_POST["aboutusimages"])) {
			$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
			    if($check !== false) {
			        // echo "File is an image - " . $check["mime"] . ".";
			        $uploadOk = 1;
				} else {
			       // echo "File is not an image.";
			        $uploadOk = 0;
			    }
			}
			$_REQUEST['aboutusimages']='';
			// Check if $uploadOk is set to 0 by an error
				if ($uploadOk == 0) {
				 // echo "Sorry, your file was not uploaded.";
				 // if everything is ok, try to upload file
				} else {
				  if (move_uploaded_file($_FILES["aboutusimages"]["tmp_name"], $target_file)) {
				   // echo "The file ". basename( $_FILES["galleryimages"]["name"]). " has been uploaded.";
				    $_REQUEST['aboutusimages']=$target_file;
				  } else {
				    //echo "Sorry, there was an error uploading your file.";
				  }
				}	
		//$msg='';
		$res = $this->mix_model->insertaboutusimage($_REQUEST);
							//$msg="<div class='alert alert-success alert-dismissable'>
			//<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
    		//<strong>Hurray</strong> Successfully Image Added</div>";
    	//$data['name']  = $this->mix_model->getnamebyid($log_sess['id']);
		//$data['addGallery']  = $this->mix_model->getGallery();
		$data['message']= '';
		$data['aboutus']  = $this->mix_model->getAboutUs();
		//$this->load->view('headerSecond_view',$data);
		$this->load->view('header_view',$data);
		$this->load->view('menu_view',$data);
		$this->load->view('addAboutUs_view',$data);

	}
	public function deleteImage() {
		//$msg='';
		$res=$this->mix_model-> deleteAboutusImageById($_REQUEST['hidEx1']);
		// 	$msg="<div class='alert alert-danger alert-dismissable'>
		// <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
		//  Successfully Package Deleted</div>";
		
		$data['message']= '';
		$data['aboutus']  = $this->mix_model->getAboutUs();
		//$this->load->view('headerSecond_view',$data);
		$this->load->view('header_view',$data);
		$this->load->view('menu_view',$data);
		$this->load->view('addAboutUs_view',$data);
	
	}

	}
	// public function addNintyStory() {
	// 	$data['message']= '';
	// 	$data['story']  = $this->mix_model->getdata();

	// 	$res = $this->mix_model->inserttext($_REQUEST);
	// 	$this->load->view('headerSecond_view',$data);
	// 	$this->load->view('header_view',$data);
	// 	$this->load->view('addPhotoGallery_view',$data);
	// }



