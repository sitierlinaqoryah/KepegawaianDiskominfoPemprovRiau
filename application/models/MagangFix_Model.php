<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MagangFix_Model extends CI_Model {
	
	public function view(){
		return $this->db->get('tabel_magangfix')->result();
	}
	
	
	
	public function upload(){
		$config['upload_path'] = './images/';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['max_size']	= '2048';
		$config['remove_space'] = TRUE;
	
		$this->load->library('upload', $config); 
		if($this->upload->do_upload('foto_magang')){ 
			
			$return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
			return $return;
		}else{
			
			$return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
			return $return;
		}
	}
	
	
	public function save($upload){
		$data = array(
		'nama_magang'=>$this->input->post('nama_magang'),
		'jk_magang'=>$this->input->post('jk_magang'),		
		'nohp_magang'=>$this->input->post('nohp_magang'),
		'bidang'=>$this->input->post('bidang'),	
		'asal_magang'=>$this->input->post('asal_magang'),
		'foto_magang' => $upload['file']['file_name'],
			
		);
		
		$this->db->insert('tabel_magangfix', $data);
	}
	
	
	
	public function GetMagang($table){
		$res=$this->db->get($table);
		return $res->result_array();
	}
	public function magang($id){
     $this->db->where('id', $id);
     return $this->db->get('tabel_magangfix')->row();
   }
	
	public function getid($id){
     	$this->db->where('id', $id);
     return $this->db->get('tabel_magangfix')->result();
   }
   
   public function ubah($id, $data) {
     try{
       $this->db->where('id',$id)->limit(1)->update('tabel_magangfix', $data);
       return true;
     }catch(Exception $e){}
 }
 
 public function simpan($id, $data) {
     try{
       $this->db->where('id',$id)->limit(1)->insert('tabel_magangfix', $data);
       return true;
     }catch(Exception $e){}
 }

	public function hapus($id){
   		$this->db->where('id', $id);
   		$this->db->delete('tabel_magangfix');
 }
 
 
 public function get_keyword($keyword){
			$this->db->select('*');
			$this->db->from('tabel_magangfix');
			$this->db->like('nama_magang',$keyword);
			$this->db->or_like('asal_magang',$keyword);
			return $this->db->get()->result();
		}
 
}
