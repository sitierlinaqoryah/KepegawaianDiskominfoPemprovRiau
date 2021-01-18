<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class tampilbidang_ikp extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->model('tampilbidang_ikp_model');
		$this->base=$this->config->item('base_url');
	}
	 public function index()
    {
	redirect($this->base.'index.php/tampilbidang_ikp/','refresh');
        // memanggil method get semua pegawai dari pegawai_model
       // $x['data']=$this->tampilbidang_ikp->getAllPegawai();
       //  $this->load->view('admin/TampilPegawai',$x);
        
    }
}
?>