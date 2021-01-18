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
                            <li class="active">Data Pensiun</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <body>
            
                <div class="row">

                <div class="col-md-12">
                   
                        <div class="Container">
                            <strong class="card-title">Data Pensiun</strong>
                        
                       <div class="pull-right"><a class="btn-sm btn-success" data-toggle="modal" data-target="#modal_add_new">Tambah Pegawai Pensiun</a></div> 
                       </div>           
                        <div class="card-body">
                 <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                         <th>No</th>
                        <th>NiP</th>
                       <th>Nama</th>
                        <th>Jenis Golongan</th>
                        <th>JK</th>
                        <th>TTL</th>
                        <th>Usia Pegawai</th>
                        <th>Tanggal Pensiun</th>
                        <th>Sisa Hari Kerja</th>
                        <th>Aksi</th>
                    
                      </tr>
                    </thead>
                    <tbody>

<?php 
$no=1;

                foreach($pensiun->result_array() as $i):

                    $nip_pegawai=$i['nip_pegawai'];
                    $nama_pegawai=$i['nama_pegawai'];
                    $golongan=$i['golongan'];
                    $jenis_kelamin=$i['jenis_kelamin'];
                    $tgl_lahir=$i['tgl_lahir'];
                    $usia=$i['usia'];
                    $sisa_hari=$i['sisa_hari'];
                    $tgl_pensiun=$i['tgl_pensiun'];
            ?>
            <tr>
                <td><?php echo $no;?></td> 
                 <td><?php echo $nip_pegawai;?></td> 
                 <td><?php echo $nama_pegawai;?></td>  
               
                        
                <td><?php echo $golongan;?></td>
                  <td><?php echo $jenis_kelamin;?></td>
                  <td><?php echo $tgl_lahir;?></td>
                  <td><span class="badge badge-success"><?php echo $usia;?> Tahun</span></td>
                  
                 <td><?php echo $tgl_pensiun;?></td>
                 <td><span class="badge badge-success"><?php echo $sisa_hari;?> Hari</span></td>
                <td style="width: 120px;">
                    <a type="button" class="btn btn-info btn-icon btn-sm" title="edit" ><i class="fa fa-edit fa-lg"  data-toggle="modal" data-target="#modal_edit<?php echo $nip_pegawai;?>"></a></i>
                    <br></br>
                                                
                    <a type="button" class="btn btn-danger btn-icon btn-sm " title="delete" > <i class="fa-lg fa fa-trash-o" data-toggle="modal" data-target="#modal_hapus<?php echo $nip_pegawai;?>"></i></a>
                </td>
            </tr>
            <?php $no++;endforeach;?>
        </tbody>
    </table>
    </div>
