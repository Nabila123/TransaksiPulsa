<!DOCTYPE html>
<html>
<head>
	<title>Home Page | Avalanche Online Payment</title>
	<!--link the bootstrap css file-->
	<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>">

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href=" <?php echo base_url('assets/css/materialize.css') ?>"  media="screen,projection"/> 
    <link type="text/css" rel="stylesheet" href="<?php base_url('assets/css/materialize-social.css') ?>"  media="screen,projection"/>     
    <!-- <link rel="icon" href="<?php base_url('assets/image/logo.ico') ?>" type="image/x-icon">  -->

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>


</head>
<body>
<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?php echo base_url(); ?>index.php/home">Avalanche Online Payment</a>
		</div>
		<div class="collapse navbar-collapse" id="navbar1">
			<ul class="nav navbar-nav navbar-right">
				<?php if ($this->session->userdata('login')){ ?>
				<li><p class="navbar-text">Hello <?php echo $this->session->userdata('uname'); ?></p></li>
				<li><a href="<?php echo base_url(); ?>index.php/home/logout">Log Out</a></li>
				<?php } else { ?>
				
				<li><a href="<?php echo base_url(); ?>index.php/login">Login</a></li>
				<li><a href="<?php echo base_url(); ?>index.php/signup">Signup</a></li>
				<?php } ?>
			</ul>
		</div>
	</div>
</nav>

<div class="slider">
  <ul class="slides">
      <li>
          <img class="img-responsive" src="<?php echo base_url('assets/image/slide/working.jpg'); ?>">
          <div class="caption center-align">
              <h3>Avalanche Online Payment</h3>
            
          </div>
      </li>
      <li>
          <img class="img-responsive" src="<?php echo base_url('assets/image/slide/377135-svetik.jpg'); ?>">
          <div class="caption left-align">
              <h3></h3>
              <h5 class="light grey-text text-lighten-3"></h5>
          </div>
      </li>
      <li>
          <img class="img-responsive" src="<?php echo base_url('assets/image/slide/fasilitas-sekolah.jpg'); ?>">
          <div class="caption left-align">
              <h3></h3>
              <h5 class="light grey-text text-lighten-3"></h5>
          </div>
      </li>
  </ul>
</div>


<script type="text/javascript" src="<?php echo base_url("assets/js/jquery-1.10.2.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="assets/js/materialize.js"></script>
<script src="assets/js/init.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
       $('.slider').slider({
          full_width: false,
          interval: 5000,
          transition: 900,
        });
     });

    $(".button-collapse").sideNav();
</script>
</body>
</html>
