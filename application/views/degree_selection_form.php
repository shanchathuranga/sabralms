<div class="grid_3">
	&nbsp;
</div>
<div class="grid_9">
	<p><strong>Degree Selection Form</strong></p>
	<form action="<?php echo base_url(); ?>admin/degree_update_form" method="post">
		<label for="degree">Degree:</label>
		<br/>
		<select name="degree">
		<?php
			// Degree combo box
			$degrees = $this->degree_model->get_all_degrees();
			foreach ($degrees as $deg) {
				echo '<option value="'.$deg->degree_code.'">'.$deg->degree_title.'</option>';
			}
		?>
		</select>
		<br/>
		<input type="submit" value="Update">
		<br/>
	</form>
</div>
