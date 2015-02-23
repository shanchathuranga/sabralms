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
	<?php if ($usertype == 'LECTURER') { ?>
	<form action="<?php echo base_url().'lecturer/upload_assignment'; ?>" method="post">
		<label>Assignment Title</label>
		<br/>
		<input type="text" name="assignment_title" />
		<br/>
		<label>Topic</label>
		<br/>
		<select>
			
		</select>
		<br/>
		<label>Due Date</label>
		<br/>
		<input type="text" name="due_date" />
		<br/>
		<label>Assignment Description</label>
		<br/>
		<input type="file" name="userfile" size="20" />
		<br/>
		<br/>
		<input type="submit" value="Add Assignment" />
	</form>
	<?php } else if ($usertype == 'STUDENT') { ?>
	
	<?php } ?>
</div>