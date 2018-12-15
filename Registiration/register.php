<?php include('server.php') ?>
<!DOCTYPE html>
<html>
  <head>
    <link href="https://fonts.googleapis.com/css?family=Jolly+Lodger" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <div id="hogwarts-background">
        <div id="form-wrapper">
       
    

        <form action="register.php" method ="post">
          <div class="container">
            <h2>Welcome to the school of Hogwarts</h2>
            <p style="font-size:20px;"><font color="Red">Please fill in this form to create an account. </font></p>
            <hr>
        
            <label for="name"><b>Name</b></label>
            <input type="text" placeholder="Enter Name" name="name" required style="width:20%" required>
          </br>
          </br>
        
            <label for="Email"><b>Email</b></label>
            <input type="text" placeholder="Enter email" name="email" required style="width:20%" required>
            </br>
    </br>
            <label for="name"><b>Username</b></label>
            <input type="text" placeholder="Enter username" name="username" required style="width:17.5%" required>
            </br>
    </br>
            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password_1"  required style="width:17.5%"required>
        </br>
        </br>
				
				<label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password_2" required style="width:17.5%"   required>
            </br>
    </br>
						<label for="type"><b>Type</b></label>
						<input list=type placeholder="Enter Type" name="type" required style="width:20%">
            <datalist id="type">
							<option value="Student">
							<option value="TA">
							<option value="Lecturer">
							
						</datalist>
        </br>
    </br>
            <hr>
        
            <button type="submit" name= "reg_user" class="registerbtn">Register</button>
            
          </div>
          
          <div class="container signin">
            <p>Already have an account? <a href="login.php">Sign in</a>.</p>
          </div>
        </form>
    </div>
 </div>
  </body>
</html>