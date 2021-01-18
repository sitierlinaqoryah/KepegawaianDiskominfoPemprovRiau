<!doctype html>
<html class="no-js" lang="">
    <head>
       	
	    <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Dinas Komunikasi Informatika Dan Statistika Provinsi Riau</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--<link rel="apple-touch-icon" href="apple-touch-icon.png">-->
        <!-- Place favicon.ico in the root directory -->
	<link rel="icon" type="image/png" href="<?php echo base_url()?>'../../resources/img/pic_buat_tab.ico"/>
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,700,600italic,700italic,800,800italic' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
		<!-- Font -->
		
		<?php $this->load->helper('url'); 
		$this->load->library('javascript');
		?>
        <link rel="stylesheet" href="<?php echo base_url().'resources/css/normalize.css'?>" type="text/css"/>
		 <link rel="stylesheet" href="<?php echo base_url().'resources/css/images.css'?>" type="text/css"/>
        <link rel="stylesheet" href="<?php echo base_url().'resources/css/main.css'?>" type="text/css"/>
        <link rel="stylesheet" href="<?php echo base_url().'resources/css/font-awesome.min.css'?>" type="text/css"/>
        <link rel="stylesheet" href="<?php echo base_url().'resources/css/animate.css'?>" type="text/css"/>
        <link rel="stylesheet" href="<?php echo base_url().'resources/css/bootstrap.min.css'?>" type="text/css"/>
        <link rel="stylesheet" href="<?php echo base_url().'resources/css/style.css'?>" type="text/css"/>
        <link rel="stylesheet" href="<?php echo base_url().'resources/css/responsive.css'?>" type="text/css"/>
		<script type='text/javascript' src="<?php echo base_url(); ?>resources/js/vendor/modernizr-2.8.3.min.js"></script>
		
		
    </head>
