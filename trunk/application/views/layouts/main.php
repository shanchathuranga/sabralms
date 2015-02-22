<!DOCTYPE html>
<head>
	<title>LMS - Sabaragamuwa University</title>
	<link href="<?php echo base_url(); ?>assets/css/960.css" rel="stylesheet"/>
	<link href="<?php echo base_url(); ?>assets/css/reset.css" rel="stylesheet"/>
	<link href="<?php echo base_url(); ?>assets/css/text.css" rel="stylesheet"/>
	<link href="<?php echo base_url(); ?>assets/css/custom.css" rel="stylesheet"/>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/custom.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>nicedit/nicEdit.js"></script>
</head>
<body>
	<div id="top-container">
		<div class="container_12">
			<div id="logo-area">
				<div id="logo" class="grid_9">
					<p class="logo-title">
						<span class="lms-text">Learning Management System<span/><br/>
						<span class="uni-text">Sabaragamuwa University of Sri Lanka<span/>
					</p>
				</div>
				<?php
					$display_name = $this->session->userdata('display_name');
					if ( isset($display_name) && !empty($display_name) ) :
				?>
				<div id="login-area" class="grid_3">You are logged in as <b><?php echo $display_name; ?></b><br/>
					<a href="<?php echo base_url(); ?>user/logout">Logout</a></div>
				<?php else : ?>
				<div id="login-area" class="grid_3">You are not logged in<br/><a href="<?php echo base_url(); ?>user/login">Login Here</a></div>
				<?php endif; ?>
			</div>
		</div>
		<div id="brown-line"></div>-
	</div>
	<br/>
	
	<div class="container_12">
		<?php $this->load->view($main_content); ?>
	</div>
	
	<br/>
	<hr/>
	<footer>
		<p><center><small>&COPY; Copyright 2015</small></center></p>
	</footer>
</body>
</html>