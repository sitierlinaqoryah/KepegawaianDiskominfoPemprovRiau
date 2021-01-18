<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class informasi extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->helper('form','url');
		$this->load->model('Pegawai_Model');
		$this->base=$this->config->item('base_url'); 
		$this->load->library('javascript');
		$this->load->library('session');

   
	}
   public function get_pensiun(){
  	 $data['pegawai'] = $this->Pegawai_Model->view();
	$this->load->view('pensiun_publik', $data);
   }
    public function get_pangkat(){
  	 $data['pegawai'] = $this->Pegawai_Model->view_pangkat();
	$this->load->view('pangkat_publik', $data);
   }
    public function get_honor(){
  	 $data['honor'] = $this->Pegawai_Model->view();
	$this->load->view('honor_publik', $data);
   }
    public function get_magang(){
  	 $data['magang'] = $this->Pegawai_Model->view();
	$this->load->view('magang_publik', $data);
   }
   public function get_pangkat(){
  	 $data['join2'] = $this->pangkat_model->view();
		$this->load->view('naikgol_view', $data);
   }
	// Fungsi untuk menampilkan semua data dalam tabel
	public function view_pegawai(){
		return $this->db->get('tabel_pegawai')->result();
	}	
	
	
	
}
?>