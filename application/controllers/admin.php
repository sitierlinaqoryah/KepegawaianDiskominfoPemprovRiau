<?php

class admin extends CI_Controller{
	function __contruct(){
		parent::__construct();
		
		if($this->session->userdata('status') != "login"){
		redirect(base_url("login"));
		}
		}
		function pegawai(){
		return $this->db->get('tabel_pegawaigol')->result();
		}
		
		public function index(){
		$this->load->view('admin/admin_view');
		}
		

}

?>
