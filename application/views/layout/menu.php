  <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="<?php echo base_url().'index.php/admin'?>"><i class="menu-icon ti ti-user">  Admin</i></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="<?php echo base_url().'index.php/admin'?>"> <i class="menu-icon fa fa-dashboard"></i>Dashboard</a></li>
                    <h3 class="menu-title">Olah Data Admin</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-group"></i>Kepegawaian</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-list"></i><a href="<?php echo base_url().'index.php/pegawai' ?>">Daftar Pegawai</a></li>
                            <li><i class="fa fa-pagelines"></i><a href="<?php echo site_url('pangkat/naik_golongan'); ?>">Kenaikan Pangkat/Golongan</a></li>
                            <li><i class="fa fa-money"></i><a href="<?php echo site_url('gaji/'); ?>">Kenaikan Gaji</a></li>                            <li><i class="fa fa-cog"></i><a href="<?php echo base_url().'index.php/pensiun' ?>"> Pensiun</a></li>
			</ul>			
						
                        <ul>
                    </li>
<li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Honor</a>
                        <ul class="sub-menu children dropdown-menu">


                            <li><i class="fa fa-plus-square-o"></i><a href="<?php echo base_url().'index.php/honor/tambah' ?>">Tambah Pegawai</a></li>
                            <li><i class="fa fa-plus-square-o"></i><a href="<?php echo base_url().'index.php/honor' ?>">Semua Data</a></li>

                             <li><i class="fa fa-glass"></i><a href="<?php echo base_url().'index.php/sekretariat' ?>">Bidang Sekretariat</a></li>


                        <li><i class="fa fa-group"></i><a href="<?php echo base_url().'index.php/ikp' ?>">Bidang IKP</a></li>

                       

                        <li><i class="fa fa-cog"></i><a href="<?php echo base_url().'index.php/pengelolahan' ?>">Bidang Pengelolahan</a></li>

                        <li><i class="fa fa-dashboard"></i><a href="<?php echo base_url().'index.php/statistika' ?>">Bidang Statistika </a></li>

                         <li><i class="fa fa-sign-in"></i><a href="<?php echo base_url().'index.php/persandian' ?>">Bidang Persandian</a></li>



                      
                      
                                                
                        
                        
                        
                    
                        
                        
                        
                        
                    
                        
                              </ul>
                              <ul>
                    </li>
<li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-file-text-o"></i>Magang</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="<?php echo base_url().'index.php/MagangBaru'?>">Daftar Nama Magang Mendaftar</a></li>  
                            <li><i class="fa fa-puzzle-piece"></i><a href="<?php echo base_url().'index.php/MagangFix'?>">Daftar Nama Magang Fix</a></li>                           
                        </ul>

                   
                    <h3 class="menu-title">Aksi</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Pilih</a>
                        <ul class="sub-menu children dropdown-menu">
                            
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="<?php echo site_url('login/logout'); ?>">Logout</a></li>
                           
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>