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
				<li><a href="<?php echo base_url();?>posts/create">Create Post</a></li>
				<li><a href="<?php echo base_url();?>categories/create">Create Category</a></li>
			</ul>
		</div>
	</div>
</nav>
<div class="container">	
	
