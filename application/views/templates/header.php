<html>
	<head>
		<title>URMS</title>
		<link rel="stylesheet" href="https://bootswatch.com/3/flatly/bootstrap.min.css">
	</head>
	<body>
	<nav class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="<?php echo base_url(); ?>">URMS</a>
			</div>
			<div id="navbar">
				<ul class="nav navbar-nav">
					<li><a href="<?php echo base_url(); ?>">Home</a></li>
					<li><a href="<?php echo base_url(); ?>about">About</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="<?php echo base_url(); ?>users/login">Login</a></li>
					<li><a href="<?php echo base_url(); ?>users/register">Register</a></li>
					<!--
					<?php if(!$this->session->userdata('logged_in')) : ?>
						<li><a href="<?php echo base_url(); ?>users/login">Login</a></li>
						<li><a href="<?php echo base_url(); ?>users/register">Register</a></li>
					<?php endif; ?>
					<?php if($this->session->userdata('logged_in')) : ?>
						<li><a href="<?php echo base_url(); ?>users/logout">Logout</a></li>
					<?php endif; ?>
					-->
				</ul>
			</div>
		</div>
	</nav>