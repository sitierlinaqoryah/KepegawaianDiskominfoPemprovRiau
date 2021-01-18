<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class pangkat extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->helper('form','url');
		$this->load->model('pangkat_model');
		$this->base=$this->config->item('base_url'); 
		$this->load->library('javascript');
		$this->load->library('session');
		$this->load->library('upload');
		
	}
	
	 public function index()
    {
        $data['no'] = $this->pangkat_model->getAllPegawai();
		$this->load->view('admin/pangkat_form', $data);
		}
		
	
	//CONTROLLER UNTUK KENAIKAN PANGKAT/GOLONGAN
	  public function naik_golongan(){
		$data['join2'] = $this->pangkat_model->view();
		$this->load->view('admin/naik_golongan_view', $data);
	}
	 public function publik_golongan(){
		$data['join2'] = $this->pangkat_model->view();
		$this->load->view('naikgol_publik', $data);
	}
	public function print_pegawai(){
		$data['join2'] = $this->pangkat_model->view();
	 $this->load->view('admin/print_pangkat.php',$data);
	 }
	
	public function tambah(){
		$no_pegawai = $this->input->post('no_pegawai');
		$tgl_pangkat = $this->input->post('tgl_pangkat');
 
		$data = array(
			'no_pegawai' => $no_pegawai,
			'tgl_pangkat' => $tgl_pangkat,
			);
		$this->pangkat_model->tambah($data,'tabel_pegawaigol');
		redirect('pangkat/naik_golongan');	
	}
	public function hapus($id){
  		$data ['pegawai'] = $this->pangkat_model->getid($id);
  		$this->pangkat_model->hapus($id);
  		redirect('pangkat/naik_golongan'); //mengalihkan halaman
	
	}
  
  	public function join2(){
	$data['join2']=$this->pangkat_model->join2();
	$this->load->view('admin/naik_golongan_view',$data);
	}
  
  
  public function getAllPegawai(){
  	$query = $this->db->query('SELECT no_pegawai FROM tabel_pegawai');
  	return $query->result();
  
  }
  	}
	
	//BATAS SAMPAI DISINI