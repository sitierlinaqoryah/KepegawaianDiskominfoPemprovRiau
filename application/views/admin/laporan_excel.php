        <!-- Header -->
<?php $this->load->view('layout/header') ?>
 <!-- Header --> 
<?php 

header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=$title.xlsx");

header("Pragma: no-cache");

header("Expires: 0");

?>
<body>

                        <div class="card-body">
                 <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                       <th>NIP Pegawai</th>
                        <th>Nama</th>
						<th>Status Pegawai</th>
						<th>Telepon</th>
						<th>Email</th>
						<th>Bidang</th>
						<th>Foto</th>
						
                      </tr>
                    </thead>
                    <tbody>


<?php
if( ! empty($pegawai)){ // Jika data pada database tidak sama dengan empty (alias ada datanya)
    foreach($pegawai as $data){ // Lakukan looping pada variabel gambar dari controller
        echo "<tr>";
		
		echo "<td>".$data->id_pegawai."</td>";
        echo "<td>".$data->nama_pegawai."</td>";
        echo "<td>".$data->tplahir_pegawai."</td>";
		echo "<td>".$data->telepon_pegawai."</td>";
		echo "<td>".$data->email_pegawai."</td>";
		echo "<td>".$data->id_bidang."</td>";
        echo "<td><img src='".base_url("images/".$data->foto_pegawai)."' width='100' height='100'></td>";?>
	
		<?php
    }
}else{ // Jika data tidak ada
    echo "<tr><td colspan='5'>Data tidak ada</td></tr>";
}
?>
</table>

                  
                        </div>
                    </div>
                </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->


    <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
        } );
    </script>


</body>
</html>