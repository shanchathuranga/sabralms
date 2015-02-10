<div class="grid_3">
	&nbsp;
</div>
<div class="grid_9">
	<form action="<?php echo base_url(); ?>admin/add_attachment" method="post">
                <label for="">Title:</label>
		<br/>
		<input type="text" name="title">
                <br/>
                <label for="">Path:</label>
		<br/>
		<input type="text" name="path">
                <br/>
		<label for="">Add:</label>
		<br/>
		<input type="text" name="add">
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
