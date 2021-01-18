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
                       
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Honor</a></li>
                            <li class="active">THL Bidang IKP Diskominfo</li>
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
                           


                            <a href="<?php echo site_url('honor/cetak/') ?>" class="btn btn-default"><i class="fa fa-print"></i> Print</a>


                        </div>
                        <div class="card-body">
                 <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th align="center">No</th>
                                         <th align="center">Bidang</th>
                                        <th align="center">No SPK</th>
                                        <th align="center">Nama </th>
                                        <th align="center">Jabatan</th>                   
                                        <th align="center">Kegiatan</th>
                                        <th align="center">TMT Bekerja</th>
                                        <th align="center">Nomor Rekening</th>
                                        <th align="center">Lama Bekerja</th>
                                        <th align="center">Foto</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                   


                                    <?php 
                                        $no = 1;
                                        foreach($honor AS $item) : ?>                             
                                        <tr>
                                            <td><?php echo $no ?></td>
                                                <td><?php echo $item->bidang ?></td>
                                             <td><?php echo $item->no_spk ?></td>
                                            <td><?php echo $item->nama ?></td>
                                             <td><?php echo $item->jabatan ?></td>                     
                                            <td><?php echo $item->kegiatan?></td>
                                            <td><?php echo $item->tmt_kerja ?></td>
                                         <td><?php echo $item->no_rek ?></td>
                                                                    
                                          
                                            <td><span class="badge badge-success"><?php echo $item->lama_kerja ?>  Tahun </span></td>

                                            <td><img src="<?php echo base_url('images/'.$item->foto);?>" width='100' height='100'></td>
                                            

                                        </tr>
                                    <?php $no++;endforeach; ?>

                                     
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

