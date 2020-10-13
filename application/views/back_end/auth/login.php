<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
	<title>Auth | Coffee - HUB</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="<?php echo base_url('assets/back_end/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/back_end/font-awesome/css/font-awesome.min.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/back_end/linearicons/style.css') ?>">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="<?php echo base_url('assets/back_end/css/main.css') ?>">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="<?php echo base_url('assets/back_end/css/demo.css') ?>">
	<!-- GOOGLE FONTS -->
	<link href="<?php echo base_url('assets/back_end/css/font_googleapis.css') ?>" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('assets/back_end/img/apple-icon.png') ?>">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url('assets/back_end/img/favicon.png') ?>">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
				<div class="auth-box" style="width: 40%;">
						<div class="content">
							<div class="header">
								<div class="logo text-center"><img src="<?php echo base_url('assets/back_end/img/logo-dark3.png') ?>" alt="Klorofil Logo"></div>
								<p class="lead">Login to your account</p>
							</div>
							<?= $this->session->flashdata('pesan'); ?>
							<div align="center">
							<form class="form-auth-small" method="post" action="<?php echo base_url('back_end/Authentication/act_login'); ?>" style="width: 50%;">
								<div class="form-group">
									<label for="signin-email" class="control-label sr-only">Username</label>
									<input type="text" class="form-control" id="signin-email" name="admin_username" placeholder="Username">
								</div>
								<div class="form-group">
									<label for="signin-password" class="control-label sr-only">Password</label>
									<input type="password" class="form-control" name="admin_password" id="signin-password" placeholder="Password">
								</div>
								<!--
								<div class="form-group clearfix">
									<label class="fancy-checkbox element-left">
										<input type="checkbox">
										<span>Remember me</span>
									</label>
								</div>
							-->
								<button type="submit" class="btn btn-primary btn-lg btn-block">LOGIN</button>
								<!--
								<div class="bottom">
									<span class="helper-text"><i class="fa fa-lock"></i> <a href="#">Forgot password?</a></span>
								</div>
							-->
							</form>
						</div>
						</div>
					<!--
					<div class="right">
						<div class="overlay"></div>
						<div class="content text">
							<h1 class="heading">Free Bootstrap dashboard template</h1>
							<p>by The Develovers</p>
						</div>
					</div>
				-->
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- END WRAPPER -->
</body>

</html>
