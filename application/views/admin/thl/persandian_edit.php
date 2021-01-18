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
                        <h1>Edit Honor</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Honor</a></li>
                            <li class="active">THL Bidang Persandian Diskominfo</li>
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
                            <strong class="card-title">THL Bidang Persandian Diskominfo</strong>
                        </div>
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>




<!-- Menampilkan Error jika validasi tidak valid -->
<div style="color: red;"><?php echo (isset($message))? $message : ""; ?></div>

                             <?php foreach($honor as $r) {?>
                             <?=form_open_multipart('persandian/prosesedit/'.$r->no)?>
     <!--<form action="<?php echo site_url('persandian/prosesedit/'.$r->no_pegawai); ?>" method="post" enctype="multipart/form-data" class="form-horizontal">-->
                             <div class="box-body" style="width: 600px; float: left; margin-left: 50px; ">
               
                                 <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama</label></div>
                            <div class="col-12 col-md-9"><input type="disable" id="nama" name="nama" class="form-control" value="<?php echo set_value('nama',$r->nama) ;?>"><small class="form-text text-muted"></small></div>
                          </div>

                           <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nomor SPK</label></div>
                            <div class="col-12 col-md-9"><input type="disable" id="no_spk" name="no_spk" class="form-control" value="<?php echo set_value('no_spk',$r->no_spk) ;?>"><small class="form-text text-muted"></small></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nomor Rekening</label></div>
                            <div class="col-12 col-md-9"><input type="disable" id="no_rek" name="no_rek" class="form-control" value="<?php echo set_value('no_rek',$r->no_rek) ;?>"><small class="form-text text-muted"></small></div>
                          </div>



                            <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">NIK</label></div>
                            <div class="col-12 col-md-9"><input type="disable" id="nik" name="nik" class="form-control" value="<?php echo set_value('nik',$r->nik) ;?>"><small class="form-text text-muted"></small></div>
                          </div>

                          <div class="row form-group">
                         <div class="col col-md-3"><label for="text-input" class=" form-control-label">TMT Bekerja</label></div>
                            <div class="col-12 col-md-9"><input type="date" id="tmt_kerja" name="tmt_kerja"  class="form-control" required oninvalid="this.setCustomValidity('Nama harus di isi!')" oninput="setCustomValidity('')" value="<?php echo set_value('tmt_kerja',$r->tmt_kerja);?>"><small class="form-text text-muted"></small></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Alamat</label></div>
                            <div class="col-12 col-md-9"><input type="disable" id="alamat" name="alamat" class="form-control" value="<?php echo set_value('alamat',$r->alamat) ;?>"><small class="form-text text-muted"></small></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tempat Lahir</label></div>
                            <div class="col-12 col-md-9"><input type="disable" id="tempat_lahir" name="tempat_lahir" class="form-control" value="<?php echo set_value('tempat_lahir',$r->tempat_lahir) ;?>"><small class="form-text text-muted"></small></div>
                          </div>

                           <div class="row form-group">
                         <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tanggal Lahir</label></div>
                            <div class="col-12 col-md-9"><input type="date" id="tgl_lahir" name="tgl_lahir"  class="form-control" required oninvalid="this.setCustomValidity('Wajib harus di isi!')" oninput="setCustomValidity('')" value="<?php echo set_value('tgl_lahir',$r->tgl_lahir);?>"><small class="form-text text-muted"></small></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nomor Telphone</label></div>
                            <div class="col-12 col-md-9"><input type="disable" id="no_tlpn" name="no_tlpn" class="form-control" value="<?php echo set_value('no_tlpn',$r->no_tlpn) ;?>"><small class="form-text text-muted"></small></div>
                          </div>

                            <div class="row form-group">
                            <div class="col col-md-3"><label for="select" class=" form-control-label">Jenis Klamin</label></div>
                            <div class="col-12 col-md-9">
                              <select name="jk" id="jk" class="form-control" value="<?php echo set_value('jk',$r->jk);?>" required oninvalid="this.setCustomValidity('Kegiatan harus di isi!')" oninput="setCustomValidity('')">
                                <option value="<?php echo set_value('jk',$r->jk) ;?>"> <?php echo set_value('jk',$r->jk) ;?> </option>
                                     <option value="Laki-laki">Laki-laki </option>
                                  <option value="Perempuan">Perempuan </option>   
                                </select> 
                            </div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="select" class=" form-control-label">Agama</label></div>
                            <div class="col-12 col-md-9">
                              <select name="agama" id="agama" class="form-control" value="<?php echo set_value('agama',$r->agama);?>" required oninvalid="this.setCustomValidity('Kegiatan harus di isi!')" oninput="setCustomValidity('')">

                                <option value="<?php echo set_value('agama',$r->agama) ;?>"> <?php echo set_value('agama',$r->agama) ;?> </option>
                                    <option value="Islam">Islam </option>
                                  <option value="Protestan">Protestan </option>
                                  <option value="Katholik">Katholik </option>
                                <option value="Buddha">Buddha </option>
                                <option value="Hindu">Hindu </option>   
                                </select> 
                            </div>
                          </div>


  <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Gaji</label></div>
                            <div class="col-12 col-md-9"><input type="disable" id="gaji" name="gaji" class="form-control" value="<?php echo set_value('gaji',$r->gaji) ;?>"><small class="form-text text-muted"></small></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Email</label></div>
                            <div class="col-12 col-md-9"><input type="disable" id="email" name="email" class="form-control" value="<?php echo set_value('email',$r->email) ;?>"><small class="form-text text-muted"></small></div>
                          </div>

                           <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Pendidikan</label></div>
                            <div class="col-12 col-md-9"><input type="disable" id="pendidikan" name="pendidikan" class="form-control" value="<?php echo set_value('pendidikan',$r->pendidikan) ;?>"><small class="form-text text-muted"></small></div>
                          </div>

                           <div class="row form-group">
                            <div class="col col-md-3"><label for="select" class=" form-control-label">Jabatan</label></div>
                            <div class="col-12 col-md-9">
                              <select name="jabatan" id="jabatan" class="form-control" value="<?php echo set_value('jabatan',$r->jabatan);?>" required oninvalid="this.setCustomValidity('Nama harus di isi!')" oninput="setCustomValidity('')">

                                <option value="<?php echo set_value('jabatan',$r->jabatan) ;?>"> <?php echo set_value('jabatan',$r->jabatan) ;?> </option>
                           <option value="Electronic Data Processing">Electronic Data Processing </option>
                                <option value="Operator Sistem Informasi">Operator Sistem Informasi </option>
                                  <option value="Operator Komputer">Operator Komputer</option>
                                     <option value="Editor Video / Photo">Editor Video / Photo</option>
                                     <option value="Kameramen">Kameramen</option>
                                     <option value="Tenaga Radio">Tenaga Radio</option>
                                     <option value="Fotografer">Fotografer</option>
                                     <option value="Koordinator Liputan">Koordinator Liputan</option>
                                     <option value="Technical Support">Technical Support</option>
                                     <option value="Penjaga Internet Ruangan Gratis">Penjaga Internet Ruangan Gratis</option>
                                     <option value="Reporter/Kontributor">Reporter/Kontributor</option>
                                     <option value="Asisten Ahli">Asisten Ahli</option>
                                     <option value="Panitera Pengganti">Panitera Pengganti</option>
                                     <option value="Petugas Penyelesaian Sengketa Informasi">Petugas Penyelesaian Sengketa Informasi</option>
                                     <option value="Petugas Keamanan">Petugas Keamanan</option>
                                     <option value="Analyst Server">Analyst Server</option>
                                     <option value="System Analyst">System Analyst</option>
                                     <option value="Network Engineer">Network Engineer</option>
                                     <option value="Database Administrator">Database Administrator</option>
                                     <option value="Web Administrator">Web Administrator</option>
                                     <option value="Programer">Programer</option>
                                     <option value="Web Desaigner">Web Desaigner</option>
                                     <option value="Analyst Technical Support">Analyst Technical Support</option>
                                     <option value="Sekretaris Redaksi">Sekretaris Redaksi</option>
                                     <option value="Jasa Tenaga Fotografer">Jasa Tenaga Fotografer</option>
                               
                              </select>
                            </div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="select" class=" form-control-label">Bidang</label></div>
                            <div class="col-12 col-md-9">
                              <select name="bidang" id="bidang" class="form-control" value="<?php echo set_value('bidang',$r->bidang);?>" required oninvalid="this.setCustomValidity('Bidang harus di isi!')" oninput="setCustomValidity('')">


                                  <option value="<?php echo set_value('bidang',$r->bidang) ;?>"> <?php echo set_value('bidang',$r->bidang) ;?> </option>
                                     <option value="Sekretariat">Sekretariat</option>
                                    <option value="Bidang Informasi Dan Komunikasi Publik">Bidang Informasi Dan Komunikasi Publik</option>
                                   

                                     <option value=" Bidang Pengelolaan Infrastruktur E-Government"> Bidang Pengelolaan Infrastruktur E-Government</option>
                                      <option value="Bidang Statistik">Bidang Statistik</option>
                                    <option value="Bidang Persandian">Bidang Persandian</option>
                                     </select> 
                            </div>
                          </div>







                          <div class="row form-group">
                            <div class="col col-md-3"><label for="select" class=" form-control-label">Kegiatan</label></div>
                            <div class="col-12 col-md-9">
                              <select name="kegiatan" id="kegiatan" class="form-control" value="<?php echo set_value('kegiatan',$r->kegiatan);?>" required oninvalid="this.setCustomValidity('Kegiatan harus di isi!')" oninput="setCustomValidity('')">

                                <option value="<?php echo set_value('kegiatan',$r->kegiatan) ;?>"> <?php echo set_value('kegiatan',$r->kegiatan) ;?> </option>
                                     <option value="Pembinaan Ppid Di Provinsi Riau">Pembinaan Ppid Di Provinsi Riau</option>
                                    <option value="Penyedia Jasa Administrasi Perkantoran">Penyedia Jasa Administrasi Perkantoran</option>
                                     <option value="Inventarisasi Aset Milik Pemerintah Provinsi Riau">Inventarisasi Aset Milik Pemerintah Provinsi Riau</option>
                                     <option value="Peliputan Acara Dan Dokumentasi Kegiatan Pemerintah Provinsi Riau">Peliputan Acara Dan Dokumentasi Kegiatan Pemerintah Provinsi Riau</option>
                                     <option value="Newsroom Pemerintah Provinsi Riau">Newsroom Pemerintah Provinsi Riau</option>
                                     <option value="Layanan Informasi Melalui Media Center">Layanan Informasi Melalui Media Center</option>
                                     <option value="Layanan Kinerja Komisi Informasi Dan Membantu Tugas-Tugas Komisioner">Layanan Kinerja Komisi Informasi Dan Membantu Tugas-Tugas Komisioner</option>
                                     <option value="Layanan  Kinerja Komisi Informasi">Layanan  Kinerja Komisi Informasi</option>
                                     <option value="Pengelolaan Data Center Pemerintah Provinsi Riau">Pengelolaan Data Center Pemerintah Provinsi Riau</option>
                                     <option value="Pengelolaan Bandwith Internet Dan Teknologi Vpn Pemerintah Provinsi Riau">Pengelolaan Bandwith Internet Dan Teknologi Vpn Pemerintah Provinsi Riau</option>
                                     <option value="Pengembangan Dan Pengelolaan Command Center Provinsi Riau">Pengembangan Dan Pengelolaan Command Center Provinsi Riau</option>
                                     <option value="Pengembangan E-Government Provinsi Riau">Pengembangan E-Government Provinsi Riau</option>
                                     <option value="Pengelolaan Website Riau.Go.Id">Pengelolaan Website Riau.Go.Id</option>
                                     <option value="Pembinaan Ppid Di Provinsi Riau">Pembinaan Ppid Di Provinsi Riau</option>
                                     <option value="Neswroom">Neswroom</option>
                                     <option value="Pengembangan Tv Dan Radio Streaming Pemerintah Provinsi Riau">Pengembangan Tv Dan Radio Streaming Pemerintah Provinsi Riau</option>
                                     <option value="Layanan E-Government Dinas Komunikasi, Informasi Dan Statistik">Layanan E-Government Dinas Komunikasi, Informasi Dan Statistik</option>
                                      <option value="Penyedia Jasa Lainnya Orang Perorangan (Pjlp)">Penyedia Jasa Lainnya Orang Perorangan (Pjlp)</option>
                                     
                                     </select> 
                            </div>
                          </div>

                          
                            
                      

                         
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
