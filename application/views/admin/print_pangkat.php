<!doctype html>
<html class="no-js" lang="">
<?php $this->load->view('layout/header') ?>
<body>
</br><br>
<center><h5>Daftar Pegawai Yang Akan Naik Golongan</h5></center><br>
                    <div class="card-body">
                 <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
					  <th>No</th>
                       <th>Nama Pegawai</th>
						<th>Tanggal naik</th>
						<th>Keterangan</th>
                      </tr>
                    </thead>
                    <tbody>


<?php
if( ! empty($join2)){ // Jika data pada database tidak sama dengan empty (alias ada datanya)
	$no=1;
    foreach($join2 as $data){ // Lakukan looping pada variabel gambar dari controller
        echo "<tr>";?>
		<td><?php echo $no++;?></td>
		<td><?php echo $data->no_pegawai;?></td> 
		<td><?php echo $data->tgl_pangkat;?></td>
		<td><span class="badge badge-success">
		<?php echo $data->lama_naik;?>   hari lagi</td></span>
		<?php
    }
}else{ // Jika data tidak ada
    echo "<tr><td colspan='5'>Data tidak ada</td></tr>";
}
?>
</table>
<script>
		window.print();
	</script>

</body>
</html>