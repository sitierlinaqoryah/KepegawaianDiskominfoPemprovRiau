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
                        <h1>Kenaikan Gaji</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Kepegawaian</a></li>
                            <li><a href="#">Kenaikan</a></li>
                            <li class="active">Data kenaikan gaji</li>
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
                            <strong class="card-title"><a href="<?php echo site_url('gaji/tambah_view/');?>" class="btn btn-success">Tambah pegawai </a></strong>
                        </div>
                        <div class="card-body">
                 <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
					  <th>No</th>
                       <th>No Pegawai</th>
						<th>Tanggal naik</th>
						<th>Keterangan</th>
						<th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>


<?php
if( ! empty($gaji)){ // Jika data pada database tidak sama dengan empty (alias ada datanya)
	$no=1;
    foreach($gaji as $data){ // Lakukan looping pada variabel gambar dari controller
        echo "<tr>";?>
		<td><?php echo $no++;?></td>
		<td><?php echo $data->no_pegawai;?></td> 
		<td><?php echo $data->tgl_gaji;?></td>
		<td><span class="badge badge-success">
		<?php echo $data->keterangan;?>   hari lagi</td></span>
		<td><a href="<?php echo site_url( 'gaji/hapus/'.$data->no_pegawai ); ?>"  onClick="return confirm('Apakah kamu yakin untuk menghapus ?')" class="btn btn-warning"></i>Hapus</a></td>
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