<!-- Main Menu End -->
<?php $this->load->view('layout/main_menu_publik') ?>
			<!-- Main Menu End -->
			
			<!-- Sider Start -->
			<!-- Sider End -->
			
		</header>
		<!-- Header End -->
		<!-- Testimonials -->
		<!-- Testimonials -->

		<!-- Feature Section -->
		
		<section id="features" class="site-padding">
			
			
			<div class="container">
				<div class="row">
				
					<!-- Single Feature-->
					<div class="col-sm-12">
						<div class="single-feature wow fadeInLeft">
							<div class="row">
								<div class="col-md-10">
									<div class="feature-text">
										<h4>Daftar Magang</h4>
										<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="title">
							<h3>Daftar <span>Magang</span></h3>
						</div>
					</div>
				</div>
			</div>
			
			<div class="contact">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<h4>Silahkan Isi Data Diri Anda</strong></h4>
							<form id="contactform" <?php echo form_open("MagangBaru/tambah", array('enctype'=>'multipart/form-data'));?>							
									
										<h5>Nama</h5><input type="text" name="nama_magang" placeholder="* Nama Anda" value="<?php echo set_value('nama_magang'); ?>" />
										<div class="validation">
										</div>
									
									
									
										<h5>Jenis Kelamin</h5>
											  <input type="radio" name="jk_magang" value="Laki Laki" "<?php echo set_value('jk_magang'); ?>"> Laki Laki<br>
											  <input type="radio" name="jk_magang" value="Perempuan" "<?php echo set_value('jk_magang'); ?>"> Perempuan<br>
											  
											
										<div class="validation">
										</div>
									
									
										<h5>Nomor Hp</h5><input type="text" name="nohp_magang" placeholder="Nomor Hp" value="<?php echo set_value('nohp_magang'); ?>" />
										<div class="validation">
										</div>
										
										<h5>Bidang</h5>
										<select name="bidang" id="bidang" class="form-control">             
                                <option value="SEKRETARIAT">SEKRETARIAT</option>
                                <option value="BIDANG INFORMASI DAN KOMUNIKASI PUBLIK">BIDANG INFORMASI DAN KOMUNIKASI PUBLIK</option>
                                <option value="BIDANG PENGELOLAAN INFRASTRUKTUR E-GOVERNMENT">BIDANG PENGELOLAAN INFRASTRUKTUR E-GOVERNMENT</option>
                                <option value="BIDANG LAYANAN E-GOVERNMENT">BIDANG LAYANAN E-GOVERNMENT</option>
                                <option value="BIDANG STATISTIK">BIDANG STATISTIK</option>
                                <option value="BIDANG PERSANDIAN">BIDANG PERSANDIAN</option>                                
                              </select>
										
										<div class="validation">
										</div>
										
										
									
										<h5>Asal Sekolah</h5><input type="text" name="asal_magang"  placeholder="Asal Sekolah" value="<?php echo set_value('asal_magang'); ?>"></textarea>
										<div class="validation">
										</div>
										<h5>Foto</h5><input type="file" name="foto_magang"  placeholder="Pilih Foto" value="<?php echo set_value('foto_magang'); ?>"></textarea>
										<div class="validation">
										</div>
										<p>
											
											

											<button class="btn btn-theme margintop10 pull-left" input type="submit" name="submit" value="submit" >Kirim<?php echo form_close(); ?></button>
										</p>
									</div>
								
							</form>
						</div>
					</div>
				</div>
			</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Single Feature-->
					

					<!-- Single Feature-->
					<div class="col-sm-3">
						<div class="single-feature wow fadeInLeft">
							<div class="row">
								<div class="col-md-10">
	
										<p>
										<div class="container">

											<span align="right"><?php echo form_open('MagangFix/search_publik') ?>
		<input type="text" name="keyword" placeholder="Cari">
		<input type="submit" name="search_submit" value="Cari"></span>

 
		<div class="col-sm-12">
						<div class="title">
							<h3>Daftar Anggota Magang<span> Diskominfo Riau</span></h3>
						</div>
					</div>
  
   
   <?php
   foreach($magangfix as $row)
   {
    echo '
    <div class="col-md-4" style="padding:16px; background-color:#ffff; border:0px solid #ccc; margin-bottom:16px; height:270px" align="center">
     <img src="'.base_url().'images/'.$row->foto_magang.'"  height="250" width="200"  />
     
     <h6>'.$row->nama_magang.'</h6>
     <h6>'.$row->asal_magang.'</h6>     
    </div>
    ';
   }
   ?>
      
  </div>
 </div>
						</div>
					</div>
					<!-- Single Feature-->
					
					
				</div>
				
				
				<div class="row">
				
					<!-- Single Feature--> 
					
					<div class="col-sm-4">
						<div class="single-feature wow fadeInLeft">
							<div class="row">
								<div class="col-md-2">
									<div class="feature-icon">
									
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Single Feature-->
					
					<!-- Single Feature-->
					<div class="col-sm-4">
						<div class="single-feature wow fadeInLeft">
							<div class="row">
								<div class="col-md-2">
									<div class="feature-icon">
										
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Single Feature-->	
				</div>			
			</div>
		</section>
		
		<!-- Feature Section -->
		
		

		<!-- From the Blog-->
		
		<!-- From the Blog-->
		
		
		<!-- Info Kepegawaian --->

		<!-- Info Kepegawaian --->
		
		
		<!--FAQ-->

		<!--FAQ-->
		
		
		
		<!-- Contact -->
		
		<!-- Contact -->
<!-- footer -->
	<?php $this->load->view('layout/footer_publik') ?>
		<!-- footer -->
		
        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="resources/js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script src="../../resources/js/plugins.js"></script>
        <script src="../../resources/js/bootstrap.min.js"></script>
        <script src="../../resources/js/jquery.mousewheel-3.0.6.pack.js"></script>
        <script src="../../resources/js/paralax.js"></script>
        <script src="../../resources/js/jquery.smooth-scroll.js"></script>
        <script src="../../resources/js/jquery.sticky.js"></script>
        <script src="../../resources/js/wow.min.js"></script>
        <script src="../../resources/js/main.js"></script>
		<script src="../../resources/js/marque.js"></script>
        
		
		<script type="text/javascript">
			$(document).ready(function(){
				$('a[href^="#"]').on('click',function (e) {
					e.preventDefault();

					var target = this.hash;
					var $target = $(target);

					$('html, body').stop().animate({
						 'scrollTop': $target.offset().top
					}, 900, 'swing');
					});
			});
		</script>
		
		<script src="resources/js/custom.js"></script>
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>
