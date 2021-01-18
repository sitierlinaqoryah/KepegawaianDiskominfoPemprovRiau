<!-- Header -->
<?php $this->load->view('layout/header') ?>
<body>
        <!-- Left Panel -->
<?php $this->load->view('layout/menu') ?>
    <!-- Right Panel -->
 <div id="right-panel" class="right-panel">
        <!-- menuHeader-->
 <?php $this->load->view('layout/menuheader') ?>

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
                  <?php foreach($magangfix as $r) {?>
     <?=form_open_multipart('MagangFix/proses_ubah/'.$r->id)?>
                             
                                    <label>Nama :</label>
                                    <input type="text" class="form-control" name="nama_magang" placeholder="Masukkan Nama" value="<?php echo set_value('nama_magang',$r->nama_magang) ;?>" oninput="setCustomValidity('')">
                               
                                    <label>Jenis Kelamin :</label>
                                    <select name="jk_magang" class="form-control" required>
                               
                                    <option value="<?php echo set_value('jk_magang',$r->jk_magang);?>"><?php echo set_value('jk_magang',$r->jk_magang);?></option>            
                                <option value="Laki Laki">Laki Laki</option>
                                <option value="Perempuan">Perempuan</option>
                             </select>
                                

                                <label>No Hp :</label>
                                    <input type="text" class="form-control" name="nohp_magang" placeholder="" value="<?php echo set_value('nohp_magang',$r->nohp_magang);?>" oninput="setCustomValidity('')">
                                    <label>Bidang :</label>
                                    									
									<select name="bidang" id="bidang" class="form-control"> 
                                    <option value="<?php echo set_value('bidang',$r->bidang);?>"><?php echo set_value('bidang',$r->bidang);?></option>            
                                <option value="SEKRETARIAT">SEKRETARIAT</option>
                                <option value="BIDANG INFORMASI DAN KOMUNIKASI PUBLIK">BIDANG INFORMASI DAN KOMUNIKASI PUBLIK</option>
                                <option value="BIDANG PENGELOLAAN INFRASTRUKTUR E-GOVERNMENT">BIDANG PENGELOLAAN INFRASTRUKTUR E-GOVERNMENT</option>
                                <option value="BIDANG LAYANAN E-GOVERNMENT">BIDANG LAYANAN E-GOVERNMENT</option>
                                <option value="BIDANG STATISTIK">BIDANG STATISTIK</option>
                                <option value="BIDANG PERSANDIAN">BIDANG PERSANDIAN</option>                                
                              </select>
									
                                    <label>Asal :</label>
                                    <input type="text" class="form-control" name="asal_magang" placeholder="Masukkan Penulis Berita" value="<?php echo set_value('asal_magang',$r->asal_magang) ;?>" required oninvalid="this.setCustomValidity('Penulis harus di isi!')" oninput="setCustomValidity('')">
                              
                            

                                
                                    <label>Gambar :</label><br>
                                    <input type="file" name="userfile">
                            
                            <!-- /.box-body -->
                            <br><br><br>
                            <?php }?>
								<input type="submit" name="submit" value="Simpan">
                  <!-- .animated -->
       </div><!-- .content -->    
    </div><!-- /#right-panel -->
    <!-- Right Panel -->
 <?php $this->load->view('layout/js') ?>
 