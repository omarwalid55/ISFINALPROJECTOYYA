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
        <form action="editgrade.php" method ="post">
          <div class="container">
            <h2>Update Grade </h2>
           
            <hr>
        
            <label for="username" text-align: left><b>username</b></label>
            </br>
        
            <input type="text" placeholder="Enter username" name="username" required>
        </br>
        </br>
        
            <label for="grades"><b>Grade</b></label>
            </br>
        
            <input type="text" placeholder="Enter grade" name="grades" required>
        </br>
        </br>
            <hr>
            <div class="input-group">
</br>
  		<button type="submit" class="btn" name="Update_grade" > Update</button>
          <button type="subackbmit" class="btn" name="back" > <a href= "lecturer.php">Get Back </a></button>
  	</div>

            
          </div>
          
          
        </form>
    </div>
 </div>
  </body>
</html>