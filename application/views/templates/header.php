<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo asset_url('css/bootstrap.min.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo asset_url('css/bootstrap.min.css.map');?>">
  	<link rel="stylesheet" type="text/css" href="<?php echo asset_url('css/bootstrap-grid.css');?>">
  	<link rel="stylesheet" type="text/css" href="<?php echo asset_url('css/bootstrap-reboot.css');?>">
  	<link rel="stylesheet" type="text/css" href="<?php echo asset_url('css/allnewme.css');?>">
  	<!-- Optional JavaScript -->
    <script src="<?php echo asset_url('js/jquery-3.2.1.min.js');?>" type="text/javascript" charset="utf-8" async defer></script>
    <script src="<?php echo asset_url('js/jquery-ui-1.12.1.custom/jquery-ui.min.js');?>" type="text/javascript" charset="utf-8" async defer></script>
    <script src="<?php echo asset_url('js/popper.min.js');?>" type="text/javascript" charset="utf-8" async defer></script>
  	<script src="<?php echo asset_url('js/main.js');?>" type="text/javascript"></script>
    <script src="<?php echo asset_url('js/bootstrap.js');?>" type="text/javascript" charset="utf-8" async defer></script>
  </head>
  <body>
	<nav class="navbar">
		<div class="container-fluid"> 
			<div class="row">
				<div class="col-md-12">
					<div class="navbar-header">
						<a class="navbar-brand" href="<?php echo base_url(); ?>">ZOE LOVE U</a>
					</div>
          <div class="smallmenu"></div>
					<div class="navbar-body">      
						<div class="navbar-nav">          
							<div class="headermenu liststyle">
								<span class="hvr-underline-from-left"><a href="<?php echo base_url(); ?>">Home</a></span>
								<span class="hvr-underline-from-left"><a href="<?php echo base_url(); ?>about">About</a></span>
								<span class="hvr-underline-from-left"><a href="<?php echo base_url(); ?>mywork">My work</a></span>
								<span class="hvr-underline-from-left"><a href="<?php echo base_url(); ?>posts">More me</a></span>
								<span class="hvr-underline-from-left"><a href="<?php echo base_url(); ?>categories">Category</a></span>
							</div>
						</div>
						<div class="navbar-nav navbar-right">
							<div class="headermenu liststyle">
							<?php if(!$this->session->userdata('logged_in')) : ?>
								<span class="hvr-underline-from-left"><a href="<?php echo base_url(); ?>users/login">Login</a></span>	
								<span class="hvr-underline-from-left"><a href="<?php echo base_url(); ?>users/register">Register</a></span>	
							<?php endif; ?>
							<?php if($this->session->userdata('logged_in')) : ?>
								<span class="hvr-underline-from-left"><a href="<?php echo base_url(); ?>posts/create">Create Post</a></span>			
								<span class="hvr-underline-from-left"><a href="<?php echo base_url(); ?>categories/create">Create category</a></span>
								<span class="hvr-underline-from-left"><a href="<?php echo base_url(); ?>users/logout">Logout</a></span>	
							<?php endif; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</nav>

	<div class="container-fluid">
      <!-- Flash messages -->
      <?php if($this->session->flashdata('user_registered')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_registered').'</p>'; ?>
      <?php endif; ?>

      <?php if($this->session->flashdata('post_created')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_created').'</p>'; ?>
      <?php endif; ?>

      <?php if($this->session->flashdata('post_updated')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_updated').'</p>'; ?>
      <?php endif; ?>

      <?php if($this->session->flashdata('category_created')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('category_created').'</p>'; ?>
      <?php endif; ?>

      <?php if($this->session->flashdata('post_deleted')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_deleted').'</p>'; ?>
      <?php endif; ?>

      <?php if($this->session->flashdata('login_failed')): ?>
        <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>'; ?>
      <?php endif; ?>

      <?php if($this->session->flashdata('user_loggedin')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedin').'</p>'; ?>
      <?php endif; ?>

       <?php if($this->session->flashdata('user_loggedout')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedout').'</p>'; ?>
      <?php endif; ?>

