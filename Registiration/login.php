<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<link href="https://fonts.googleapis.com/css?family=Jolly+Lodger" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
<body>
    <div id="hogwarts-background">
        <div id="form-wrapper">
       
				
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class=class="container">
			<p style="font-size:20px;"><font color="Red"> Please Insert Username & Password </font></p>
  		<label>Username</label>
			<input type="text" name="username" >
</br>
</br>

  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
		</div>
		</br>
</br>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
	</form>
</div>
</div>

</body>
</html>