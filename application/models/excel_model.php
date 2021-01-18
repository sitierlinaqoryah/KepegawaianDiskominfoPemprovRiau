<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class excel_model extends CI_Model {

public function __construct()
 {
 parent::__construct();
 $this->load->database();
 }
 public function index(){
		$data['pegawai'] = $this->excel_model->index();
		$this->load->view('admin/excel_view', $data);
	}
	 public function view(){
		return $this->db->get('tabel_pegawai')->result();
	}

// Listing
 public function listing() {
 return $this->db->get('tabel_pegawai')->result();
 }

}

?>