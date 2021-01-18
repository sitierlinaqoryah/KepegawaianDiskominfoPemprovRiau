<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class gaji extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->helper('form','url');
		$this->load->model('gaji_model');
		$this->base=$this->config->item('base_url'); 
		$this->load->library('javascript');
		$this->load->library('session');
		$this->load->library('upload');
		
	}
	
	 public function index(){
        $data['gaji'] = $this->gaji_model->view();
		$this->load->view('admin/gaji_view', $data);
		}
		
	public function tambah_view(){
		$data['gaji'] = $this->gaji_model->view();
		$this->load->view('admin/gaji_form', $data);
		}

	
	public function tambah(){
		$no_pegawai = $this->input->post('no_pegawai');
		$tgl_gaji = $this->input->post('tgl_gaji');
 
		$data = array(
			'no_pegawai' => $no_pegawai,
			'tgl_gaji' => $tgl_gaji,
			);
		$this->gaji_model->tambah($data,'tabel_kenaikan');
		redirect('gaji/');	
	}
	public function hapus($id){
  		$data ['gaji'] = $this->gaji_model->getid($id);
  		$this->gaji_model->hapus($id);
  		redirect('gaji'); //mengalihkan halaman
	
	}
  
  public function getAllPegawai(){
  	$query = $this->db->query('SELECT no_pegawai FROM tabel_pegawai');
  	return $query->result();
  
  }
  	}
	
	//BATAS SAMPAI DISINI