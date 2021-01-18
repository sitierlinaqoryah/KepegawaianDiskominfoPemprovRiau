<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class honor extends CI_Controller {	
	public function __construct(){
	parent::__construct();
    $this->load->helper('form','url');
    $this->load->model('honor_model');
    $this->base=$this->config->item('base_url'); 
    $this->load->library('javascript');
    $this->load->library('session');
    $this->load->library('upload');

	}

	public function index(){
		$data['honor'] = $this->honor_model->view_honor();
		$this->load->view('admin/thl/tampil_semua', $data);
	}	
 public function menu_public(){
    $data['honor'] = $this->honor_model->view();
    $this->load->view('admin/thl/menu_public', $data);
  } 

   public function cetak(){
    $data['honor'] = $this->honor_model->view_honor();
    $this->load->view('admin/thl/print', $data);
  } 

	
  public function tambah(){
	$data = array();
    if($this->input->post('submit')){
      $upload = $this->honor_model->upload();
      
      if($upload['result'] == "success"){ 
        $this->honor_model->save($upload);
        redirect('honor'); // Redirect kembali ke halaman awal / halaman view data
      }
      else{ // Jika proses upload gagal
        $data['message'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
      }
    }
    
    $this->load->view('admin/thl/thl_form', $data);

    
  }



  



	
}
