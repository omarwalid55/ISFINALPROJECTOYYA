<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<link href="https://fonts.googleapis.com/css?family=Jolly+Lodger" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<body>
    <div id="hogwarts-background">
        <div id="form-wrapper">
       
				
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class=class="container">
	  <h2>Welcome to Hogwarts </h2>
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

<label for="type"><b>Type</b></label>

						<input list=type placeholder="Enter Type" name="type" required style="width:12.5%">
            <datalist id="type">
							<option value="Student">
							<option value="TA">
							<option value="Lecturer">
							
						</datalist>
  	<div class="input-group">
</br>
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