<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class excel extends CI_Controller {

// Load database
 public function __construct() {
 parent::__construct();
 $this->load->model('excel_model');
 }

public function index() {

 $data = array( 'title' => 'Data Pegawai',
 'tabel_pegawai' => $this->excel_model->listing());
 $this->load->view('admin/excel_view',$data);
 
  $data['pegawai'] = $this->excel_model->view();
 }
 public function view(){
		return $this->db->get('tabel_pegawai')->result();
	}

public function export_excel(){
 $data = array( 'title' => 'Laporan Excel',
 'tabel_pegawai' => $this->excel_model->listing());
 $this->load->view('admin/laporan_excel',$data);
 }

}
?>