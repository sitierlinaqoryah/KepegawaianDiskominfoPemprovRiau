<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class honor_model extends CI_Model {
	// Fungsi untuk menampilkan semua data gambar
	public function view(){
		return $this->db->get('view_ikp')->result();
	}
	public function view_sekretariat(){
		return $this->db->get('view_sekretariat')->result();
	}

	public function view_pengelolahan(){
		return $this->db->get('view_pengelolahan')->result();
	}

	public function view_persandian(){
		return $this->db->get('view_persandian')->result();
	}
	public function view_statistika(){
		return $this->db->get('view_statistika')->result();
	}

public function view_honor(){
		return $this->db->get('tb_honor')->result();
	}

	// Fungsi untuk melakukan proses upload file
	public function upload(){
		$config['upload_path'] = './images/';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['max_size']	= '2048';
		$config['remove_space'] = TRUE;
		
		$this->upload->initialize($config);
		$this->load->library('Upload', $config); // Load konfigurasi uploadnya
		if($this->upload->do_upload('foto')){ // Lakukan upload dan Cek jika proses upload berhasil
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
			'no'=>$this->input->post('no'),
			'nama'=>$this->input->post('nama'),
			'kegiatan'=>$this->input->post('kegiatan'),
			'tmt_kerja'=>$this->input->post('tmt_kerja'),
			'jabatan'=>$this->input->post('jabatan'),			
			'no_spk'=>$this->input->post('no_spk'),
			'nik'=>$this->input->post('nik'),
			'tempat_lahir'=>$this->input->post('tempat_lahir'),
			'tgl_lahir'=>$this->input->post('tgl_lahir'),
			'agama'=>$this->input->post('agama'),
			'jk'=>$this->input->post('jk'),
			'no_tlpn'=>$this->input->post('no_tlpn'),
			'gaji'=>$this->input->post('gaji'),
			'alamat'=>$this->input->post('alamat'),
			'email'=>$this->input->post('email'),
			'pendidikan'=>$this->input->post('pendidikan'),	
			'no_rek'=>$this->input->post('no_rek'),
			'bidang'=>$this->input->post('bidang'),
			'foto' => $upload['file']['file_name'],			
		);
		
		$this->db->insert('tb_honor', $data);
		

	}	
	public function update($data,$where)
	{
		$this->db->update('tb_honor',$data,$where);
	}

public function honor($id){
     $this->db->where('no', $id);
     return $this->db->get('tb_honor')->row();
 }

	public function hapus($id){
   		$this->db->where('no', $id);
   		$this->db->delete('tb_honor');
 }

	public function ubah($id, $data) {
     try{
       $this->db->where('no',$id)->limit(1)->update('tb_honor', $data);
       return true;
     }catch(Exception $e){}
 }

 	public function getid($id){
     	$this->db->where('no', $id);
     return $this->db->get('tb_honor')->result();
   }

 	
}