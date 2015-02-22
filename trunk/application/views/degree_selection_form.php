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
	<p><strong>Degree Selection Form</strong></p>
	<form action="<?php echo base_url(); ?>admin/degree_update_form" method="post">
		<label for="degree">Degree:</label>
		<br/>
		<select name="degree">
		<?php
			// Degree combo box
			$degrees = $this->degree_model->get_all_degrees();
			foreach ($degrees as $deg) {
				echo '<option value="'.$deg->degree_code.'">'.$deg->degree_title.'</option>';
			}
		?>
		</select>
		<br/>
		<input type="submit" value="Update">
		<br/>
	</form>
</div>
