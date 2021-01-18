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
                            <strong class="card-title">Data Table</strong>
                        </div>
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>




<!-- Menampilkan Error jika validasi tidak valid -->
<div style="color: red;"><?php echo (isset($message))? $message : ""; ?></div>

                             <?php foreach($pegawai as $r) {?>
							 <?=form_open_multipart('pegawai/prosesedit/'.$r->no_pegawai)?>
     <!--<form action="<?php echo site_url('pegawai/prosesedit/'.$r->no_pegawai); ?>" method="post" enctype="multipart/form-data" class="form-horizontal">-->
                             <div class="box-body" style="width: 600px; float: left; margin-left: 50px; ">
               
								     <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">NIP Pegawai</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="nip_pegawai" name="nip_pegawai" class="form-control" value="<?php echo set_value('nip_pegawai',$r->nip_pegawai);?>"><small class="form-text text-muted"></small></div>
                          </div>
						  
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama Pegawai</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="nama_pegawai" name="nama_pegawai" class="form-control" value="<?php echo set_value('nama_pegawai',$r->nama_pegawai);?>"><small class="form-text text-muted"></small></div>
                          </div>
						  
                          <div class="row form-group">
                           <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tempat Lahir</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="tempat_pegawai" name="tempat_pegawai" class="form-control" value="<?php echo set_value('tempat_pegawai',$r->tempat_pegawai);?>"><small class="form-text text-muted"></small></div>
                          </div>
						  
						  <div class="row form-group">
                         <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tanggal lahir</label></div>
                            <div class="col-12 col-md-9"><input type="date" id="tggllahir_pegawai" name="tggllahir_pegawai"  class="form-control" value="<?php echo set_value('tgllahir_pegawai',$r->tgllahir_pegawai);?>"><small class="form-text text-muted"></small></div>
                          </div>
						  
                          <div class="row form-group">
                         <div class="col col-md-3"><label for="text-input" class=" form-control-label">Pangkat Terakhir</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="pangkat_terakhir" name="pangkat_terakhir"  class="form-control" value="<?php echo set_value('pangkat_terakhir',$r->pangkat_terakhir);?>" ><small class="form-text text-muted"></small></div>
                          </div>
						  <div class="row form-group">
                         <div class="col col-md-3"><label for="text-input" class=" form-control-label">TMT Pegawai</label></div>
                            <div class="col-12 col-md-9"><input type="date" id="tmt_pegawai" name="tmt_pegawai"  class="form-control" value="<?php echo set_value('tmt_pegawai',$r->tmt_pegawai);?>"><small class="form-text text-muted"></small></div>
                          </div>
						  
                           <div class="row form-group">
                         <div class="col col-md-3"><label for="text-input" class=" form-control-label">No SK</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="no_sk" name="no_sk"  class="form-control"><small class="form-text text-muted" value="<?php echo set_value('no_sk',$r->no_sk);?>"></small></div>
                          </div>
                          
                          </div>
						  
						 <div class="row form-group">
                         <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tanggal SK</label></div>
                            <div class="col-12 col-md-9"><input type="date" id="tgl_sk" name="tgl_sk"  class="form-control"><small class="form-text text-muted" value="<?php echo set_value('tgl_sk',$r->tgl_sk);?>"></small></div>
                          </div>
                          <div class="row form-group">
                         <div class="col col-md-3"><label for="text-input" class=" form-control-label">Jabatan Pegawai</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="jabatan_pegawai" name="jabatan_pegawai"  class="form-control"><small class="form-text text-muted" value="<?php echo set_value('jabatan_pegawai',$r->jabatan_pegawai);?>"></small></div>
                          </div>
                            <div class="row form-group">
                         <div class="col col-md-3"><label for="text-input" class=" form-control-label">TMT Pegawai</label></div>
                            <div class="col-12 col-md-9"><input type="date" id="tmt2_pegawai" name="tmt2_pegawai"  class="form-control"><small class="form-text text-muted" value="<?php echo set_value('tmt2_pegawai',$r->tmt2_pegawai);?>"></small></div>
                          </div>
						    <div class="row form-group">
                         <div class="col col-md-3"><label for="text-input" class=" form-control-label">No SK</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="no_sk2" name="no_sk2"  class="form-control" value="<?php echo set_value('no_sk2',$r->no_sk2);?>"><small class="form-text text-muted"></small></div>
                          </div>
                         
                          <div class="row form-group">
                         <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tanggal SK</label></div>
                            <div class="col-12 col-md-9"><input type="date" id="tgl_sk2" name="tgl_sk2"  class="form-control" value="<?php echo set_value('tgl_sk2',$r->tgl_sk2);?>"><small class="form-text text-muted"></small></div>
                          </div>
						   <div class="row form-group">
                         <div class="col col-md-3"><label for="text-input" class=" form-control-label">Eselon Pegawai</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="eselon_pegawai" name="eselon_pegawai"  class="form-control" value="<?php echo set_value('eselon_pegawai',$r->eselon_pegawai);?>"><small class="form-text text-muted"></small></div>
                          </div>
						  
						 <div class="row form-group">
                         <div class="col col-md-3"><label for="text-input" class=" form-control-label">PendidikanFormal</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="pendidikan_formal" name="pendidikan_formal"  class="form-control" value="<?php echo set_value('pendidikan_formal',$r->pendidikan_formal);?>"><small class="form-text text-muted"></small></div>
                          </div>
						  
						  <div class="row form-group">
                         <div class="col col-md-3"><label for="text-input" class=" form-control-label">Pendidikan Perjenjangan</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="pendidikan_perjenjangan" name="pendidikan_perjenjangan"  class="form-control" value="<?php echo set_value('pendidikan_perjenjangan',$r->pendidikan_perjenjangan);?>"><small class="form-text text-muted"></small></div>
                          </div>
						  
						  <div class="row form-group">
                         <div class="col col-md-3"><label for="text-input" class=" form-control-label">Pengalaman Kerja</label></div>
                            <div class="col-12 col-md-9"><input type="text-area" id="pengalaman_kerja" name="pengalaman_kerja"  class="form-control" value="<?php echo set_value('pengalaman_kerja',$r->pengalaman_kerja);?>"><small class="form-text text-muted"></small></div>
                          </div>
						
                          <div class="row form-group">
                         <div class="col col-md-3"><label for="text-input" class=" form-control-label">No Karis </label></div>
                            <div class="col-12 col-md-9"><input type="text" id="karis" name="karis"  class="form-control" value="<?php echo set_value('karis',$r->karis);?>"><small class="form-text text-muted"></small></div>
                          </div>
                            <div class="row form-group">
                         <div class="col col-md-3"><label for="text-input" class=" form-control-label">No Karsu </label></div>
                            <div class="col-12 col-md-9"><input type="text" id="karsu" name="karsu"  class="form-control" value="<?php echo set_value('karsu',$r->karsu);?>"><small class="form-text text-muted"></small></div>
                          </div>
                          <div class="row form-group">
                         <div class="col col-md-3"><label for="text-input" class=" form-control-label">No Karpeg</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="karpeg" name="karpeg"  class="form-control" value="<?php echo set_value('karpeg',$r->karpeg);?>"><small class="form-text text-muted"></small></div>
                          </div>
                          <div class="row form-group">
                         <div class="col col-md-3"><label for="text-input" class=" form-control-label">Bidang Departemen</label></div>
                            <div class="col-12 col-md-9">
							 <select name="no_bidang" id="no_bidang" class="form-control-sm form-control">
							
                    <option value="1">Bidang Informasi dan Komunikasi Publik</option>
					<option value="2">Bidang Pengelolaan Infrastruktur e-Goverment </option>
					<option value="3">Bidang Layanan e-Government </option>
					<option value="4">Bidang Statistik </option>
					<option value="5">Bidang Persandian </option>
					<option value="6">Fungsional Arsiparis Muda </option>
					<option value="7">Fungsional Statistisi Muda </option>
					<option value="8">Fungsional Statistisi Pertama </option>
					<option value="9">Subbagian Perencanaan Program </option>
					<option value="10">Subbagian Keuangan Perlengkapan dan Pengelolaan Barang Milik Daerah</option>
					<option value="11">Subbagian Kepegawaian dan Umum </option>
					<option value="12">Sekretaris </option>
					<option value="13">Kepala Dinas </option>

					
                 </select>
                       
						
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="file-input" class=" form-control-label">Foto</label></div>
                                    <input type="file" name="userfile">
                                </div>
					  <div class="box-footer">
                                <input type="submit" name="submit" value="Simpan">
                            </div>
						  
                    </div>
								

                            </div>
                            <!-- /.box-body -->
                            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
							<div>
                            <?php }?>
							</div>
                          
                        </form>

                  
                       

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
