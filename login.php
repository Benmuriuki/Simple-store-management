<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Simple Store Management</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <style>
	 body {
      background-image: url('images/bg-logo.jpg'); 
      background-size: cover;
      background-position: center;
      font-family: 'Arial', sans-serif;
      margin: 0;
      padding: 0;
    }
	</style>
</head>
<body >
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
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
</body>
</html>