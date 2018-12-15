<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
    <link href="https://fonts.googleapis.com/css?family=Jolly+Lodger" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id="hogwarts-background">
        <div id="form-wrapper2">
<div class="container">
<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>


	<h1 style="font-family: Jolly Lodger;" align="center" > <font color="White">Home Page </font></h1>

<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p style="font-size:30px; font-family: Jolly Lodger;" align="center"> <font color="White">
			Welcome <strong><?php echo $_SESSION['username']; ?></strong> </font></p>
    	<p style="font-size:30px; font-family: Jolly Lodger;" align="center"> <a href="login.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
	</div>
	</div>
	</div>
	</div>

		
</body>
</html>