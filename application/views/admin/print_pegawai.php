<!doctype html>
<html class="no-js" lang="">
<?php $this->load->view('layout/header') ?>
<body>
</br><br>
<center><h5>Daftar Pegawai Dinas</h5></center><br>
                 <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                      	<th>Nip Pegawai</th>
                        <th>Nama</th>
                        <th>Pangkat Terakhir</th>
                        <th>Jabatan</th>
                        <th>Eselon</th>
                        <th>Foto Pegawai</th>
                      </tr>
                    </thead>
                    <tbody>


<?php
if( ! empty($pegawai)){ // Jika data pada database tidak sama dengan empty (alias ada datanya)
    foreach($pegawai as $data){ // Lakukan looping pada variabel gambar dari controller
        echo "<tr>";
		echo "<td>".$data ->nip_pegawai."</td>";
        echo   "<td>".$data ->nama_pegawai."</td>";
		echo    "<td>".$data ->pangkat_terakhir."</td>";
		echo   "<td>".$data ->jabatan_pegawai."</td>";
		 echo   "<td>".$data ->eselon_pegawai."</td>";?>
		<td><img src="<?php echo base_url('images/'.$data->foto_pegawai);?>" width="100" height="100"></td>
		<?php
    }
}else{ // Jika data tidak ada
    echo "<tr><td colspan='5'>Data tidak ada</td></tr>";
}
?>
<script>
		window.print();
	</script>
</table>
</body>
</html>