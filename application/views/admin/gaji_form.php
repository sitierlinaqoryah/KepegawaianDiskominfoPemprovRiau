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
                            <li><a href="#">Kenaikan Gaji</a></li>
                            <li class="active">Data kenaikan</li>
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
                            <strong class="card-title">Data Table</strong>
                        </div>
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>




<!-- Menampilkan Error jika validasi tidak valid -->
<div style="color: red;"><?php echo (isset($message))? $message : ""; ?></div>

<?php echo form_open("gaji/tambah", array('enctype'=>'multipart/form-data')); ?>
						  
                          <div class="row form-group">
                         <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama Pegawai</label></div>
                            <div class="col-12 col-md-9">
							 <select name="no_pegawai" id="no_pegawai" class="form-control-sm form-control">
<option value="14">Ir.H.Yogi Getri</option>
                             <option value="16">Defarime,S.Si</option>
                             <option value="16">Erisman Yahya,S.Ag,MH</option>
          
          
   
</select>
</div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tanggal Kenaikan Gaji</label></div>
                            <div class="col-12 col-md-9"><input type="date" id="tgl_gaji" name="tgl_gaji" class="form-control" value="<?php echo set_value('tgl_gaji');?>"><small class="form-text text-muted"></small></div>
                          </div>
                
		
	<hr>
	<input type="submit" name="submit" value="Simpan">
	<a href="<?php echo base_url('gaji/view'); ?>"><input type="button" value="Batal"></a>
<?php echo form_close(); ?>


                  
                        </div>
                    </div>
                </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->


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

