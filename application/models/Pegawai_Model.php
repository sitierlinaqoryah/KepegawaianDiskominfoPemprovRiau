<?php
class Pegawai_Model extends CI_Model{

	// Fungsi untuk menampilkan semua data gambar
	public function view(){
		return $this->db->get('tabel_pegawai')->result();
	}
		public function view_pangkat(){
		return $this->db->get('view_lama')->result();
	}
	public function index(){
		$data['pegawai'] = $this->Pegawai_Model->view();
		$this->load->view('admin/pegawai_view', $data);
	}
	
	//DROPDOWN DEPARTEMEN
	public function getidbidang()
    {
        $sql = "SELECT * FROM tabel_departemen";
        $d = $this->db->query($sql);
        //$data = $d->result();
        $data= $d->row_array();
        return $data;
		
		
		 //  $sql = "SELECT tim.*, karyawan.* FROM tim INNER JOIN karyawan ON tim.tim_id=karyawan.tim_id WHERE kr_id='$KaryawanID'";
        //$d = $this->db->query($sql);
        ////$data = $d->result();
        //$data=$d->row_array();
        //return $data;
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
		'nama_pegawai'=>$this->input->post('nama_pegawai'),		
		'tempat_pegawai' => $this->input->post('tempat_pegawai'),
		'tgllahir_pegawai'=>$this->input->post('tggllahir_pegawai'),		
		'pangkat_terakhir'=>$this->input->post('pangkat_terakhir'),
		'tmt_pegawai'=>$this->input->post('tmt_pegawai'),	
		'no_sk'=>$this->input->post('no_sk'),
		'jabatan_pegawai'=>$this->input->post('jabatan_pegawai'),
		'tgl_sk'=>$this->input->post('tgl_sk'),
		'tmt2_pegawai'=>$this->input->post('tmt2_pegawai'),
		'no_sk2'=>$this->input->post('no_sk2'),
		'tgl_sk2'=>$this->input->post('tgl_sk2'),
		'eselon_pegawai'=>$this->input->post('eselon_pegawai'),
		'pendidikan_formal'=>$this->input->post('pendidikan_formal'),
		'pendidikan_perjenjangan'=>$this->input->post('pendidikan_perjenjangan'),
		'pengalaman_kerja'=>$this->input->post('pengalaman_kerja'),
		'karis'=>$this->input->post('karis'),
		'karsu'=>$this->input->post('karsu'),
		'karpeg'=>$this->input->post('karpeg'),
		'foto_pegawai' => $upload['file']['file_name'],
		'no_bidang'=>$this->input->post('no_bidang'),
		);
		
		$this->db->insert('tabel_pegawai', $data);
	
	}
	public function hapus($id){
   		$this->db->where('no_pegawai', $id);
   		$this->db->delete('tabel_pegawai');
 }
 	public function update($data,$where)
	{
		$this->db->update('tabel_pegawai',$data,$where);
	}
		
	public function pegawai($id){
		 $this->db->where('no_pegawai', $id);
		 return $this->db->get('tabel_pegawai')->row();
	 }
	 public function ubah($id, $data) {
     try{
       $this->db->where('no_pegawai',$id)->limit(1)->update('tabel_pegawai', $data);
       return true;
     }catch(Exception $e){}
 }

	public function getid($id){
     	$this->db->where('no_pegawai', $id);
     	return $this->db->get('tabel_pegawai')->result();
   }
     
	//MODEL UNTUK KENAIKAN PANGKAT
	public function naik_golongan_view(){
		return $this->db->get('view_lama')->result();
	}
	
	public function upload_pangkat(){
		$config['upload_path'] = './files/';
		//$config['allowed_types'] = 'doc|jpg|pdf|png|xlsx|jpeg';
		//$config['max_size']	= '0';
		//$config['remove_space'] = TRUE;
		
		//script upload pertama
		$this->upload->initialize($config);
		$this->load->library('Upload', $config); // Load konfigurasi uploadnya
		$this->upload->do_upload('dok_1');
		$dok_1=$this->upload->data();
		
		//script upload kedua
		$this->upload->do_upload('dok_2');
		$dok_2=$this->upload->data();
		
	}
	
	// Fungsi untuk menyimpan data ke database
	public function save_pangkat($upload){
		$data = array(
		'no_pegawai'=>$this->input->post('no_pegawai'),
		'tgl_pangkat1'=>$this->input->post('tgl_pangkat1'),
		'tgl_pangkat2'=>$this->input->post('tgl_pangkat2'),
		);
		
		$this->db->insert('tabel_pegawaigol', $data);
	
	}
	public function hapus_pangkat($id){
   		$this->db->where('no_pegawaigol', $id);
   		$this->db->delete('tabel_pegawaigol');
 }
 	public function update_pangkat($data,$where)
	{
		$this->db->update('tabel_pegawaigol',$data,$where);
	}
		
	public function pegawai_pangkat($id){
		 $this->db->where('no_pegawaigol', $id);
		 return $this->db->get('tabel_pegawaigol')->row();
	 }
	 public function ubah_pangkat($id, $data) {
     try{
       $this->db->where('no_pegawaigol',$id)->limit(1)->update('tabel_pegawaigol', $data);
       return true;
     }catch(Exception $e){}
 }

	public function getid_pangkat($id){
     	$this->db->where('no_pegawaigol', $id);
     	return $this->db->get('tabel_pegawaigol')->result();
   }
   
	//BATAS DISINI
 
}
