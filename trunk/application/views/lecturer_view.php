<div class="grid_3">
	<div id="side-navigation">
		<ul class="vert-menu">
			<li class="vert-menu-header">Navigation</li>
			<li onclick="toggleMenuItem('vert-submenu-1')"><span>Attachment</span></li>
			<ul id="vert-submenu-1" class="vert-submenu">
				<li><a href="<?php echo base_url(); ?>admin/add_attachment_form">Add Attachment</a></li>
				<li><a href="<?php echo base_url(); ?>admin/lecturer_form">Update Attachment</a></li>
				<li><a href="<?php echo base_url(); ?>admin/Site_news">Delete Attachment</a></li>
			</ul>
			<li onclick="toggleMenuItem('vert-submenu-2')"><span>Assignment</span></li>
			<ul id="vert-submenu-2" class="vert-submenu">
				<li><a href="<?php echo base_url(); ?>admin/add_assignment_form">Add Assignment</a></li>
				<li><a href="<?php echo base_url(); ?>admin/course_form">Update Assignment</a></li>
                                <li><a href="<?php echo base_url(); ?>admin/degree_course_form">Delete Assignment</a></li>
			</ul>
                        <li onclick="toggleMenuItem('vert-submenu-3')"><span>Site News</span></li>
			<ul id="vert-submenu-3" class="vert-submenu">
				<li><a href="<?php echo base_url(); ?>admin/add_news_form">Add News</a></li>
				<li><a href="<?php echo base_url(); ?>admin/course_form">Update News</a></li>
                                <li><a href="<?php echo base_url(); ?>admin/degree_course_form">Delete News</a></li>
			</ul>
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
					echo '<a href="#">'.$course->course_title.'</a>';
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
					echo '<a href="#">'.$course->course_title.'</a>';
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
					echo '<a href="#">'.$course->course_title.'</a>';
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
					echo '<a href="#">'.$course->course_title.'</a>';
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
					echo '<a href="#">'.$course->course_title.'</a>';
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
					echo '<a href="#">'.$course->course_title.'</a>';
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
					echo '<a href="#">'.$course->course_title.'</a>';
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
					echo '<a href="#">'.$course->course_title.'</a>';
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

