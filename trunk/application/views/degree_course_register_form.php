<div class="grid_3">
	&nbsp;
</div>
<div class="grid_9">
	<form action="<?php echo base_url(); ?>admin/degreecourse_register" method="post">
		<h3>Degree Course Registration Form</h3>
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
		<label for="courses">Available Courses:</label>
		<br/>
		<select name="courses[]" width="300px" multiple="multiple" size="10">
			<?php
			// Course List box
			$courses = $this->course_model->get_all_courses();
			foreach ($courses as $cs) {
				echo '<option value="'.$cs->course_code.'">'.$cs->course_title.'</option>';
			}
			?>
		</select>
		<br/>
		<input type="submit" value="Register">
		<br/>
	</form>
</div>

