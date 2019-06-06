<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.min.css';?>">
	<link rel="stylesheet" href="<?php echo base_url().'assets/css/style.css';?>">
	<script src="http://cdn.ckeditor.com/4.11.4/standard/ckeditor.js"></script>
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>ciBlog</title>
</head>
<body>
<nav class="navbar navbar-inverse">
	<div class="container">
		<div class="navbar-header">
			<a href="<?php echo base_url();?>" class="navbar-brand">ciBlog</a>
		</div>
		<div id="navbar">
			<ul class="nav navbar-nav">
				<li><a href="<?php echo base_url();?>">Home</a></li>
				<li><a href="<?php echo base_url();?>about">About</a></li>
				<li><a href="<?php echo base_url();?>categories">Categories</a></li>
				<li><a href="<?php echo base_url();?>posts">Blog</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<!-- not logged in -->
				<?php if(!$this->session->userdata('logged_in')):?>
					<li><a href="<?php echo base_url();?>users/login">Log-in</a></li>
					<li><a href="<?php echo base_url();?>users/register">Register</a></li>
				<?php endif; ?>
				<!-- log in state -->
				<?php if($this->session->userdata('logged_in')):?>
					<li><a href="<?php echo base_url();?>posts/create">Create Post</a></li>
					<li><a href="<?php echo base_url();?>categories/create">Create Category</a></li>
					<li><a href="<?php echo base_url();?>users/logout">Log-out</a></li>
				<?php endif;?>
			</ul>
		</div>
	</div>
</nav>
<div class="container">	
	<!-- flash-messeges -->
	<?php if($this->session->flashdata('user_registered') ): ?>
		<?="<p class='alert alert-success'>".$this->session->flashdata('user_registered')."</p>";?>
	<?php endif;?>
	
	<?php if($this->session->flashdata('post_created') ): ?>
		<?="<p class='alert alert-success'>".$this->session->flashdata('post_created')."</p>";?>
	<?php endif;?>
	
	<?php if($this->session->flashdata('post_updated') ): ?>
		<?="<p class='alert alert-success'>".$this->session->flashdata('post_updated')."</p>";?>
	<?php endif;?>
	
	<?php if($this->session->flashdata('category_created') ): ?>
		<?="<p class='alert alert-success'>".$this->session->flashdata('category_created')."</p>";?>
	<?php endif;?>

	<?php if($this->session->flashdata('post_deleted') ): ?>
		<?="<p class='alert alert-success'>".$this->session->flashdata('post_deleted')."</p>";?>
	<?php endif;?>

	<?php if($this->session->flashdata('user_login') ): ?>
		<?="<p class='alert alert-success'>".$this->session->flashdata('user_login')."</p>";?>
	<?php endif;?>

	<?php if($this->session->flashdata('login_failed') ): ?>
		<?="<p class='alert alert-danger'>".$this->session->flashdata('login_failed')."</p>";?>
	<?php endif;?>

	<?php if($this->session->flashdata('user_loggedout') ): ?>
		<?="<p class='alert alert-success'>".$this->session->flashdata('user_loggedout')."</p>";?>
	<?php endif;?>

	<?php if($this->session->flashdata('user_notlogin') ): ?>
		<?="<p class='alert alert-danger'>".$this->session->flashdata('user_notlogin')."</p>";?>
	<?php endif;?>
