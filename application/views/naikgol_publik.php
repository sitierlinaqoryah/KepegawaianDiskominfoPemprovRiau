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
					<div class="col-sm-12">
						<div class="title">
							<h3>Informasi Kenaikan <span>Golongan Pegawai</span></h3>
						</div>
					</div>
				</div>
			</div>
			
			<div class="container">
				<div class="row">
				
					<!-- Single Feature-->
					<div class="col-sm-12">
						<div class="single-feature wow fadeInLeft">
							<div class="row">
								<div class="col-md-10">
									<div class="feature-text">
										<h4>Informasi Pegawai Yang Akan Naik Golongan</h4>
										
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Single Feature-->
					

					<!-- Single Feature-->
					<div class="col-sm-8">
						<div class="single-feature wow fadeInLeft">
							<div class="row">
								<div class="col-md-10>
	
										<p>
										<div class="container2">
        <div class="card-body">
                 <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
					  <th>No</th>
                       <th>No Pegawai</th>
						<th>Tanggal naik</th>
						<th>Keterangan</th>
                      </tr>
                    </thead>
                    <tbody>


<?php
if( ! empty($join2)){ // Jika data pada database tidak sama dengan empty (alias ada datanya)
	$no=1;
    foreach($join2 as $data){ // Lakukan looping pada variabel gambar dari controller
        echo "<tr>";?>
		<td><?php echo $no++;?></td>
		<td><?php echo $data->no_pegawai;?></td> 
		<td><?php echo $data->tgl_pangkat;?></td>
		<td><span class="badge badge-success">
		<?php echo $data->lama_naik;?>   hari lagi</td></span>
		
		<?php
    }
}else{ // Jika data tidak ada
    echo "<tr><td colspan='5'>Data tidak ada</td></tr>";
}
?>
</table>
										</br>	</div>
										</div>
										</p>
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
