<?php
class coba_model extends CI_Model{
public function tampil(){
return $this->db->get('view_lama')->result();
}

}
?>