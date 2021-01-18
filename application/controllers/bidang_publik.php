<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class bidang_publik extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->helper('form','url');
		$this->load->model('Pegawai_Model');
		$this->base=$this->config->item('base_url'); 
		$this->load->library('javascript');
		$this->load->library('session');

   
	}
	//public function index()
  //  {
       // $x['data']=$this->Pegawai_Model->getAllPegawai();
     //    $this->load->view('bidang_ikp_publik',$x);
	// $data['pegawai'] = $this->Pegawai_Model->view();
	//	$this->load->view('bidang_ikp_publik', $data);
   // }
   
   //Fungsi untuk menampilkan data pegawai perdepartemen
   public function get_ikp(){
  	 $data['pegawai'] = $this->Pegawai_Model->view();
	$this->load->view('bidang_ikp_publik', $data);
   }
    public function get_infra(){
  	 $data['pegawai'] = $this->Pegawai_Model->view();
	$this->load->view('bidang_infra_publik', $data);
   }
    public function get_egov(){
  	 $data['pegawai'] = $this->Pegawai_Model->view();
	$this->load->view('bidang_egov_publik', $data);
   }
    public function get_st(){
  	 $data['pegawai'] = $this->Pegawai_Model->view();
	$this->load->view('bidang_st_publik', $data);
   }
    public function get_sandi(){
  	 $data['pegawai'] = $this->Pegawai_Model->view();
	$this->load->view('bidang_sandi_publik', $data);
   }
	// Fungsi untuk menampilkan semua data dalam tabel
	public function view(){
		return $this->db->get('tabel_pegawai')->result();
	}	
	//Fungsi untuk menampilkan informasi per departemen
	 public function rangkum_ikp(){
   	 $this->load->view('bidang_ikp_rangkum');
	 }
	 public function rangkum_infra(){
   	 $this->load->view('bidang_infra_rangkum');
	 }
	 public function rangkum_egov(){
   	 $this->load->view('bidang_egov_rangkum');
	 }
	 public function rangkum_st(){
   	 $this->load->view('bidang_st_rangkum');
	 }
	 public function rangkum_sandi(){
   	 $this->load->view('bidang_sandi_rangkum');
	 }
	 
	 //Fungsi untuk print halaman
	 public function print_egov(){
	  $data['pegawai'] = $this->Pegawai_Model->view();
	 $this->load->view('print.php',$data);
	 }
	
	
}
?>