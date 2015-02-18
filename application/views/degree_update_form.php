<div class="grid_3">
	&nbsp;
</div>
<div class="grid_9">
	<p><strong>Degree Update Form</strong></p>
	<p><strong><?php echo 'Degree Code : '.$selected_degree; ?></strong></p>
	<strong>Available Courses : </strong>
	<table>
		<tr>
			<th>Course Code</th>
			<th>Lecturer</th>
			<th>Year</th>
			<th>Semester</th>
			<th>Action</th>
		</tr>
		<?php

		$content = $this->degreecourse_model->get_degree_content_by_degree_code($selected_degree);
		if ($content != FALSE)
		{
			foreach ($content as $row)
			{
				echo '<form action="'.base_url().'admin/update_degree" method="post">';
				echo '<input type="hidden" name="selected_degree" value="'.$selected_degree.'"/>';
				echo '<input type="hidden" name="selected_course" value="'.$row->course_code.'"/>';
				echo '<tr>';
				echo '<td>'.$row->course_code.'</td>';
				echo '<td><select name="lecturer_reg_no">';
				$lecturers = $this->courselecturer_model->get_all_lecturers_by_course($row->course_code);
				if ($lecturers != FALSE)
				{
					foreach ($lecturers as $lecturer)
					{
						$lecturer_info = $this->lecturer_model->get_lecturer_by_reg_no($lecturer->lecturer_reg_no);
						echo '<option value="'.$lecturer->lecturer_reg_no.'">'.$lecturer->lecturer_reg_no.' / '.$lecturer_info->display_name.'</option>';
					}
				}
				else 
				{
					$lecturers = $this->lecturer_model->get_all_lecturers();
					foreach ($lecturers as $lecturer)
					{
						$lecturer_info = $this->lecturer_model->get_lecturer_by_reg_no($lecturer->reg_no);
						echo '<option value="'.$lecturer->reg_no.'">'.$lecturer->reg_no.' / '.$lecturer_info->display_name.'</option>';
					}
				}
				echo '</select></td>';
				echo '<td><select name="year">';
				for ($i=0; $i < 5; $i++)
				{
					if ($row->year == $i)
					{
						echo '<option selected value="'.$i.'"> '.$i.' </option>';
					}
					else
					{
						echo '<option value="'.$i.'"> '.$i.' </option>';
					}
				}
				echo '</select></td>';
				echo '<td><select name="semester">';
				for ($i=0; $i < 3; $i++)
				{
					if ($row->semester == $i)
					{
						echo '<option selected value="'.$i.'"> '.$i.' </option>';
					}
					else
					{
						echo '<option value="'.$i.'"> '.$i.' </option>';
					}
				}
				echo '</select></td>';
				echo '<td><input type="submit" value=" Update " /></td>';
				echo '</tr>';
				echo '</form>';
			}
		}
		
		?>
	</table>
</div>




