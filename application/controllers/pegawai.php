<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class pegawai extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->helper('form','url');
		$this->load->model('Pegawai_Model');
		$this->base=$this->config->item('base_url'); 
		$this->load->library('javascript');
		$this->load->library('session');
		$this->load->library('upload');
	}
	
	public function index(){
		$data['pegawai'] = $this->Pegawai_Model->view();
		$this->load->view('admin/pegawai_view', $data);
	}
	//DPRODOWN DARI DEPARTEMEN
	public function getid_bidang(){
	  $x['nobid']= $this->Pegawai_Model->getidbidang();
	  $this->load->view('admin/pegawai_form',$x);
	}
	
	public function tambah(){
		$data = array();
		if($this->input->post('submit')){
			$upload = $this->Pegawai_Model->upload();
			
			if($upload['result'] == "success"){ 
				$this->Pegawai_Model->save($upload);
				redirect('pegawai'); // Redirect kembali ke halaman awal / halaman view data
			}
			else{ // Jika proses upload gagal
				$data['message'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
			}
		}
		
		$this->load->view('admin/pegawai_form', $data);
	}
	public function hapus($id){
  		$pegawai ['pegawai'] = $this->Pegawai_Model->getid($id);
  		unlink('images/'.$pegawai->foto_pegawai);
  		$this->Pegawai_Model->hapus($id);
  		redirect('pegawai'); //mengalihkan halaman
	}

	//untuk edit
	  public function edit($id) {
	  $data['pegawai'] = $this->Pegawai_Model->getid($id);
    $this->load->view('admin/pegawai_edit', $data);
	}

	public function prosesedit($id) {
         $pegawai = $this->Pegawai_Model->pegawai($id);
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
        $this->load->library('Upload', $config);
        if (!$this->upload->do_upload()) //jika gagal upload
        {
            $error = array('error' => $this->upload->display_errors()); //tampilkan error
        } else
        //jika berhasil upload
        {
            $file = $this->upload->data();
            //mengambil data di form
            $data = ['foto_pegawai' => $file['file_name']];
            unlink('images/'.$pegawai->foto_pegawai); //menghapus gambar yang lama
        }
      }
	  
	 		
		$data['nip_pegawai']   = set_value('nip_pegawai');
		$data['nama_pegawai']   = set_value('nama_pegawai');	
		$data['tempat_pegawai' ]   = set_value('tempat_pegawai');
		$data['tgllahir_pegawai']   = set_value('tggllahir_pegawai');		
		$data['pangkat_terakhir']   = set_value('pangkat_terakhir');
		$data['tmt_pegawai']   = set_value('tmt_pegawai');
		$data['no_sk']   = set_value('no_sk');
		$data['jabatan_pegawai']   = set_value('jabatan_pegawai');
		$data['tgl_sk']   = set_value('tgl_sk');
		$data['tmt2_pegawai']   = set_value('tmt2_pegawai');
		$data['no_sk2']   = set_value('no_sk2');
		$data['tgl_sk2']   = set_value('tgl_sk2');
		$data['eselon_pegawai']   = set_value('eselon_pegawai');
		$data['pendidikan_formal']   = set_value('pendidikan_formal');
		$data['pendidikan_perjenjangan']   = set_value('pendidikan_perjenjangan');
		$data['pengalaman_kerja']   = set_value('pengalaman_kerja');
		$data['karis']   = set_value('karis');
		$data['karsu']   = set_value('karsu');
		$data['karpeg']   = set_value('karpeg');
		$data['no_bidang']   = set_value('no_bidang');

      $this->Pegawai_Model->ubah($id, $data); //memasukan data ke database
      redirect('pegawai'); //mengalihkan halaman
  }
	 public function detail($id) {
	  $data['pegawai'] = $this->Pegawai_Model->getid($id);
    $this->load->view('admin/tampil_detail', $data);
	}
	 public function print_pegawai(){
	  $data['pegawai'] = $this->Pegawai_Model->view();
	 $this->load->view('admin/print_pegawai.php',$data);
	 }

	
}
