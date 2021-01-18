<?php
class gaji_model extends CI_Model{

	// Fungsi untuk menampilkan semua data gambar
	
	public function view(){
		return $this->db->get('view_kenaikan')->result();
	}
		
	public function index(){
		$data['gaji'] = $this->gaji_model->view();
		$this->load->view('admin/gaji_view', $data);
	}

	
	// Fungsi untuk melakukan proses upload file
	public function upload(){
		$config['upload_path'] = './images/';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['max_size']	= '2048';
		$config['remove_space'] = TRUE;
		
		$this->upload->initialize($config);
		$this->load->library('Upload', $config); // Load konfigurasi uploadnya
		if($this->upload->do_upload('foto_pegawai')){ // Lakukan upload dan Cek jika proses upload berhasil
			// Jika berhasil :
			$return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
			return $return;
		}else{
			// Jika gagal :
			$return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
			return $return;
		}
	}
	
	// Fungsi untuk menyimpan data ke database
	public function save($upload){
		$data = array(
		'nip_pegawai'=>$this->input->post('nip_pegawai'),	
		//'foto_pegawai' => $upload['file']['file_name'],
		'tgl_gaji'=>$this->input->post('tgl_gaji'),
		);
		
		$this->db->insert('tabel_pegawai', $data);
	
	}
	public function hapus($id){
   		$this->db->where('no_pegawai', $id);
   		$this->db->delete('tabel_kenaikan');
 }
		

	public function getid($id){
     	$this->db->where('no_pegawai', $id);
     	return $this->db->get('tabel_kenaikan')->result();
   }
      
	public function tambah($data,$table){
		$this->db->insert($table,$data);
	}
 
}
