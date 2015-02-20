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
			<li><a href="<?php echo base_url(); ?>student">My Home</a></li>
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
					echo '<i><a href="'.base_url().'student/download_attachement/'.$attachement->topic_attachement_id.'/'.urlencode(base64_encode($course->course_code)).'">'.$attachement->display_name.'</a></i>';
					echo '<br/>';
				}
			}
		}
		echo '<hr/>';
	}
	?>
</div>