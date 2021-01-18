<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Kepegawaian Diskominfo | Login</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">
	<?php $this->load->helper('url'); 
		$this->load->library('javascript');
		?>
    <link rel="stylesheet" href="<?php echo base_url()?>'../../resources/admin/assets/css/normalize.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url()?>'../../resources/admin/assets/css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url()?>'../../resources/admin/assets/css/font-awesome.min.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url()?>'../../resources/admin/assets/css/themify-icons.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url()?>'../../resources/admin/assets/css/flag-icon.min.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url()?>'../../resources/admin/assets/css/cs-skin-elastic.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url()?>'../../resources/admin/assets/scss/style.scss" type="text/css" />

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body class="bg-dark">
    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                        <img class="align-content" src="<?php echo base_url();?>'../../resources/admin/images/logo.png" alt="">
                </div>
                <div class="login-form">
                    <form action="<?php echo site_url('login/aksi_login'); ?>" method="post">
					<table>
                  <div class="form-group">
                            <label>username</label>
                            <input type="text" name="username" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Remember Me
                            </label>
                        </div>
                        <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30" value="login">Login</button>
					
                   </table>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="<?php echo base_url();?>'../../resources/admin/assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="<?php echo base_url();?>'../../resources/admin/assets/js/popper.min.js"></script>
    <script src="<?php echo base_url();?>'../../resources/admin/assets/js/plugins.js"></script>
    <script src="<?php echo base_url();?>'../../resources/admin/assets/js/main.js"></script>


</body>
</html>
