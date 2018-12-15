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



	<h1 style="font-family: Jolly Lodger;" align="center" > <font color="White"> List of All Students </font></h1>


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

	<?php
include('server.php');

$_SESSION ['username']= $username;
if ($result = $db->query("SELECT * FROM students"))
{
if ($result->num_rows > 0)
{
	
echo "<table align= 'center' border='1' cellpadding='10'>";
echo "<tr style='color:#ffffff' ><th>Usernames</th><th>Grades</th><th>Edit</th></tr>";
while ($row = $result->fetch_object())
{
echo "<tr>";
echo '<td style="color:#ffffff">' . $row->username . "</td>";
echo '<td style="color:#ffffff">' . $row->grades . "</td>";
echo "<td><a href=' editgrade.php'>Edit</a></td>";
echo "</tr>";
}

echo "</table>";
}
else
{
echo "No results to display!";
}
}
else
{
echo "Error: " . $db->error;
}

$db->close();
?> 
<p style="font-size:30px; font-family: Jolly Lodger;" align="center"> <a href="login.php?logout='1'" style="color: red;">logout</a> </p>

	</div>
	</div>
	</div>
	</div>

</body>
</html>