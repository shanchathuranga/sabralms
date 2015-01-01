<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	
	<style>
	#login {
		margin: 20px;
	}
	</style>
	
</head>
<body>

</body>
	
	<div id="login">
	<form action="login/authenticate" method="post">
		Username<br/>
		<input type="text" name="username" /><br/>
		Password<br/>
		<input type="password" name="password" /><br/>
		<input type="submit" value="Login" />
	</form>
	</div>
	
</html>