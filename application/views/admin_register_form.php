<div class="grid_3">
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
				<li><a href="<?php echo base_url(); ?>admin/admin_form">Admin Registration</a></li>
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
</div>
<div class="grid_9">
	<h2>Admin Registration Form</h2>
	<form action="<?php echo base_url(); ?>admin/admin_register" method="post">
		<label for="reg_no">Registration No:</label>
		<br/>
		<input type="text" name="reg_no" />
		<br/>
		<label for="first_name">First Name:</label>
		<br/>
		<input type="text" name="first_name" />
		<br/>
		<label for="last_name">Last Name:</label>
		<br/>
		<input type="text" name="last_name" />
		<br/>
		<label for="">E-mail:</label>
		<br/>
		<input type="text" name="email">
		<br/>
		<label for="display_name">Display Name:</label>
		<br/>
		<input type="text" name="display_name" />
		<br/>
		<br/>
		<input type="submit" value="Register" />
	</form>
</div>


