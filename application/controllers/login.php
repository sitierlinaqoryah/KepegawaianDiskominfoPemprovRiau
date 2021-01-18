<?php
class login extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('login_model');
		$this->load->library('session');
		$this->load->helper('url');
    	$this->load->helper('form');
 
	}
 
	function index(){
		$this->load->view('login_view');
	}
 
	function aksi_login(){
		$username=htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
        $password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);

        $cek_login=$this->login_model->cek_login($username,$password);

       	if($cek_login->num_rows() > 0){ 

           $cek_login=$this->login_model->cek_login($username,$password);
           $data=$cek_login->row_array();
         redirect('admin');
                           
           echo "login berhasil";
       }
            
		 else{
		 	echo "username dan password salah !";
		 }
		
		
	}

 
	function logout(){
		$this->session->unset_userdata('username','password');
   		$this->session->sess_destroy();
  		redirect('login');
}
}
	?>