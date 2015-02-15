<div class="grid_3">
	&nbsp;
</div>
<div class="grid_9">
	<h2>Lecturer Registration Form</h2>
	<form action="<?php echo base_url(); ?>admin/lecturer_register" method="post">
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
		<label for="display_name">Display Name:</label>
		<br/>
		<input type="text" name="display_name" />
		<br/>
		<label for="reg_no">Courses:</label>
		<br/>
		<!-- From list box -->
		<table>
		<tr>
		<td>
			<select name="all_courses" multiple="multiple" size="10" id="all_courses">
		<?php
			$courses_list = $this->course_model->get_all_courses();
			foreach ($courses_list as $course)
			{
				echo '<option value="'.$course->course_code.'">'.$course->course_title.'</option>';
			}
		?>
		</select>
		</td>
		<td align="center" valign="middle">
		<input type="button" onClick="moveListBoxItem('all_courses','selected_courses')" value=" >> ">
		<br />
		<input type="button" onClick="moveListBoxItem('selected_courses','all_courses')" value=" << ">
		</td>
		<td>
		<!-- To list box -->
		<select name="selected_courses[]" multiple="multiple" size="10" id="selected_courses">
		</select>
		</td>
		</tr>
		</table>
		<input type="submit" value="Register" />
	</form>
</div>


