<div class="grid_3">
	&nbsp;
</div>
<div class="grid_9">
	<h2>Lecturer Registration Form</h2>
	<form action="<?php echo base_url(); ?>admin/lecturer_register" method="post">
		<label for="first_name">First Name:</label>
		<br/>
		<input type="text" name="first_name" id="FName" />
		<br/>
		<label for="last_name">Last Name:</label>
		<br/>
		<input type="text" name="last_name" id="LName" />
		<br/>
		<label for="reg_no">Reg No:</label>
		<br/>
		<input type="text" name="reg_no" id="RegNo" />
		<br/>
		<label for="reg_no">Subject:</label>
		<br/>
		<input type="text" name="subject" id="subject" />
		<br/>
		<input type="submit" value="Register" />
	</form>
</div>


