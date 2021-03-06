<!DOCTYPE html>
<html lang="en">
<head>
<title>Login: <?php print config_item('site_name'); ?></title>
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="description" content="#">
<meta name="author" content="<?php print config_item('developer'); ?>">
<link rel="icon" href="<?php print $config->base_url(); ?>assets/images/favicon.ico" type="image/x-icon">
<link href="https://fonts.googleapis.com/css?family=Mada:300,400,500,600,700" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php print $config->base_url(); ?>assets/bower_components/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php print $config->base_url(); ?>assets/icon/themify-icons/themify-icons.css">
<link rel="stylesheet" type="text/css" href="<?php print $config->base_url(); ?>assets/icon/icofont/css/icofont.css">
<link rel="stylesheet" type="text/css" href="<?php print $config->base_url(); ?>assets/pages/flag-icon/flag-icon.min.css">
<link rel="stylesheet" type="text/css" href="<?php print $config->base_url(); ?>assets/pages/menu-search/css/component.css">
<link rel="stylesheet" type="text/css" href="<?php print $config->base_url(); ?>assets/css/style.css">
</head>
<body>


<section style="background-image:url(<?php print $config->base_url(); ?>assets/images/bg.jpg)" class="login header p-fixed d-flex text-center bg-info">

<div class="container">
<div class="row">
<div class="col-sm-12">
<div class="login-card card-block auth-body m-auto">
<form id="user_login_form" class="md-float-material" method="post" autocomplete="Off" style="margin-top:70px;" action="<?php print $config->base_url(); ?>doAuth/doLogin">
<div class="text-center">
<img src="<?php print $config->base_url(); ?>assets/images/logo.png" alt="logo.png">
</div>
<div class="auth-box">
<div class="row m-b-20">
<div class="col-md-12">
<h3 class="text-left txt-primary">Sign In</h3>
</div>
</div>
<hr />
<div class="input-group">
<input type="text" id="username" name="username" class="form-control" autocomplete="Off" value="" placeholder="Your Username">
<span class="md-line"></span>
</div>
<div class="input-group">
<input type="hidden" id="pageurl" value="<?php print $config->base_url(); ?>">
<input type="hidden" id="login_user_yea" name="login_user_yea">
<input type="password" id="password" name="password" class="form-control" autocomplete="Off" value="" placeholder="Password">
<span class="md-line"></span>
</div>
<div class="row m-t-25 text-left">
<div class="col-sm-7 col-xs-12">
<div class="checkbox-fade fade-in-primary"></div>
</div>
<div class="col-sm-5 col-xs-12 forgot-phone text-right">
<a href="<?php print $config->base_url(); ?>forgotten" class="text-right f-w-600 text-inverse"> Forgot Password?</a>
</div>
</div>
<div class="row m-t-30">
<div class="col-md-12">
<button type="submit" id="login_user" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">Sign in</button>
</div>
<div class="admin_login_div" style="color:#000"></div>
<?php if(isset($SITEURL[1]) and $SITEURL[1] == "logout") { $session->sess_destroy(); ?>
<p class="alert alert-success"><b>Hello Admin! You have successfully logged out of the system.</b></p>
<?php } ?>
</div>
<hr />
<div class="row">
<div class="col-md-10">
<p class="text-inverse text-left m-b-0">Thank you and enjoy the use of the system.</p>
<p class="text-inverse text-left"><b>@ VisamiNetSolutions.com</b></p>
</div>
<div class="col-md-2">
<img src="<?php print $config->base_url(); ?>assets/images/auth/Logo-small-bottom.png" alt="small-logo.png">
</div>
</div>
</div>
</form>

</div>
</div>
</div>
</div>

</section>


<div class="footer bg-inverse">
<p class="text-center">Copyright &copy; <?php print date("Y"); ?> <?php print config_item('site_name'); ?>, All rights reserved.</p>
</div>

<script type="text/javascript" src="<?php print $config->base_url(); ?>assets/bower_components/jquery/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php print $config->base_url(); ?>assets/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php print $config->base_url(); ?>assets/bower_components/popper.js/js/popper.min.js"></script>
<script type="text/javascript" src="<?php print $config->base_url(); ?>assets/bower_components/bootstrap/js/bootstrap.min.js"></script>

<script type="text/javascript" src="<?php print $config->base_url(); ?>assets/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>

<script type="text/javascript" src="<?php print $config->base_url(); ?>assets/bower_components/modernizr/js/modernizr.js"></script>
<script type="text/javascript" src="<?php print $config->base_url(); ?>assets/bower_components/modernizr/js/css-scrollbars.js"></script>

<script type="text/javascript" src="<?php print $config->base_url(); ?>assets/bower_components/classie/js/classie.js"></script>

<script type="text/javascript" src="<?php print $config->base_url(); ?>assets/bower_components/i18next/js/i18next.min.js"></script>
<script type="text/javascript" src="<?php print $config->base_url(); ?>assets/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js"></script>
<script type="text/javascript" src="../bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js"></script>
<script type="text/javascript" src="<?php print $config->base_url(); ?>assets/bower_components/jquery-i18next/js/jquery-i18next.min.js"></script>

<script type="text/javascript" src="<?php print $config->base_url(); ?>assets/js/script.js"></script>
</body>
</html>