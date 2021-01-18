<?php
class m_pensiun extends CI_Model{
	
	function show_pensiun(){
		$hasil=$this->db->query("SELECT * FROM view_pegawai_pensiun");
		return $hasil;
	}

	function simpan_pensiun($nip_pegawai,$nama_pegawai,$golongan,$jenis_kelamin,$tgl_lahir,$tgl_pensiun){
		$hasil=$this->db->query("INSERT INTO tabel_pensiun (nip_pegawai,nama_pegawai,golongan,jenis_kelamin,tgl_lahir,tgl_pensiun) VALUES ('$nip_pegawai','$nama_pegawai','$golongan','$jenis_kelamin','$tgl_lahir','$tgl_pensiun')");
		return $hasil;
	}

	function edit_pensiun($nip_pegawai,$nama_pegawai,$golongan,$jenis_kelamin,$tgl_lahir,$tgl_pensiun){
		$hasil=$this->db->query("UPDATE tabel_pensiun SET nama_pegawai='$nama_pegawai',golongan='$golongan',jenis_kelamin='$jenis_kelamin',tgl_lahir='$tgl_lahir',tgl_pensiun='$tgl_pensiun' WHERE nip_pegawai='$nip_pegawai'");
		return $hsl;
	}

	function hapus_pensiun($nip_pegawai){
		$hasil=$this->db->query("DELETE FROM tabel_pensiun WHERE nip_pegawai='$nip_pegawai'");
		return $hasil;
	}
	function pensiun_publik(){
		$hasil=$this->db->query("SELECT * FROM view_pegawai_pensiun");
		return $hasil;
	}
	
}