<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MagangBaru extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->model('MagangBaru_Model');
	}
	
	public function index(){
		$data['magang'] = $this->MagangBaru_Model->view();
		$this->load->view('admin/Magang/MagangBaru_view', $data);
		
	}

	public function tambah(){
		$data = array();
		if($this->input->post('submit')){ // Jika user menekan tombol Submit (Simpan) pada form
			// lakukan upload file dengan memanggil function upload yang ada di GambarModel.php
			$upload = $this->MagangBaru_Model->upload();
			
			if($upload['result'] == "success"){ // Jika proses upload sukses
				 
				$this->MagangBaru_Model->save($upload);
				$this->load->view('welcome_message');
				
				
				
			}else{ // Jika proses upload gagal
				$data['message'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
			}
		}
		
		
		
	}
	
	public function hapus($id){
  		$magang  = $this->MagangBaru_Model->getid($id);
  		unlink('images/'.$magang->foto_magang);
  		$this->MagangBaru_Model->hapus($id);
		redirect('MagangBaru');
		 
	}
	
	public function ubah($id){
    $data['magang'] = $this->MagangBaru_Model->getid($id);
    $this->load->view('/admin/Magang/MagangBaru_edit', $data);
  }
  
  public function detail($id){
    $data['magang'] = $this->MagangBaru_Model->getid($id);
    $this->load->view('/admin/Magang/MagangBaru_Detail1', $data);
  }
  

	
	
	
	public function proses_ubah($id){
    $magang = $this->MagangBaru_Model->magang($id);
    if(isset($_FILES["userfile"]["name"]))
      {
        //membuat konfigurasi
        $config = [
          'upload_path' => './images/',
          'allowed_types' => 'gif|jpg|png',
          'max_size' => 2048,
          'remove_space' => TRUE,
        ];
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload()) //jika gagal upload
        {
            $error = array('error' => $this->upload->display_errors()); //tampilkan error
        } else
        //jika berhasil upload
        {
            $file = $this->upload->data();
            //mengambil data di form
            $data = ['foto_magang' => $file['file_name']];
            unlink('images/'.$magang->foto_magang); //menghapus gambar yang lama
        }
      }
      $data['nama_magang']   = set_value('nama_magang');
      $data['jk_magang']   = set_value('jk_magang');
      $data['nohp_magang']   = set_value('nohp_magang');
      $data['asal_magang']   = set_value('asal_magang');

      $this->MagangBaru_Model->ubah($id, $data); //memasukan data ke database
      redirect('MagangBaru'); //mengalihkan halaman
  }
  
  
  public function proses_simpan($id){
    $magang = $this->MagangBaru_Model->magang($id);
    if(isset($_FILES["foto_magang"]["name"]))
      {
        //membuat konfigurasi
        $config = [
          'upload_path' => './images/',
          'allowed_types' => 'gif|jpg|png',
          'max_size' => 2048,
          'remove_space' => TRUE,
        ];
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload()) //jika gagal upload
        {
            $error = array('error' => $this->upload->display_errors()); //tampilkan error
        } else
        //jika berhasil upload
        {
            $file = $this->upload->data();
            //mengambil data di form
            $data = ['foto_magang' => $file['file_name']];
            
        }
      }
      $data['nama_magang']   = set_value('nama_magang');
      $data['jk_magang']   = set_value('jk_magang');
      $data['nohp_magang']   = set_value('nohp_magang');
	  $data['bidang']   = set_value('bidang');
      $data['asal_magang']   = set_value('asal_magang');
	  $data['foto_magang']   = set_value('foto_magang');
	  
      $this->MagangBaru_Model->simpan($id, $data); //memasukan data ke database
  		$this->MagangBaru_Model->hapus($id);
      redirect('MagangBaru'); //mengalihkan halaman
  }
  
}
