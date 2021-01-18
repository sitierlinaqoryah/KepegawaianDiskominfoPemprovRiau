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
     <table id="datatable" class="table table-bordered table-hover">
	 <table id="datatable" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        
                             
                                    <th><label>Nama :</label><br><br> <?php echo set_value('nama_magang',$r->nama_magang) ;?></th>
                                    </tr>
									<tr>
                                    <th><label>Jenis Kelamin :</label> <br><br><?php echo set_value('jk_magang',$r->jk_magang);?></th>
								   </tr>
									<tr>
                                    <th><label>Nonor Hp :</label><br><br><?php echo set_value('nohp_magang',$r->nohp_magang) ;?></th>
                                    </tr>
									<tr>
                                    <th><label>Bidang :</label><br><br><?php echo set_value('bidang',$r->bidang) ;?></th>
                                    </tr>
									<tr>
                                    <th><label>Asal :</label><br><br><?php echo set_value('asal_magang',$r->asal_magang) ;?></th>
                                    </tr>
									<tr>                                                     
                                    <th><label>Gambar :</label><br><br><img src="<?php echo base_url('images/'.$r->foto_magang);?>" width='300' height='300'></th>
                                    </tr>
									<tbody>
									
									</table>
                            <!-- /.box-body -->
                            <br><br><br>
                            <?php }?>
								
                  <!-- .animated -->
       </div><!-- .content -->    
    </div><!-- /#right-panel -->
    <!-- Right Panel -->
 <?php $this->load->view('layout/js') ?>
