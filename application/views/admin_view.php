<div class="grid_3">
	<div id="side-navigation">
		<ul class="vert-menu">
			<li class="vert-menu-header">Navigation</li>
			<li onclick="toggleMenuItem('vert-submenu-1')"><span>User Registration</span></li>
			<ul id="vert-submenu-1" class="vert-submenu">
				<li><a href="<?php echo base_url(); ?>admin/student_form">Student Registration</a></li>
				<li><a href="<?php echo base_url(); ?>admin/lecturer_form">Lecturer Registration</a></li>
				<li><a href="<?php echo base_url(); ?>admin/Site_news">Site News</a></li>
			</ul>
			<li onclick="toggleMenuItem('vert-submenu-2')"><span>System Maintenence</span></li>
			<ul id="vert-submenu-2" class="vert-submenu">
				<li><a href="<?php echo base_url(); ?>admin/degree_form">Degree Program Registration</a></li>
				<li><a href="<?php echo base_url(); ?>admin/course_form">Course Registration</a></li>
			</ul>
		</ul>
	</div>
</div>
<div class="grid_9">
	<h3>Latest Activites</h3>
	<ul>
		<li>21 New users registered in last week</li>
		<li>2 New Courses added</li>
	</ul>
</div>