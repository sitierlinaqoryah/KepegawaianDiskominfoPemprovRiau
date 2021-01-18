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
                  <?php if(empty($magang)) : ?>
                            <div class="alert alert-danger">Tidak ada data</div>
                        <?php else :?>
                            <table id="datatable" class="table table-bordered table-hover">
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
                                        
                                        foreach($magang AS $item) : ?>   
										<?=form_open_multipart('MagangBaru/proses_simpan/'.$item->id)?>
                                        <tr>                                            
                                            <td><?php echo $item->nama_magang ?> <input type="hidden"  class="form-control" name="nama_magang"  value="<?php echo set_value('nama_magang',$item->nama_magang) ;?>"></td>                        
                                            <td><?php echo $item->jk_magang?> <input type="hidden"  class="form-control" name="jk_magang" value="<?php echo set_value('jk_magang',$item->jk_magang);?>" ></td>
											<td><?php echo $item->nohp_magang?><input type="hidden"  class="form-control" name="nohp_magang" value="<?php echo set_value('nohp_magang',$item->nohp_magang) ;?>"></td>
											<td><?php echo $item->bidang?><input type="hidden"  class="form-control" name="bidang" value="<?php echo set_value('bidang',$item->bidang) ;?>"></td>											
											<td><?php echo $item->asal_magang?> <input type="hidden"  class="form-control" name="asal_magang" value="<?php echo set_value('asal_magang',$item->asal_magang) ;?>"></td>												
                                            <td><img src="<?php echo base_url('images/'.$item->foto_magang);?>" width='100' height='100'> <input type="hidden" class="form-control"  name="foto_magang" value="<?php echo set_value('foto_magang',$item->foto_magang);?>"></td>
                                            <td><a href="<?php echo site_url( 'MagangBaru/hapus/'.$item->id ); ?>" onClick="return confirm('Apakah kamu yakin untuk menghapus ?')" style="color:#990033"  ONMOUSEOVER="this.style.textDecoration='underline';this.style.color = 'red';this.style.cursor= 'hand';" 
           ONMOUSEOUT="this.style.textDecoration='underline';this.style.color = 'blue'" >Hapus</a></td>
		   
		   <td><a href="<?php echo site_url( 'MagangBaru/detail/'.$item->id ); ?>" >Detail</a></td>
		    <td>
     
                             
                                   
                                    
                               
                                    <!-- <label>Jenis Kelamin :</label> -->
                                    
                                
                                    <!-- <label>Nonor Hp :</label> -->
                                    
                           
                                    <!-- <label>Asal :</label> -->
                                    
                                    <!-- <label>Gambar :</label><br> -->
                                    
                            
                           <input type="submit" name="submit" value="Simpan"><?php echo form_close(); ?>
		   </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        <?php endif; ?>

                  
                        </div>
                    </div>
                </div>


                </div>
            </div><!-- .animated -->
       </div><!-- .content -->    
    </div><!-- /#right-panel -->
    <!-- Right Panel -->
 <?php $this->load->view('layout/js') ?> 