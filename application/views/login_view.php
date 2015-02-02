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
	
<?php
$attributes = array('id' => 'login-form');
echo form_open(base_url().'user/authenticate', $attributes);
?>

<p>
	<?php echo form_label('Username:');?>
	<?php
	$data = array(
		'name' => 'username',
		'placeholder' => 'Enter Username',
		'value' => set_value('username')
	);
	?>
	<?php echo form_input($data); ?>
</p>
<p>
	<?php echo form_label('Password:');?>
	<?php
	$data = array(
		'name' => 'password',
		'placeholder' => 'Enter Password',
		'value' => set_value('password')
	);
	?>
	<?php echo form_password($data); ?>
</p>
<p>
	<?php
	$data = array(
		'name' => 'submit',
		'value' => 'Login'
	);
	?>
	<?php echo form_submit($data); ?>
</p>

<?php
echo form_close();
?>
</div>
<div class="grid_8">&nbsp;</div>
<div class="grid_12">
	<a href="<?php echo base_url(); ?>">Back to Home</a>
</div>