        <!-- Header -->
<?php $this->load->view('layout/header') ?>
 <!-- Header --> 
<body>
<!-- Left Panel -->
<?php $this->load->view('layout/menu') ?>
<!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
		 <?php $this->load->view('layout/menuheader') ?>
      <!-- /header -->


        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Table</a></li>
                            <li class="active">Data table</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title"><a href="<?php echo site_url('pegawai/tambah/');?>" class="btn btn-success">Tambah pegawai </a></strong> <strong class="card-title"><a href="<?php echo site_url('pegawai/print_pegawai/');?>" class="btn btn-primary">Print</a></strong>
                        </div>
                        <div class="card-body">
                 <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                      	<th>Nip Pegawai</th>
                        <th>Nama</th>
                        <th>Pangkat Terakhir</th>
                        <th>Jabatan</th>
                        <th>Eselon</th>
                        <th>Foto Pegawai</th>
                        <th>Aksi</th>
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
		<td>
		<a href="<?php echo site_url('pegawai/detail/'.$data->no_pegawai) ?>" class="btn btn-warning"></i> Detail</a>
		
		<a href="<?php echo site_url( 'pegawai/hapus/'.$data->no_pegawai ); ?>"  onClick="return confirm('Apakah kamu yakin untuk menghapus ?')" class="btn btn-warning"></i>Hapus</a>
		</td>
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

    <!-- Right Panel -->


    <script src="<?php echo base_url();?>'../../resources/admin/assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="<?php echo base_url();?>'../../resources/admin/assets/js/popper.min.js"></script>
    <script src="<?php echo base_url();?>'../../resources/admin/assets/js/plugins.js"></script>
    <script src="<?php echo base_url();?>'../../resources/admin/assets/js/main.js"></script>


    <script src="<?php echo base_url();?>'../../resources/admin/assets/js/lib/data-table/datatables.min.js"></script>
    <script src="<?php echo base_url();?>'../../resources/admin/assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>'../../resources/admin/assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url();?>'../../resources/admin/assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>'../../resources/admin/assets/js/lib/data-table/jszip.min.js"></script>
    <script src="<?php echo base_url();?>'../../resources/admin/assets/js/lib/data-table/pdfmake.min.js"></script>
    <script src="<?php echo base_url();?>'../../resources/admin/assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="<?php echo base_url();?>'../../resources/admin/assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="<?php echo base_url();?>'../../resources/admin/assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="<?php echo base_url();?>'../../resources/admin/assets/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="<?php echo base_url();?>'../../resources/admin/assets/js/lib/data-table/datatables-init.js"></script>


    <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
        } );
    </script>


</body>
</html>
