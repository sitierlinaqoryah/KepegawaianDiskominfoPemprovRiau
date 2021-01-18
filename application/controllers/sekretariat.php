<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class sekretariat extends CI_Controller {	
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
		$data['honor'] = $this->honor_model->view_sekretariat();
		$this->load->view('admin/thl/sekretariat_view', $data);
	}	


public function detail($id) {
    $data['honor'] = $this->honor_model->getid($id);
    $this->load->view('admin/thl/sekretariat_detail', $data);
  }

  public function sekretariat_public(){
    $data['honor'] = $this->honor_model->view_sekretariat();
    $this->load->view('admin/thl/sekretariat_public', $data);
  } 
  public function sekretariat_print(){
    $data['honor'] = $this->honor_model->view_sekretariat();
    $this->load->view('admin/thl/sekretariat_print', $data);
  } 

   public function sekretariat_detail_print(){
    $data['honor'] = $this->honor_model->view_sekretariat();
    $this->load->view('admin/thl/sekretariat_detail_print', $data);
  } 

	
  public function tambah(){
	$data = array();
    if($this->input->post('submit')){
      $upload = $this->honor_model->upload();
      
      if($upload['result'] == "success"){ 
        $this->honor_model->save($upload);
        redirect('sekretariat'); // Redirect kembali ke halaman awal / halaman view data
      }
      else{ // Jika proses upload gagal
        $data['message'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
      }
    }
    
    $this->load->view('admin/thl/thl_form', $data);
  }



public function hapus($id){
  		$honor = $this->honor_model->getid($id);
  		unlink('images/'.$honor->foto);
  		$this->honor_model->hapus($id);
  		redirect('sekretariat'); //mengalihkan halaman
	}

	  public function edit($id) {
	  $data['honor'] = $this->honor_model->getid($id);
    $this->load->view('admin/thl/sekretariat_edit', $data);
	}

	public function prosesedit($id) {
           $honor = $this->honor_model->honor($id);
    if(isset($_FILES["userfile"]["name"]))
      {
        //membuat konfigurasi
        $config = [

          'upload_path' => './images/',
          'allowed_types' => 'jpg|png|jpeg',
          'max_size' => 2048,
          'remove_space' => TRUE,
        ];
        $this->upload->initialize($config);
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload()) //jika gagal upload
        {
            $error = array('error' => $this->upload->display_errors()); //tampilkan error
        } else
        //jika berhasil upload
        {
            $file = $this->upload->data();
            //mengambil data di form
            $data = ['foto' => $file['file_name']];
            unlink('images/'.$honor->foto); //menghapus gambar yang lama
        }
      }
     
      $data['nama']   = set_value('nama');
      $data['kegiatan']   = set_value('kegiatan');
      $data['tmt_kerja']   = set_value('tmt_kerja');
      $data['jabatan']   = set_value('jabatan');      
      $data['no_spk']   = set_value('no_spk');
      $data['nik']   = set_value('nik');
      $data['tempat_lahir']   = set_value('tempat_lahir');
      $data['tgl_lahir']   = set_value('tgl_lahir');
      $data['agama']   = set_value('agama');
      $data['jk']   = set_value('jk');
      $data['no_tlpn']   = set_value('no_tlpn'); 
      $data['gaji']   = set_value('gaji');
      $data['email']   = set_value('email');
      $data['alamat']   = set_value('alamat');
      $data['pendidikan']   = set_value('pendidikan'); 
      $data['bidang']   = set_value('bidang');
       $data['no_rek']   = set_value('no_rek');


      $this->honor_model->ubah($id, $data); //memasukan data ke database
      redirect('sekretariat'); //mengalihkan halaman
  }



	
}
