<?php
	$lecturer_reg_no = $this->session->userdata('user_reg_no');
	$course = $this->course_model->get_course_by_code($course_code);
	
	echo $course->course_title;
?>