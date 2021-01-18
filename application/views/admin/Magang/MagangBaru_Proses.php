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
                  <?php foreach($magang as $r) {?>
     <?=form_open_multipart('MagangBaru/proses_simpan/'.$r->id)?>
                             
                                   
                                    <input type="text" method="POST" class="form-control" name="nama_magang"  value="<?php set_value('nama_magang',$r->nama_magang) ;?>">
                               
                                    <!-- <label>Jenis Kelamin :</label> -->
                                    <input type="text" method="POST" class="form-control" name="jk_magang" value="<?php set_value('jk_magang',$r->jk_magang);?>" >
                                
                                    <!-- <label>Nonor Hp :</label> -->
                                    <input type="text" method="POST" class="form-control" name="nohp_magang" value="<?php set_value('nohp_magang',$r->nohp_magang) ;?>">
                           
                                    <!-- <label>Asal :</label> -->
                                    <input type="text" method="POST" class="form-control" name="asal_magang" value="<?php set_value('asal_magang',$r->asal_magang) ;?>">
                                    <!-- <label>Gambar :</label><br> -->
                                    <input type="file" method="POST" name="userfile" value="<?php echo base_url('images/magang/'.$r->foto_magang);?>">
                            
                            <!-- /.box-body -->
                            <br><br><br>
                            <?php }?>
								<input type="submit" name="submit" value="Simpan">
                  <!-- .animated -->
       </div><!-- .content -->    
    </div><!-- /#right-panel -->
    <!-- Right Panel -->
 <?php $this->load->view('layout/js') ?>
<?php $this->load->view('helpers/confirm-delete'); ?> 