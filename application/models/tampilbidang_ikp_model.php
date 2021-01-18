<?php
if	(!defined('BASEPATH')) exit('No direct script access allowed');
class tampilbidang_ikp_model extends CI_Model
{
	public function __construct()
	{
	$this->load->database();
	}

	public function index()
	{
		redirect($this->base.'tampilbidang_ikp.php','refresh');
		
	}
	
}
?>
