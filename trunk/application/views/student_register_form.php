<div class="grid_3">
	&nbsp;
</div>
<div class="grid_9">
	<form action="<?php echo base_url(); ?>admin/student_regrister" method="post">
		<label for="">Reg No:</label>
		<br/>
		<input type="text" name="reg_no">
		<br/>
		<label for="">First Name:</label>
		<br/>
		<input type="text" name="first_name">
		<br/>
		<label for="">Last Name:</label>
		<br/>
		<input type="text" name="last_name">
		<br/>
		<label for="">EP No:</label>
		<br/>
		<input type="text" name="ep_no">
		<br/>
		<label for="">Contact No:</label>
		<br/>
		<input type="text" name="contact_no">
		<br/>
                <label for="">Degree Program:</label>
                <br/>
                <select name="degree_code">
                <?php
                $result = $this->degree_model->get_all_degrees();
                foreach ($result as $deg)
                {
                    echo '<option value="'.$deg->degree_code.'">'.$deg->degree_title.'</option>';
                }
                ?>
                </select>
                <br/>
                <label for="">Year:</label>
                <br/>
                <select name="year">
                    <option value="1">Year 1</option>
                    <option value="2">Year 2</option>
                    <option value="3">Year 3</option>
                    <option value="4">Year 4</option>
                </select>
                <br/>
                <br/>
		<input type="submit" value="Register">
		<br/>
	</form>
</div>
