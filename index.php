<?php
  
  include "config.php";

  if(!$conn)
  {
      die("Connection failed: ".mysqli_connect_error());
  }
  
  ?>

  <!DOCTYPE html>
  <html lang="en">
      <head>
          <title>Signup Page</title>
          <meta charset = "utf-8">
          <meta name="viewport" content = "width=device-width,initial-scale=1.0">
          <meta name="keyword" content = "gct hostel,portal">
          <link rel="stylesheet" href="index.css">
          <link rel="preconnect" href="https://fonts.googleapis.com">
          <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
          <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@500&family=Hina+Mincho&display=swap" rel="stylesheet">
      </head>
      <body>
      <h1 style="text-align:center;margin-top:10px;"> Government College of Technology</h1>
          <div class="container">
          <img src="images/bg.jpg" alt="gct">
            <div class="wrapper">
          
          
          <form method="post">
              <div>
                <label for="username">Username</label>
                <input type="text" name="user" id="user" placeholder="Username">
              </div>
              <br>
              <div>
              <label for="username">Password</label>
                <input type="password" name="password" id="user" placeholder="password">
              </div>
              <br>
              <input type="submit" name="action" value="Admin">&nbsp;&nbsp;&nbsp;
              <br>
              <h2 style="color:white;">Student Login?</h2>
              <input type="submit" value="Student" formaction="login.php">
          </form>
</div>
          </div>
      </body>
  </html>

<?php

$user = isset($_POST['user']) ? $_POST['user'] : '';
$pwd = isset($_POST['password']) ? $_POST['password'] : '';
$action = isset($_POST['action']) ? $_POST['action'] : '';

if($action=="Admin")
{
if($user == "Hosteladmin")
{
    if($pwd == "gct_admin@21")
    {
         header("Location:details.php");
    }
    else{?>
        <h2 style="text-align:center;margin-top:10px;margin-bottom:10px;">Incorrect Password!!</h2>
  <?php  
        } 
}
else { ?>
    <h2 style="color:white;text-align:center;">Please enter the correct username!!</h2>
<?php  }
}?>