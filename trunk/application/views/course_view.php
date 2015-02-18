<?php
	//$course_code available
	$lecturer_reg_no = $this->session->userdata('user_reg_no');
	$topics = $this->topic_model->get_all_topics_by_course_by_lecturer($course_code, $lecturer_reg_no);
	$course = $this->course_model->get_course_by_code($course_code);
?>

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
	
	if ($course)
	{
		echo '<h6>'.$course->course_title.'</h6>';
	}
	if ($topics)
	{
		foreach ($topics as $topic)
		{
			echo '<p>';
			echo '<strong>'.$topic->order.'. '.$topic->topic_title.'</strong>';
			echo '<br/>';
			echo $topic->topic_description;
			echo '<br/>';
			echo '<a href="'.base_url().'lecturer/update_topic_view">Update topic</a>';
			echo '<br/><br/><strong>Attachements</strong><br/>';

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
					echo '<i><a href="'.base_url().'lecturer/download_attachement/'.$attachement->topic_attachement_id.'/'.urlencode(base64_encode($course->course_code)).'">'.$attachement->display_name.'</a></i>';
					echo '<br/>';
				}
			}
			
			echo '<form action="'.base_url().'lecturer/upload_topic_attachement" method="post" enctype="multipart/form-data">'.
				'<input type="hidden" value="'.$topic->topic_id.'" name="topic_id" />'.
				'<input type="hidden" value="'.$course_code.'" name="course" />'.
				'<input type="file" name="userfile" size="20" />'.
				'<input type="submit" value="Add Attachement" name="submit" />'.
				'</form>';
			echo '</p>';
		}
		echo '<hr/>';
	}
	?>
	
	<div>
		<strong>Add new topic to this Course</strong><br/><br/>
		<form action="<?php echo base_url().'lecturer/add_new_topic'; ?>" method="post">
			<label for="topic_title">Topic Title</label>
			<br/>
			<input type="text" name="topic_title" />
			<br/>
			<label for="topic_description">Description</label>
			<br/>
			<textarea name="topic_description" rows="4" cols="50"></textarea>
			<br/>
			<label for="order">Order</label>
			<br/>
			<input type="text" name="order"/>
			<br/>
			<input type="hidden" name="course_code" value="<?php echo $course_code; ?>" />
			<br/>
			<input type="submit" value="Add Topic"/>
		</form>
	</div>
</div>