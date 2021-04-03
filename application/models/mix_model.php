<?php


Class Mix_model extends CI_Model{
	function __construct(){
        // Call the Model constructor
        parent::__construct();
        //$this->load->library('encrypt');

 	}
	function login($user, $pass){
	
		$this -> db -> where('admin_name',$user);
		$query = $this -> db -> get('admin')->result();
	

		if(count($query)!=0){
			if(password_verify($pass, $query[0]->admin_password)) {
				return $query[0];
			}
			else{
				return false;
			}				
		}
		else{
			return false;
		}
	}
	function insertIntoAdmin($obj){
				
		$data= array(
				'admin_name'	    =>	 $obj['adminName'],
				'admin_password'	=>	 password_hash($obj['adminPassword'], PASSWORD_DEFAULT),
				'admin_phone'	    =>	 $obj['adminPhoneNumber'],
				'date'	    =>	 $obj['adminAddingDate'],
		);
	
		$query = $this -> db -> insert('admin',$data);
		if($query == 1){
			return $this->db->insert_id();
		}
		else{
			return false;
		}
	}

 	function getallAdmin(){
 		$this->db->order_by("admin_id","asec");
 		$query = $this->db->get('admin')->result();
 		 		
 		if(count($query)>0){
 			return $query;
 		}
 		else{
 			return false;
 		}
 	}	
	
	function insertIntoStudentInfo($obj){
				
		$data= array(
				'student_id_number'	 =>	 $obj['studentId'],
				'student_name'	     =>	 $obj['studentName'],
				'student_dob'	     =>	 $obj['studentDOB'], 
				'student_address'	 =>	 $obj['studentAddress'],
				'student_phone'	     =>	 $obj['studentPhone'],
				'student_email'	     =>	 $obj['studentEmail'],
				'instructor_name'	 =>	 $obj['instructorName'],
				'registration_date'	 =>	 $obj['studentRegDate'],

		);
	
		$query = $this -> db -> insert('studentinformation',$data);
		if($query == 1){
			return $this->db->insert_id();
		}
		else{
			return false;
		}
	}
	function getstudentInformation(){
 		$this->db->order_by("student_ID","asec");
 		$query = $this->db->get('studentinformation')->result();
 		 		
 		if(count($query)>0){
 			return $query;
 		}
 		else{
 			return false;
 		}
 	}
	function insertIntoTestStatus($obj){
				
		$data= array(
				'student_id'	 =>	 $obj['studentid'],
				'student_Name'	     =>	 $obj['studentname'],
				'theory_test_status'	     =>	 $obj['theoryteststatus'], 
				'theory_test_date'	 =>	 $obj['theoryTestDate'],
				'certificate_number'	     =>	 $obj['certificateNumber'],
				'practical_test_date'	     =>	 $obj['practicalTestDate'],
				'practical_test_status'	 =>	 $obj['practicalteststatus'],

		);
	
		$query = $this -> db -> insert('teststatus',$data);
		if($query == 1){
			return $this->db->insert_id();
		}
		else{
			return false;
		}
	}
	function getstudentteststatus(){
 		$this->db->order_by("serial","asec");
 		$query = $this->db->get('teststatus')->result();
 		 		
 		if(count($query)>0){
 			return $query;
 		}
 		else{
 			return false;
 		}
 	}
	function insertIntoStudentFees($obj){
				
		$data= array(
				'student_id_fees'	 =>	 $obj['stdID'],
				'student_name_fees'	 =>	 $obj['stdName'],
				'gear_box_type'	     =>	 $obj['gearbox'], 
				'hours'				 =>	 $obj['hours'],
				'per_hour_rate'	     =>	 $obj['perHourRate'],
		);
	
		$query = $this -> db -> insert('studentfees',$data);
		if($query == 1){
			return $this->db->insert_id();
		}
		else{
			return false;
		}
	}
	function getstudentFeesInfo(){
 		$this->db->order_by("fees_id","asec");
 		$query = $this->db->get('studentfees')->result();
 		 		
 		if(count($query)>0){
 			return $query;
 		}
 		else{
 			return false;
 		}
 	}	
 	function getnamebyid($id){
 		$this->db->where('usr_id',$id);
 		$query = $this->db->get('admin')->result();
 		
 		if(count($query)>0){
 			return $query;
 		}
 		else{
 			return false;
 		}
 	}
 	
 	function getAllAdmins(){
 		$this->db->order_by("usr_id","asec");
 		$query = $this->db->get('admin')->result();
 		 		
 		if(count($query)>0){
 			return $query;
 		}
 		else{
 			return false;
 		}
 	}

	function inserttext($obj){
				
		$data= array(
				'story_name'	    =>	 $obj['textHeading'],
				'story_details'	    =>	 $obj['textDetails'],
				// 'usr_pass'	    =>	$this->encrypt->encode($obj['admpass']),
				// 'usr_add'	    =>	 $obj['admadd'],
				// 'usr_email'	    =>	 $obj['admemail'],
				// 'usr_reg_date'  =>	 date("Y-m-d H:i:s"),
				// 'usr_phone'	    =>	 $obj['admphone']
		);
	
		$query = $this -> db -> insert('90days_table',$data);
		if($query == 1){
			return $this->db->insert_id();
		}
		else{
			return false;
		}
	}
function insertRhyme($obj){
				
		$data= array(
				'rhyme_name'	    =>	 $obj['rhymeHeading'],
				'rhyme_writerName'	    =>	 $obj['rhymeWriter'],
				'rhyme_full'	    =>	 $obj['rhymeFull'],
				// 'usr_pass'	    =>	$this->encrypt->encode($obj['admpass']),
				// 'usr_add'	    =>	 $obj['admadd'],
				// 'usr_email'	    =>	 $obj['admemail'],
				// 'usr_reg_date'  =>	 date("Y-m-d H:i:s"),
				// 'usr_phone'	    =>	 $obj['admphone']
		);
	
		$query = $this -> db -> insert('90rhyme',$data);
		if($query == 1){
			return $this->db->insert_id();
		}
		else{
			return false;
		}
	}	
	function checkAdmin($obj){
		$this->db->where('usr_name', $obj['admname']);
		$query = $this->db->get('admin')->result();
		if(count($query)>0){
			return $query[0];
		}
		else{
			return false;	
		}
	}
	
	function searchAdmins($obj){		
	$query = $this -> db -> get('admin')->result();
	//echo $this->db->last_query();
		
		if(count($query)>0){
			return $query;
		}
		else{
			return false;
		}		
	}
	
	function searchCustomers($obj){		
	$this->db->order_by("customer_reg_date","desc");
		$query = $this -> db -> get('customer')->result();
	//echo $this->db->last_query();
		
		if(count($query)>0){
			return $query;
		}
		else{
			return false;
		}		
	}
	
	function deleteStoryById($id){
		$this->db->where('id', $id);
		$query=$this->db->delete('90days_table');			
		if($query == 1){
			return true;
		}
		else{
			return false;
		}			
	}
	function deleteRhymeById($id){
		$this->db->where('rhyme_id', $id);
		$query=$this->db->delete('90rhyme');			
		if($query == 1){
			return true;
		}
		else{
			return false;
		}			
	}
	function deleteImageById($id){
		$this->db->where('portfolio_id', $id);
		$query=$this->db->delete('portfolio_img');			
		if($query == 1){
			return true;
		}
		else{
			return false;
		}			
	}
	function deleteAboutusImageById($id){
		$this->db->where('aboutus_id', $id);
		$query=$this->db->delete('about_us');			
		if($query == 1){
			return true;
		}
		else{
			return false;
		}			
	}
	function deleteServiceById($id){
		$this->db->where('service_id', $id);
		$query=$this->db->delete('services');			
		if($query == 1){
			return true;
		}
		else{
			return false;
		}			
	}	
	function deleteContactById($id){
		$this->db->where('contact_id', $id);
		$query=$this->db->delete('contact');			
		if($query == 1){
			return true;
		}
		else{
			return false;
		}			
	}

	function deleteCus($id){
		$this->db->where('customer_id', $id);
		$query=$this->db->delete('customer');			
		if($query == 1){
			return true;
		}
		else{
			return false;
		}			
	}
	
	function getAdminById($id){
		$this->db->where('usr_id', $id);
		$query = $this->db->get('admin')->result();
//		echo $this->db->last_query();
		if(count($query)>0){
			return $query[0];
		}
		else{
			return false;	
		}

	}
	
	function updateAdmin($obj){
		
		$data= array(

			'usr_name'	    =>	 $obj['admname'],
			//'usr_add'	    =>	 $obj['admadd'],
			'usr_email'	    =>	 $obj['admemail'],
			'usr_phone'	    =>	 $obj['admphone'],
		);
	
	   	$this->db->where('usr_id', $obj['hidEx1']);
	   	$query=$this->db->update('admin', $data);

	   	if($query == 1){
			return $obj['hidEx1'];
		}
		else{
			return false;
		}	
	}

	function getdata(){

 		$query = $this->db->get('90days_table')->result();
 		
 		if(count($query)>0){
 			return $query;
 		}
 		else{
 			return false;
 		}
 	}
 	function getPortfolioImage(){

 		$query = $this->db->get('portfolio_img')->result();
 		
 		if(count($query)>0){
 			return $query;
 		}
 		else{
 			return false;
 		}
 	}
  	function getAboutUs(){

 		$query = $this->db->get('about_us')->result();
 		
 		if(count($query)>0){
 			return $query;
 		}
 		else{
 			return false;
 		}
 	}
 	function getservices(){

 		$query = $this->db->get('services')->result();
 		
 		if(count($query)>0){
 			return $query;
 		}
 		else{
 			return false;
 		}
 	}	
  	function getContact(){

 		$query = $this->db->get('contact')->result();
 		
 		if(count($query)>0){
 			return $query;
 		}
 		else{
 			return false;
 		}
 	} 			
	function getRhyme(){

 		$query = $this->db->get('90rhyme')->result();
 		
 		if(count($query)>0){
 			return $query;
 		}
 		else{
 			return false;
 		}
 	} 
	function getWebslideImage(){

 		$query = $this->db->get('webslide_image')->result();
 		
 		if(count($query)>0){
 			return $query;
 		}
 		else{
 			return false;
 		}
 	}
	function getWebTopheading(){

 		$query = $this->db->get('webheading_info')->result();
 		
 		if(count($query)>0){
 			return $query;
 		}
 		else{
 			return false;
 		}
 	}
 	function getWebrecentWork(){

 		$query = $this->db->get('webrecent_work')->result();
 		
 		if(count($query)>0){
 			return $query;
 		}
 		else{
 			return false;
 		}
 	}	  	 
	function getPhoto(){

 		$query = $this->db->get('photogallery')->result();
 		
 		if(count($query)>0){
 			return $query;
 		}
 		else{
 			return false;
 		}
 	}  
 	function insertwebslideimage($obj){
				
		$data= array(
				'webslide_img'	    =>	 $obj['webslideImage'],
			    'webslide_text'		=>	 $obj['webslidetext'],
		);
		$query = $this -> db -> insert('webslide_image',$data);
		//echo $this->db->last_query();
		if($query == 1){
			return $this->db->insert_id();
		}
		else{
			return false;
		}
	} 
 	function insertwebinfo($obj){
				
		$data= array(
				'web_heading'	    =>	 $obj['webTopHeading'],
			    'web_service'		=>	 $obj['webOurService'],
		);
		$query = $this -> db -> insert('webheading_info',$data);
		//echo $this->db->last_query();
		if($query == 1){
			return $this->db->insert_id();
		}
		else{
			return false;
		}
	}	


 	function insertPortfolioImage($obj){
				
		$data= array(
				'portfolio_image'	    =>	 $obj['galleryimages'],
			    'portfolio_image_desc'		=>	 $obj['gallerydes'],
		);
		$query = $this -> db -> insert('portfolio_img',$data);
		//echo $this->db->last_query();
		if($query == 1){
			return $this->db->insert_id();
		}
		else{
			return false;
		}
	}
			
 	function insertwebRecentwork($obj){
				
		$data= array(
				'web_recentworkimage'	    =>	 $obj['recentworkimage'],
			    'web_recentworktext'		=>	 $obj['recentworktext'],
		);
		$query = $this -> db -> insert('webrecent_work',$data);
		//echo $this->db->last_query();
		if($query == 1){
			return $this->db->insert_id();
		}
		else{
			return false;
		}
	}
 	function insertaboutusimage($obj){
				
		$data= array(
				'aboutus_img'	    =>	 $obj['aboutusimages'],
			    'aboutus_text'		=>	 $obj['aboutustext'],
		);
		$query = $this -> db -> insert('about_us',$data);
		//echo $this->db->last_query();
		if($query == 1){
			return $this->db->insert_id();
		}
		else{
			return false;
		}
	}
 	function insertServiceimage($obj){
				
		$data= array(
				'service_image'	    =>	 $obj['servicesimage'],
			    'service_name'		=>	 $obj['serviceName'],
			    'service_price'	    =>	 $obj['servicePrice'],
			    'service_details'		=>	 $obj['serviceDetails'],
		);
		$query = $this -> db -> insert('services',$data);
		//echo $this->db->last_query();
		if($query == 1){
			return $this->db->insert_id();
		}
		else{
			return false;
		}
	}
 	function insertaboutus($obj){
				
		$data= array(
				'service_image'	    =>	 $obj['servicesimage'],
			    'service_name'		=>	 $obj['serviceName'],
			    'service_price'	    =>	 $obj['servicePrice'],
			    'service_details'		=>	 $obj['serviceDetails'],
		);
		$query = $this -> db -> insert('services',$data);
		//echo $this->db->last_query();
		if($query == 1){
			return $this->db->insert_id();
		}
		else{
			return false;
		}
	}	
 	function insertContact($obj){
				
		$data= array(
				'contact_details'	    =>	 $obj['contactdetails'],
			    'contact_number'		=>	 $obj['contactnumber'],
			    'contact_address'		=>	 $obj['contactaddress'],
		);
		$query = $this -> db -> insert('contact',$data);
		//echo $this->db->last_query();
		if($query == 1){
			return $this->db->insert_id();
		}
		else{
			return false;
		}
	}					
}