<?php
	$usertype = $this->session->userdata('usertype');
?>

<div class="grid_3">
	<?php if ($usertype == 'LECTURER') { ?>
	<div id="side-navigation">
		<ul class="vert-menu">
			<li class="vert-menu-header">Navigation</li>
			<ul id="vert-submenu-1" class="vert-submenu">
				<li><a href="<?php echo base_url(); ?>">Site Home</a></li>
				<li><a href="<?php echo base_url(); ?>lecturer">My Home</a></li>
			</ul>
			<li class="vert-menu-header">Activities</li>
			<ul id="vert-submenu-1" class="vert-submenu">
				<li><a href="<?php echo base_url(); ?>lecturer/view_exam_results">Exam Results</a></li>
				<li><a href="<?php echo base_url(); ?>lecturer/view_assignments">Assignments</a></li>
				<li><a href="<?php echo base_url(); ?>lecturer/view_time_tables">Time Tables</a></li>
			</ul>
		</ul>
	</div>
	<?php } else if ($usertype == 'STUDENT') { ?>
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
	<?php } ?>
</div>
<div class="grid_9">
	<form action="<?php echo base_url().'lecturer/upload_examresult'; ?>" method="post" enctype="multipart/form-data">
		<h4>Exam Results</h4>
		<label>Title</label>
		<br/>
		<input type="text" name="title" />
		<br/>
		<label>Course</label>
		<br/>
		<select name="course_code">
			<?php
			$coursesList = $this->courselecturer_model->get_all_courses_by_lecturer($this->session->userdata('user_reg_no'));
			if ($coursesList != FALSE)
			{
				foreach ($coursesList as $courseInfo)
				{
					$course = $this->course_model->get_course_by_code($courseInfo->course_code);
					echo '<option value="'.$course->course_code.'">'.$course->course_title.'</option>';
				}
			}
			?>
		</select>
		<br/>
		<br/>
		<input type="file" name="userfile" size="20" />
		<br/>
		<br/>
		<input type="submit" value="Upload Exam Result" name="submit" />
	</form>
	
	<br/>
	<hr/>
	<h4>Current Exam Results</h4>
	
	<?php
	
	$examresultList = $this->examresult_model->get_examresults_by_lecturer($this->session->userdata('user_reg_no'));
	if ($examresultList != FALSE)
	{
		echo '<table>';
		foreach ($examresultList as $examresult)
		{
			$course = $this->course_model->get_course_by_code($examresult->course_code);
			echo '<tr>';
			echo '<td>'.$examresult->ex_title.'</td>';
			echo '<td>'.$course->course_code.' / '.$course->course_title.'</td>';
			echo '<td><a href="'.base_url().'lecturer/download_examresult/'.$examresult->ex_id.'">'.$examresult->display_name.'</a></td>';
			echo '<td><a href="'.base_url().'lecturer/delete_examresult/'.$examresult->ex_id.'">Delete</a></td>';
			echo '</tr>';
		}
		echo '</table>';
	}
	
	?>
	
</div>