</div>


    <!-- ============ MODAL TAMBAH PENSIUN =============== -->
        <div class="modal fade" id="modal_add_new" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h3 class="modal-title" id="myModalLabel">Add New Pensiun</h3>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/pensiun/simpan_pensiun'?>">
                <div class="modal-body">

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nip Pegawai</label>
                        <div class="col-xs-8">
                            <input name="nip_pegawai" class="form-control" type="text" placeholder="Nip Pegawai..." required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nama Pegawai</label>
                        <div class="col-xs-8">
                            <input name="nama_pegawai" class="form-control" type="text" placeholder="Nama Pegawai..." required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Golongan</label>
                        <div class="col-xs-8">
                            <input name="golongan" class="form-control" type="text" placeholder="Golongan..." required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >JK</label>
                        <div class="col-xs-8">
                            <select name="jenis_kelamin" class="form-control" required>
                                <option value="">-PILIH-</option>
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                                
                             </select>
                        </div>
                    </div>
                     <div class="form-group">
                        <label class="control-label col-xs-3" >TTL</label>
                        <div class="col-xs-8">
                            <input name="tgl_lahir" class="form-control" type="date" placeholder="Tanggal Lahir..." required>
                        </div>
                    </div>
                     <div class="form-group">
                        <label class="control-label col-xs-3" >Tanggal Pensiun</label>
                        <div class="col-xs-8">
                            <input name="tgl_pensiun" class="form-control" type="date" placeholder="Tanggal Lahir..." required>
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-info">Simpan</button>
                </div>
            </form>
            </div>
            </div>
        </div>
    <!--END MODAL ADD PENSIUN-->

    <!-- ============ MODAL EDIT PENSIUN =============== -->
    <?php 
        foreach($pensiun->result_array() as $i):
            $nip_pegawai=$i['nip_pegawai'];
            $nama_pegawai=$i['nama_pegawai'];
            $golongan=$i['golongan'];
            $jenis_kelamin=$i['jenis_kelamin'];
            $tgl_lahir=$i['tgl_lahir'];
            $tgl_pensiun=$i['tgl_pensiun'];

        ?>
        <div class="modal fade" id="modal_edit<?php echo $nip_pegawai;?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h3 class="modal-title" id="myModalLabel">Edit Pegawai</h3>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/pensiun/edit_pensiun'?>">
                <div class="modal-body">

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nip Pegawai</label>
                        <div class="col-xs-8">
                            <input name="nip_pegawai" value="<?php echo $nip_pegawai;?>" class="form-control" type="text" placeholder="Nip Pegawai..." required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nama Pegawai</label>
                        <div class="col-xs-8">
                            <input name="nama_pegawai" value="<?php echo $nama_pegawai;?>" class="form-control" type="text" placeholder="Nama Pegawai..." required>
                        </div>
                    </div>

                     <div class="form-group">
                        <label class="control-label col-xs-3" >Golongan</label>
                        <div class="col-xs-8">
                            <input name="golongan" value="<?php echo $golongan;?>" class="form-control" type="text" placeholder="Golongan..." required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >JK</label>
                        <div class="col-xs-8">
                               <select name="jenis_kelamin" class="form-control" required>
                                <option value="">-PILIH-</option>
                                <?php if($jenis_kelamin=='Laki-Laki'):?>
                                    <option value="Laki-Laki" selected>Laki_Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                      
                                
                                <?php elseif($jenis_kelamin=='Perempuan'):?>
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan" selected>Perempuan</option>
                                   <?php endif;?>
                             </select>
                        </div>
                    </div>
                        <div class="form-group">
                        <label class="control-label col-xs-3" >TTL</label>
                        <div class="col-xs-8">
                             <input name="tgl_lahir" value="<?php echo $tgl_lahir;?>" class="form-control" type="date" placeholder="Tanggal Lahir..." required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Tanggal Pensiun</label>
                        <div class="col-xs-8">
                             <input name="tgl_pensiun" value="<?php echo $tgl_pensiun;?>" class="form-control" type="date" placeholder="Tanggal Pensiun..." required>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-info">Update</button>
                </div>
            </form>
            </div>
            </div>
        </div>

    <?php endforeach;?>
    <!--END MODAL EDIT BARANG-->

    <?php 
        foreach($pensiun->result_array() as $i):
            $nip_pegawai=$i['nip_pegawai'];
            $nama_pegawai=$i['nama_pegawai'];
            $golongan=$i['golongan'];
            $jenis_kelamin=$i['jenis_kelamin'];
             $tgl_lahir=$i['tgl_lahir'];
              $tgl_pensiun=$i['tgl_pensiun'];
        ?>
     <!-- ============ MODAL HAPUS BARANG =============== -->
        <div class="modal fade" id="modal_hapus<?php echo $nip_pegawai;?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h3 class="modal-title" id="myModalLabel">Hapus Pegawai</h3>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/pensiun/hapus_pensiun'?>">
                <div class="modal-body">
                    <p>Anda yakin mau menghapus <b><?php echo $nama_pegawai;?></b></p>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="nip_pegawai" value="<?php echo $nip_pegawai;?>">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-danger">Hapus</button>
                </div>
            </form>
            </div>
            </div>
        </div>
    <?php endforeach;?>
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
