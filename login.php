<?php include('server.php') ?>

<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<link href="loginepagestyle.css" rel="stylesheet" type="text/css" >
</head>
<body>


	
	
	<div id="signinbox">
	<p id="theword" >Login </p>
	<form method="post" action="login.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_user">Login</button>
		</div>
		<p>
			Not yet a member? <a href="register.php">Sign up</a>
		</p>
	</form>
	</div>


</body>
</html>