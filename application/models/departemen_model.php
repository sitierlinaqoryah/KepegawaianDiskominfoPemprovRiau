<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class departemen_model extends CI_Model{

	public function list_bidang(){
	$this->db->order_by('tabel_departemen','asc');
	$result = $this->db->get('tabel_departemen');
	
	$pilih['']='Silahkan pilih departemen';
	if($result->num_rows()>0){
		foreach ($result->result() as $row){
		$pilih[$row->nama_bidang]=$row->tabel_departemen;
		}
	}
	return $pilih;
	}
	
	public function getidbidang($id)
    {
        $sql = "SELECT * FROM tabel_departemen WHERE no_bidang='$id'";
        $d = $this->db->query($sql);
        //$data = $d->result();
        $data=$d->row_array();
        return $data;
    }

}