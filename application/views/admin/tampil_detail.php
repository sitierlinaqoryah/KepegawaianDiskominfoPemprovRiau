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
                        <h1>Detail Pegawai</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        
                    </div>
                </div>
            </div>
        </div>
		
		
		
		
		
		
		   <div class="col-md-12">
                        <aside class="profile-nav alt">
                            <section class="card">
                                <div class="card-header user-header alt bg-dark">
                                    <div class="media">			
												<?php
if( ! empty($pegawai)){ // Jika data pada database tidak sama dengan empty (alias ada datanya)
    foreach($pegawai as $r){ 
                                     echo "<img src='".base_url("images/".set_value('no_pegawai',$r->foto_pegawai))."' width=85px height=85px>";?>
                                        </a>
                                        <div class="media-body">
                                            <h2 class="text-light display-6"><?php echo "".set_value('no_pegawai',$r->nama_pegawai)."";?></h2>
                                            <p><?php echo "<td>".set_value('no_pegawai',$r->jabatan_pegawai)."";?></p>
                                        </div>
                                    </div>
                                </div>


                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <a href="#">NIP  : </i> <?php echo "".set_value('no_pegawai',$r->nip_pegawai)."";?> </a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="#">Tempat/Tanggal Lahir   : </i> <?php echo "".set_value('no_pegawai',$r->tempat_pegawai)."";?>, <?php echo "".set_value('no_pegawai',$r->tgllahir_pegawai).""; ?></a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="#">Pangkat Terakhir   : <?php echo "".set_value('no_pegawai',$r->pangkat_terakhir)."";?></a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="#"><?php echo "TMT ".set_value('no_pegawai',$r->tmt_pegawai)."";?></a>
										</li>
										 <li class="list-group-item">
                                        <a href="#">No.SK   : <?php echo "".set_value('no_pegawai',$r->no_sk)."";?></a>
                                    </li>
									 <li class="list-group-item">																																																																																																																																																																											<a href="#">Tgl SK   : <?php echo "".set_value('no_pegawai',$r->tgl_sk)."";?></a>
                                    </li>
									 <li class="list-group-item">
                                        <a href="#"><?php echo "TMT ".set_value('no_pegawai',$r->tmt2_pegawai)."";?></a>
                                    </li>
									 <li class="list-group-item">
                                        <a href="#">No.SK Jabatan   : <?php echo "".set_value('no_pegawai',$r->no_sk2)."";?></a>
                                    </li>
									 <li class="list-group-item">
                                        <a href="#">Tgl SK Jabatan   : <?php echo "".set_value('no_pegawai',$r->tgl_sk2)."";?></a>
                                    </li>
									<li class="list-group-item">
                                        <a href="#">Eselon   : <?php echo "".set_value('no_pegawai',$r->eselon_pegawai)."";?></a>
                                    </li>
									<li class="list-group-item">
                                        <a href="#">Pedidikan Formal :<br></i><?php echo "".set_value('no_pegawai',$r->pendidikan_formal)."";?></a>
                                    </li>
									<li class="list-group-item">
                                        <a href="#">Perjenjangan :<br><?php echo "".set_value('no_pegawai',$r->pendidikan_perjenjangan)."";?></a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="#">Pengalaman Kerja :<br><?php echo "".set_value('no_pegawai',$r->pengalaman_kerja)."";?></a>
                                    </li>
									<li class="list-group-item">
                                        <a href="#">Karis :<br></i><?php echo "".set_value('no_pegawai',$r->karis)."";?></a>
                                    </li>
									<li class="list-group-item">
                                        <a href="#">Karsu :<br><?php echo "".set_value('no_pegawai',$r->karsu)."";?></a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="#">Karpeg :<br><?php echo "".set_value('no_pegawai',$r->karpeg)."";?></a>
                                    </li>
									
									
									<li class="list-group-item">
                                       <a href="<?php echo site_url('pegawai/edit/'.$r->no_pegawai) ?>" class="btn btn-warning">Edit</a>
                                    </li>
                                </ul>

                            </section>
                        </aside>
                    </div>
		
						   
		
		<?php
    }
}else{ // Jika data tidak ada
    echo "<tr><td colspan='5'>Data tidak ada</td></tr>";
}
?>
		
					
						
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
