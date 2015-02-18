<div class="grid_3">
	<div id="side-navigation">
		<ul class="vert-menu">
			<li class="vert-menu-header">Navigation</li>
			<li><a href="<?php echo base_url(); ?>lecturer">My Home</a></li>
		</ul>
	</div>
</div>
<div class="grid_9">
	<?php
		$user_regno = $this->session->userdata('user_reg_no');
	?>
	<h3>Courses</h3>
	<ul>
		<li>Year 1
		<ul>
			<li>Semester 1
		<?php
			$course_list = $this->courselecturer_model->get_all_courses_by_lecturer_by_year_by_semester($user_regno, 1, 1);
			if ($course_list)
			{
				foreach ($course_list as $course)
				{
					echo '<ul><li>';
					echo '<a href="'.base_url().'lecturer/update_course_view/'.urlencode(base64_encode($course->course_code)).'">'.$course->course_title.'</a>';
					echo '</li></ul>';
				}
			}
			else
			{
				echo '<ul><li>No courses</li></ul>';
			}
		?>
			</li>
			<li>Semester 2
		<?php
			$course_list = $this->courselecturer_model->get_all_courses_by_lecturer_by_year_by_semester($user_regno, 1, 2);
			if ($course_list)
			{
				foreach ($course_list as $course)
				{
					echo '<ul><li>';
					echo '<a href="'.base_url().'lecturer/update_course_view/'.urlencode(base64_encode($course->course_code)).'">'.$course->course_title.'</a>';
					echo '</li></ul>';
				}
			}
			else
			{
				echo '<ul><li>No courses</li></ul>';
			}
		?>
			</li>
		</ul>
		</li>
		<li>Year 2
		<ul>
			<li>Semester 1
		<?php
			$course_list = $this->courselecturer_model->get_all_courses_by_lecturer_by_year_by_semester($user_regno, 2, 1);
			if ($course_list)
			{
				foreach ($course_list as $course)
				{
					echo '<ul><li>';
					echo '<a href="'.base_url().'lecturer/update_course_view/'.urlencode(base64_encode($course->course_code)).'">'.$course->course_title.'</a>';
					echo '</li></ul>';
				}
			}
			else
			{
				echo '<ul><li>No courses</li></ul>';
			}
		?>
			</li>
			<li>Semester 2
		<?php
			$course_list = $this->courselecturer_model->get_all_courses_by_lecturer_by_year_by_semester($user_regno, 2, 2);
			if ($course_list)
			{
				foreach ($course_list as $course)
				{
					echo '<ul><li>';
					echo '<a href="'.base_url().'lecturer/update_course_view/'.urlencode(base64_encode($course->course_code)).'">'.$course->course_title.'</a>';
					echo '</li></ul>';
				}
			}
			else
			{
				echo '<ul><li>No courses</li></ul>';
			}
		?>
			</li>
		</ul>
		</li>
		<li>Year 3
		<ul>
			<li>Semester 1
		<?php
			$course_list = $this->courselecturer_model->get_all_courses_by_lecturer_by_year_by_semester($user_regno, 3, 1);
			if ($course_list)
			{
				foreach ($course_list as $course)
				{
					echo '<ul><li>';
					echo '<a href="'.base_url().'lecturer/update_course_view/'.urlencode(base64_encode($course->course_code)).'">'.$course->course_title.'</a>';
					echo '</li></ul>';
				}
			}
			else
			{
				echo '<ul><li>No courses</li></ul>';
			}
		?>
			</li>
			<li>Semester 2
		<?php
			$course_list = $this->courselecturer_model->get_all_courses_by_lecturer_by_year_by_semester($user_regno, 3, 2);
			if ($course_list)
			{
				foreach ($course_list as $course)
				{
					echo '<ul><li>';
					echo '<a href="'.base_url().'lecturer/update_course_view/'.urlencode(base64_encode($course->course_code)).'">'.$course->course_title.'</a>';
					echo '</li></ul>';
				}
			}
			else
			{
				echo '<ul><li>No courses</li></ul>';
			}
		?>
			</li>
		</ul>
		</li>
		<li>Year 4
		<ul>
			<li>Semester 1
		<?php
			$course_list = $this->courselecturer_model->get_all_courses_by_lecturer_by_year_by_semester($user_regno, 4, 1);
			if ($course_list)
			{
				foreach ($course_list as $course)
				{
					echo '<ul><li>';
					echo '<a href="'.base_url().'lecturer/update_course_view/'.urlencode(base64_encode($course->course_code)).'">'.$course->course_title.'</a>';
					echo '</li></ul>';
				}
			}
			else
			{
				echo '<ul><li>No courses</li></ul>';
			}
		?>
			</li>
			<li>Semester 2
		<?php
			$course_list = $this->courselecturer_model->get_all_courses_by_lecturer_by_year_by_semester($user_regno, 4, 2);
			if ($course_list)
			{
				foreach ($course_list as $course)
				{
					echo '<ul><li>';
					echo '<a href="'.base_url().'lecturer/update_course_view/'.urlencode(base64_encode($course->course_code)).'">'.$course->course_title.'</a>';
					echo '</li></ul>';
				}
			}
			else
			{
				echo '<ul><li>No courses</li></ul>';
			}
		?>
			</li>
		</ul>
		</li>
	</ul>	
</div>
