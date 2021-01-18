        <!-- Header -->
<?php $this->load->view('layout/header') ?>
<body>
        <!-- Left Panel -->
<?php $this->load->view('layout/menu') ?>
    <!-- Right Panel -->
 <div id="right-panel" class="right-panel">
        <!-- menuHeader-->
 <?php $this->load->view('layout/menuheader') ?>
<!-- Headertabel-->
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Magang Diskominfo</h1>
                       
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            
                            
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
                    <div class="card">
                        <div class="card-header">
                             <strong class="card-title"><a href="<?php echo site_url('MagangFix/tambahfix');?>" class="btn btn-success">Tambah Anggota Magang </a></strong> 


                            <a href="<?php echo site_url('MagangFix/print_magang/') ?>" class="btn btn-default"><i class="fa fa-print"></i> Print</a>


                        </div>
                        <div class="card-body">
                 <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                 <thead>
                                    <tr>
                                        <th>Nama Magang</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Nomor Hp</th> 
                                        <th>Bidang</th>                                     
                                        <th>Asal</th>
                                        <th>Foto</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                 <tbody>
                                   


                                    <?php 
                                        
                                        foreach($magangfix AS $item) : ?>                             
                                        <tr>
                                            
                                             <td><?php echo $item->nama_magang ?></td>
                                            <td><?php echo $item->jk_magang ?></td>
                                             <td><?php echo $item->nohp_magang ?></td>                     
                                            <td><?php echo $item->bidang?></td>
                                            <td><?php echo $item->asal_magang ?></td>
                                                                    
                                           
                                            

                                            <td><img src="<?php echo base_url('images/'.$item->foto_magang);?>" width='100' height='100'></td>
                                            <td>
                                                <a href="<?php echo site_url('MagangFix/ubah/' . $item->id) ?>" class="btn btn-warning"><i class="fa fa-pencil"></i> Edit</a>
                                                
                                               <a href="<?php echo site_url('MagangFix/hapus/' . $item->id) ?>" class="btn btn-danger" onclick="return confirm('Yakin Hapus?')"><i class="fa fa-delete"></i> Hapus</a>
                                               
                                               <a href="<?php echo site_url('MagangFix/detail/'.$item->id) ?>" class=" btn  btn-warning"> <i class=" fa fa-delete"></i> Detail</a>



                                            </td>

                                        </tr>
                                    <?php endforeach; ?>

                                     
                                </tbody>


                            </table>
</div>
                       
                      

                   
                </div>
                </div>
            </div><!-- .animated -->


        </div><!-- .content --> 

    </div><!-- /#right-panel -->

    <!-- Right Panel -->
 <?php $this->load->view('layout/js') ?>

