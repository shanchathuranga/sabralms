<?php
	$usertype = $this->session->userdata('usertype');
	$user_reg_no = $this->session->userdata('user_reg_no');
	
	$user_info = $this->user_model->get_user_by_reg_no($user_reg_no);
?>

<div class="grid_3">
	<?php if ($usertype == 'ADMIN') { ?>
	<div id="side-navigation">
		<ul class="vert-menu">
			<li class="vert-menu-header">Navigation</li>
			<ul id="vert-submenu-1" class="vert-submenu">
				<li><a href="<?php echo base_url(); ?>">Site Home</a></li>
				<li><a href="<?php echo base_url(); ?>admin">My Home</a></li>
			</ul>
			<li class="vert-menu-header">User Registration</li>
			<ul id="vert-submenu-2" class="vert-submenu">
				<li><a href="<?php echo base_url(); ?>admin/student_form">Student Registration</a></li>
				<li><a href="<?php echo base_url(); ?>admin/lecturer_form">Lecturer Registration</a></li>
				<li><a href="<?php echo base_url(); ?>admin/">Admin Registration</a></li>
			</ul>
			<li class="vert-menu-header"><span>System Maintenence</span></li>
			<ul id="vert-submenu-3" class="vert-submenu">
				<li><a href="<?php echo base_url(); ?>admin/degree_form">Degree Program Registration</a></li>
				<li><a href="<?php echo base_url(); ?>admin/course_form">Course Registration</a></li>
                <li><a href="<?php echo base_url(); ?>admin/degreecourse_form">Degree-Course Registration</a></li>
				<li><a href="<?php echo base_url(); ?>admin/degree_selection_form">Update Degree</a></li>
				<li><a href="<?php echo base_url(); ?>admin/image_upload_form">Image upload</a></li>
				<li><a href="<?php echo base_url(); ?>admin/update_site_news">Update Site News</a></li>
			</ul>
		</ul>
	</div>
	<?php } else if ($usertype == 'STUDENT') { ?>
	<div id="side-navigation">
		<ul class="vert-menu">
			<li class="vert-menu-header">Navigation</li>
			<li><a href="<?php echo base_url(); ?>student">My Home</a></li>
		</ul>
	</div>
	<?php } else if ($usertype == 'LECTURER') { ?>
	<div id="side-navigation">
		<ul class="vert-menu">
			<li class="vert-menu-header">Navigation</li>
			<li><a href="<?php echo base_url(); ?>lecturer">My Home</a></li>
		</ul>
	</div>
	<?php } ?>
</div>
<div class="grid_9">
	<h4>Profile</h4>
	<?php
	if (isset($login_errors))
		{
			echo '<p class="error">';
			echo $login_errors;
			echo '</p>';
		}
	?>
	<form action="<?php echo base_url().'user/update_profile'; ?>" method="post" onsubmit="return checkPassword('new_password','new_password_again')">
		<input type="hidden" name="user_id" value="<?php echo $user_info->user_id; ?>" />
		<label>Username</label>
		<br/>
		<input type="text" name="username" value="<?php echo $user_info->username; ?>" disabled/>
		<br/>
		<label>Old Password</label>
		<br/>
		<input type="password" name="password" id="password"/>
		<br/>
		<label>New Password</label>
		<br/>
		<input type="password" name="new_password" id="new_password"/>
		<br/>
		<label>New Password(again)</label>
		<br/>
		<input type="password" name="new_password_again" id="new_password_again"/>
		<br/>
		<br/>
		<input type="submit" value="Update" onclick="clearErrors()"/>
		<br/>
	</form>
</div>