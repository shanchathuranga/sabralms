<div class="grid_12">
	<?php
		if (isset($login_errors))
		{
			echo '<p class="error">';
			echo $login_errors;
			echo '</p>';
		}
	?>
</div>

<div class="grid_4">
	<form id="login-form" method="post" action="<?php echo base_url(); ?>user/authenticate">
		<label for="username">Username</label><br/>
		<input type="text" name="username" placeholder="Enter Username"/>
		<br/>
		<label for="password">Password</label><br/>
		<input type="password" name="password" placeholder="Enter Password"/>
		<br/>
		<input type="submit" value="Login"/>
	</form>
</div>
<div class="grid_8">
	&nbsp;
</div>
<div class="grid_12">
	<a href="<?php echo base_url(); ?>">Back to Home</a>
</div>