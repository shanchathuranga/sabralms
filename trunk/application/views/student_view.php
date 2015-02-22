<div class="grid_3">
	<div id="side-navigation">
		<ul class="vert-menu">
			<li class="vert-menu-header">Navigation</li>
			<ul id="vert-submenu-1" class="vert-submenu">
				<li><a href="<?php echo base_url(); ?>">Site Home</a></li>
				<li><a href="<?php echo base_url(); ?>student">My Home</a></li>
			</ul>
			<li class="vert-menu-header">Activities</li>
			<ul id="vert-submenu-1" class="vert-submenu">
				<li><a href="<?php echo base_url(); ?>student/view_exam_results">Exam Results</a></li>
				<li><a href="<?php echo base_url(); ?>student/view_assignments">Assignments</a></li>
				<li><a href="<?php echo base_url(); ?>student/view_time_tables">Time Tables</a></li>
			</ul>
		</ul>
	</div>
</div>
<div class="grid_9">
	<?php
		$user_regno = $this->session->userdata('user_reg_no');
		$student = $this->student_model->get_student_by_regitration_no($user_regno);
		$degree_info = $this->degreecourse_model->get_degree_content_by_degree_code($student->degree_code);
	?>
	<h3>Courses</h3>
	<ul>
		<?php
		for ($y=1; $y <= 4; $y++)
		{
			echo '<li>Year '.$y;
			echo '<ul>';
			for ($s=1; $s <= 2; $s++)
			{
				echo '<li>Semester '.$s;
				foreach ($degree_info as $dinfo)
				{
					if ($y == $dinfo->year && $s == $dinfo->semester)
					{
						$course = $this->course_model->get_course_by_code($dinfo->course_code);
						echo '<ul><li>';
						echo '<a href="'.base_url().'student/course_view/'.urlencode(base64_encode($dinfo->course_code)).'">'.
								$dinfo->course_code.' / '.$course->course_title.'</a>';
						echo '</li></ul>';
					}
				}
				echo '</li>';
			}
			echo '</ul>';
			echo '</li>';
		}
		?>
		<br/>
	</ul>
</div>

