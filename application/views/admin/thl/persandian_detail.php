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
                       
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="<?php echo base_url().'index.php/persandian' ?>">THL Bidang Persandian Diskominfo</a></li>
                            <li class="active">Detail</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
            <!-- Content -->
         <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
		
		
		
		
		   <div class="col-md-12">
                        <aside class="profile-nav alt">
                          
                                <div class="card-header ">
                                      
                                     
                                    <div class="card-header user-header">
                                    <div class="media" >			
												<?php
if( ! empty($honor)){ // Jika data pada database tidak sama dengan empty (alias ada datanya)
    foreach($honor as $r){ 
                                     echo "<img src='".base_url("images/".set_value('no',$r->foto))."' width=85px height=85px>" ;?>
                                        </a>
                                        <div class="media-body">
                                            <h2  ><?php echo "".set_value('no',$r->nama)."";?></h2>
                                            <p><?php echo "<td>".set_value('no',$r->no_spk)."";?></p>
                                        </div>
                                    </div>
                                </div>


                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <a href="#">NIK  : </i> <?php echo "".set_value('no',$r->nik)."";?> </a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="#">Nomor Rekening  : </i> <?php echo "".set_value('no',$r->no_rek)."";?> </a>
                                    </li>


                                    <li class="list-group-item">
                                        <a href="#">Tempat/Tanggal Lahir   : </i> <?php echo "".set_value('no',$r->tempat_lahir)."";?>, <?php echo "".set_value('no',$r->tgl_lahir).""; ?></a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="#">Jenis Klamin  : <?php echo "".set_value('no',$r->jk)."";?></a>
                                    </li>

                                    <li class="list-group-item">
                                        <a href="#">Kegiatan   : <?php echo "".set_value('no',$r->kegiatan)."";?></a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="#">TMT Bekerja   :<?php echo "TMT ".set_value('no',$r->tmt_kerja)."";?></a>
										</li>
										
									 <li class="list-group-item">
                                        <a href="#">Jabatan   :<?php echo "TMT ".set_value('no',$r->jabatan)."";?></a>
                                    </li>
									 
									
									<li class="list-group-item">
                                        <a href="#">Agama :</i><?php echo "".set_value('no',$r->agama)."";?></a>
                                    </li>
									
                                    <li class="list-group-item">
                                        <a href="#">Nomor Tlpn:<?php echo "".set_value('no',$r->no_tlpn)."";?></a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="#">Gaji   :<?php echo "Rp ".set_value('no',$r->gaji)."";?></a>
                                    </li>
                                     
                                    <li class="list-group-item">
                                        <a href="#">Email  : <?php echo "".set_value('no',$r->email)."";?></a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="#">Alamat :<br></i><?php echo "".set_value('no',$r->alamat)."";?></a>
                                    </li>
                                    
                                    <li class="list-group-item">
                                        <a href="#">Pendidikan: <?php echo "".set_value('no',$r->pendidikan)."";?></a>
                                    </li>
									<li class="list-group-item">
                                        <a href="#">Bidang: <?php echo "".set_value('no',$r->bidang)."";?></a>
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
