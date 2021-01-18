<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class pensiun extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->helper('form','url');
		$this->load->model('m_pensiun');
		$this->base=$this->config->item('base_url'); 
		$this->load->library('javascript');
	}
	function index(){
		$x['pensiun']=$this->m_pensiun->show_pensiun();
		$this->load->view('admin/v_pensiun',$x);
	}

	function simpan_pensiun(){
		$nip_pegawai=$this->input->post('nip_pegawai');
		$nama_pegawai=$this->input->post('nama_pegawai');
		$golongan=$this->input->post('golongan');
		$jenis_kelamin=$this->input->post('jenis_kelamin');
		$tgl_lahir=$this->input->post('tgl_lahir');
		$tgl_pensiun=$this->input->post('tgl_pensiun');
		$this->m_pensiun->simpan_pensiun($nip_pegawai,$nama_pegawai,$golongan,$jenis_kelamin,$tgl_lahir,$tgl_pensiun);
		redirect('pensiun');
	}

	function edit_pensiun(){
		$nip_pegawai=$this->input->post('nip_pegawai');
		$nama_pegawai=$this->input->post('nama_pegawai');
		$golongan=$this->input->post('golongan');
		$jenis_kelamin=$this->input->post('jenis_kelamin');
		$tgl_lahir=$this->input->post('tgl_lahir');
		$tgl_pensiun=$this->input->post('tgl_pensiun');
		$this->m_pensiun->edit_pensiun($nip_pegawai,$nama_pegawai,$golongan,$jenis_kelamin,$tgl_lahir,$tgl_pensiun);
		redirect('pensiun');
	}

	function hapus_pensiun(){
		$nip_pegawai=$this->input->post('nip_pegawai');
		$this->m_pensiun->hapus_pensiun($nip_pegawai);
		redirect('pensiun');
	}
	function pensiun_publik(){
		$x['pensiun']=$this->m_pensiun->pensiun_publik();
		$this->load->view('pensiun_publik',$x);
	}
}
