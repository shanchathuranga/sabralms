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
</div>
<div class="grid_9">
	<form action="<?php echo base_url(); ?>admin/student_regrister" method="post">
		<label for="">Reg No:</label>
		<br/>
		<input type="text" name="reg_no">
		<br/>
		<label for="">First Name:</label>
		<br/>
		<input type="text" name="first_name">
		<br/>
		<label for="">Last Name:</label>
		<br/>
		<input type="text" name="last_name">
		<br/>
		<label for="">EP No:</label>
		<br/>
		<input type="text" name="ep_no">
		<br/>
		<label for="">Contact No:</label>
		<br/>
		<input type="text" name="contact_no">
		<br/>
		<label for="">E-mail:</label>
		<br/>
		<input type="text" name="email">
		<br/>
		<label for="">Degree Program:</label>
		<br/>
		<select name="degree_code">
			<?php
			$result = $this->degree_model->get_all_degrees();
			foreach ($result as $deg) {
				echo '<option value="' . $deg->degree_code . '">' . $deg->degree_title . '</option>';
			}
			?>
		</select>
		<br/>
		<label for="year">Year:</label>
		<br/>
		<select name="year">
			<option value="1">Year 1</option>
			<option value="2">Year 2</option>
			<option value="3">Year 3</option>
			<option value="4">Year 4</option>
		</select>
		<br/>
		<label for="semester">Semester:</label>
		<br/>
		<select name="semester">
			<option value="1">Semester 1</option>
			<option value="2">Semester 2</option>
		</select>
		<br/>
		<br/>
		<input type="checkbox" name="add_user" value="1" /> Create new user for this student
		<br/>
		<br/>
		<input type="submit" value="Register">
		<br/>
	</form>
</div>
