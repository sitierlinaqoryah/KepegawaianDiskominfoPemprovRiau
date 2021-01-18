<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class departemen extends CI_Controller{
	public function list_bidang(){
	$this->load->model('departemen_model');
	$this->load->helper('form','url');
	
	$pilih=array(
		'no_bidang'=>$this->departemen_model->list_bidang();
		
	)
	}
	public function getid_bidang($id){
	    $data['no_bidang']= $this->departemen_model->getid_bidang($id);
	  $this->load->view('admin/pegawai_form',$data);
	}


}