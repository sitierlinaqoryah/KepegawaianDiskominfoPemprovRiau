<?php
class pangkat_model extends CI_Model{

	public function index(){
		$data['join2'] = $this->pangkat_model->join2();
		$data['no'] = $this->pangkat_model->getAllPegawai();
		$this->load->view('admin/naik_golngan_view', $data);
	}
	// Fungsi untuk menampilkan semua data gambar
	public function view(){
		return $this->db->get('view_lama')->result();
  }
 	//public function join2(){
	//$query['join2']=$this->db->query("select tabel_pegawaigol.*, tabel_pegawai.nama_pegawai from tabel_pegawaigol join tabel_pegawai on tabel_pegawaigol.no_pegawai=tabel_pegawai.no_pegawai");
	// return $query['join2'];
	
	//}
	public function tambah_pangkat(){
		$data['pegawai'] = $this->pangkat_model->tambah_pangkat();
		$this->load->view('admin/pangkat_form', $data);
	}
		public function hapus($id){
   		$this->db->where('no_pegawai', $id);
   		$this->db->delete('tabel_pegawaigol');
 }
	public function getid($id){
     	$this->db->where('no_pegawai', $id);
     	return $this->db->get('tabel_pegawaigol')->result();
   }
      
	public function tambah($data,$table){
		$this->db->insert($table,$data);
	}
	
	public function join2(){
	$this->db->select('*');
	$this->db->from('tabel_pegawaigol');
	$this->db->join('tabel_pegawai','tabel_pegawai');
	}
	public function getAllPegawai(){
  	  //$hasil=$this->db->query("SELECT * FROM tabel_pegawai");
      //  return $hasil;
	 
	 // $query = $this->db->get('tabel_pegawai');
		//return $query;
		
		$this->load->database();
  $sql = ('select * from tabel_pegawai');
  $query = $this->db->query($sql);

  foreach($query->result_array() as $row) {
    $data[$row['no_pegawai']] = $row['nama_pegawai'];
  }

  return $data;

  }
	
	}
	?>