<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>RMA</title>
	<!-- <link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/minty/bootstrap.min.css"> -->
	<link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css">
	<!-- <link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/superhero/bootstrap.min.css"> -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">

	<script src="http://cdn.ckeditor.com/4.10.0/standard/ckeditor.js"></script>
</head>
<body>
	
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
	<div class="container">
			<a href="<?php echo base_url(); ?>" class="navbar-brand">RMA</a>
			<ul class="navbar-nav left">
				<li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>">Home</a></li>
				<li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>about">About</a></li>
				<li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>posts">Blog</a></li>
				<li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>categories">Categories</a></li>
				

			</ul>

			<ul class="navbar-nav right">
				<li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>posts/create">Create Post</a></li>
				<li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>categories/create">Create category</a></li>
			</ul>
	</div>
</nav>

<div class="container">
