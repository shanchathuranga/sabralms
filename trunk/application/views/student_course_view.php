<?php
	$student_info = $this->student_model->get_student_by_regitration_no($this->session->userdata('user_reg_no'));
	$degree_content = $this->degreecourse_model->get_degree_content_by_degree_code_by_course_code($student_info->degree_code, $course_code);
	$topics = $this->topic_model->get_all_topics_by_course_by_lecturer($course_code, $degree_content->lecturer_reg_no);
	$course = $this->course_model->get_course_by_code($course_code);
?>

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
	
	if ($course)
	{
		echo '<h6>'.$course->course_title.'</h6>';
	}
	if ($topics)
	{
		foreach ($topics as $topic)
		{
			echo '<p>';
			echo '<strong>'.$topic->topic_order.'. '.$topic->topic_title.'</strong>';
			echo '<br/>';
			echo $topic->topic_description;
			echo '<br/>';
			echo '<br/><strong>Attachements</strong><br/>';
			
			// Attachements
			$attachements = $this->topicattachement_model->get_topicattachements_by_topic_id($topic->topic_id);
			if ($attachements == NULL)
			{
				echo 'No Attachements';
				echo '<br/>';
			}
			else
			{
				foreach ($attachements as $attachement)
				{
					echo '<img src="'.base_url().'assets/images/assignment1.png"/> <i><a href="'.base_url().'student/download_attachement/'.$attachement->topic_attachement_id.'/'.urlencode(base64_encode($course->course_code)).'">'.$attachement->display_name.'</a></i>';
					echo '<br/>';
				}
			}
			
			// Assignments
			echo '<br/><strong>Assignments</strong><br/>';
			
			$assignments = $this->assignment_model->get_assignments_by_topic_id($topic->topic_id);
			if ($assignments == NULL)
			{
				echo 'No Attachements';
				echo '<br/>';
			}
			else
			{
				foreach ($assignments as $assignment)
				{
					echo '<img src="'.base_url().'assets/images/attachement5.png"/> <i><a href="'.base_url().'student/download_assignment/'.$assignment->assignment_id.'/'.urlencode(base64_encode($course->course_code)).'">'.$assignment->display_name.'</a></i>';
					echo '<br/>';
				}
			}
		}
		echo '<hr/>';
	}
	?>
</div>