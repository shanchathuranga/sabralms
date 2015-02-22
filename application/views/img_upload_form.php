<?php
	$admin_reg_no = $this->session->userdata('user_reg_no');
?>

<div class="grid_3">
	<div id="side-navigation">
		<ul class="vert-menu">
			<li class="vert-menu-header">Navigation</li>
			<ul id="vert-submenu-1" class="vert-submenu">
				<li><a href="<?php echo base_url(); ?>">Site Home</a></li>
				<li><a href="<?php echo base_url(); ?>admin">My Home</a></li>
			</ul>
			<li class="vert-menu-header">User Registration</li>
			<ul id="vert-submenu-2" class="vert-submenu">
				<li><a href="<?php echo base_url(); ?>admin/student_form">Student Registration</a></li>
				<li><a href="<?php echo base_url(); ?>admin/lecturer_form">Lecturer Registration</a></li>
				<li><a href="<?php echo base_url(); ?>admin/Site_news">Site News</a></li>
			</ul>
			<li class="vert-menu-header"><span>System Maintenence</span></li>
			<ul id="vert-submenu-3" class="vert-submenu">
				<li><a href="<?php echo base_url(); ?>admin/degree_form">Degree Program Registration</a></li>
				<li><a href="<?php echo base_url(); ?>admin/course_form">Course Registration</a></li>
                <li><a href="<?php echo base_url(); ?>admin/degreecourse_form">Degree-Course Registration</a></li>
				<li><a href="<?php echo base_url(); ?>admin/degree_selection_form">Update Degree</a></li>
				<li><a href="<?php echo base_url(); ?>admin/image_upload_form">Image upload</a></li>
				<li><a href="<?php echo base_url(); ?>admin/update_site_news">Update Site News</a></li>
			</ul>
		</ul>
	</div>
</div>
<div class="grid_9">
	<form action="<?php echo base_url().'admin/image_upload'; ?>" method="post" enctype="multipart/form-data">
		<input type="hidden" value="<?php echo $admin_reg_no; ?>" name="admin_reg_no" />
		<br/>
		<label for="display_name">Image Name</label>
		<br/>
		<input type="text" name="display_name" />
		<br/>
		<br/>
		<input type="file" name="userfile" size="20" />
		<br/>
		<br/>
		<input type="submit" value="Upload Image" name="submit" />
	</form>
	
	<br/>
	<hr/>
	<table>
		<tr>
			<th>Image Name</th>
			<th>Path</th>
			<th>Action</th>
		</tr>
		<?php
		
		$all_images = $this->imagestore_model->get_all_images_by_user($admin_reg_no);
		if ( $all_images )
		{
			foreach ($all_images as $image) 
			{
				echo '<tr>';
					echo '<td>'.$image->display_name.'</td>';
					$image_link = 'uploads/'.$image->unique_name;
					echo '<td><a href="'.site_url($image_link).'" target="_blank">Image URL</a></td>';
					echo '<td>';
					echo '<a href="'.base_url().'admin/delete_uploaded_image/'.$image->image_id.'">Delete</a>';
					echo '</td>';
				echo '</tr>';
			}
		}
		
		?>
	</table>
</div>