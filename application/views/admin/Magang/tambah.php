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
        <!-- Header-->

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
                            <strong class="card-title">Data Table</strong>
                        </div>
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>




<!-- Menampilkan Error jika validasi tidak valid -->
<div style="color: red;"><?php echo (isset($message))? $message : ""; ?></div>

<?php echo form_open("MagangFix/tambahfix", array('enctype'=>'multipart/form-data')); ?>
	    
                      
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama </label></div>
                            <div class="col-12 col-md-9"><input type="text" id="nama_magang" name="nama_magang" class="form-control" value="<?php echo set_value('nama_magang');?>"><small class="form-text text-muted"></small></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="select" class=" form-control-label">Jenis Kelamin</label></div>
                            <div class="col-12 col-md-9">
                              <select name="jk_magang" id="jk_magang" class="form-control">             
                                
                                    <option value="Laki Laki">Laki Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                   
                            </select>
                        </div>
                    </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nomor Hp </label></div>
                            <div class="col-12 col-md-9"><input type="text" id="nohp_magang" name="nohp_magang" class="form-control" value="<?php echo set_value('nohp_magang');?>"><small class="form-text text-muted"></small></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="select" class=" form-control-label">Bidang</label></div>
                            <div class="col-12 col-md-9">
                              <select name="bidang" id="bidang" class="form-control">             
                                
                                    <option value="Sekretariat">Sekretariat</option>
                                    <option value="Bidang Informasi Dan Komunikasi Publik">Bidang Informasi Dan Komunikasi Publik</option>
                                   

                                     <option value=" Bidang Pengelolaan Infrastruktur E-Government"> Bidang Pengelolaan Infrastruktur E-Government</option>
                                      <option value="Bidang Statistik">Bidang Statistik</option>
                                    <option value="Bidang Persandian">Bidang Persandian</option>

                            </select>
                        </div>
                    </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Asal </label></div>
                            <div class="col-12 col-md-9"><input type="text" id="asal_magang" name="asal_magang" class="form-control" value="<?php echo set_value('asal_magang');?>"><small class="form-text text-muted"></small></div>
                          </div>


						  
                       
                  </div>
						
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="file-input" class=" form-control-label">Foto</label></div>
							</div>
                            <div class="col-12 col-md-9"><input type="file" id="foto_magang" name="foto_magang" class="form-control-file" value="<?php echo set_value('foto_magang'); ?>"></div>
                          </div>
                      </div>
		
	<hr>
	<input type="submit" name="submit" value="submit">
	
<?php echo form_close(); ?>


                  
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

