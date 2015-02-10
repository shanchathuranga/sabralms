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
				<li><a href="<?php echo base_url(); ?>admin/degree_form">Add Assignment</a></li>
				<li><a href="<?php echo base_url(); ?>admin/course_form">Update Assignment</a></li>
                                <li><a href="<?php echo base_url(); ?>admin/degree_course_form">Delete Assignment</a></li>
			</ul>
                        <li onclick="toggleMenuItem('vert-submenu-3')"><span>Site News</span></li>
			<ul id="vert-submenu-3" class="vert-submenu">
				<li><a href="<?php echo base_url(); ?>admin/degree_form">Add News</a></li>
				<li><a href="<?php echo base_url(); ?>admin/course_form">Update News</a></li>
                                <li><a href="<?php echo base_url(); ?>admin/degree_course_form">Delete News</a></li>
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

