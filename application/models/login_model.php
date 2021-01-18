<?php 
 
class login_model extends CI_Model{	
	function cek_login($username,$password){		
		 $query=$this->db->query("SELECT * FROM tabel_admin WHERE username='$username' AND password='$password' LIMIT 1");
		return $query;
	}	
}