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

<
            <div class="navbar-collapse collapse">  <a href="<?php echo base_url().'index.php/honor/menu_public' ?>" class="btn btn-lg btn-block btn-success"  >Tenaga Harian Lepas Bidang IKP Diskominfo</a>
           


    
   
        
        
        <div class="row">
        
          <!-- Single Feature-->
   <?php
   foreach($honor as $row)
   {
    echo '
    <div class="col-md-4" style="padding:16px; background-color:#ffff; border:0px solid #ccc; margin-bottom:16px; height:280px" align="center">
     <img src="'.base_url().'images/'.$row->foto.'"  height="250" width="200"  />
     
     <h6>'.$row->nama.'</h6>
     <h6>Lama Bekerja '.$row->lama_kerja.' Tahun<h6>
   
     
     
    </div>

    
  
    ';
   }
   ?>
          
          
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
<!-- footer --><br>
 
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
