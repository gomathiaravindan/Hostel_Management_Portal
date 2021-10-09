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
    <title>Signup/Login</title>
    <meta name="viewport" content="width=device-width,inital-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
      function display()
      {
        document.getElementById("map").style.display = "block";
      }
      </script>
</head>
<style>
  .container-fluid .btn
  {
    margin-left:43%;
    display:block;
    margin-top:50px;
    width:200px;
    padding:10px 12px;
  }
  .container-fluid iframe
  {
    margin-left:10%;
    margin-top:50px;
    display:none;
  }

  </style>
<body>
  <div class="container-fluid">
  <a onclick="display()" href="#"><i class="fas fa-map-marked-alt" style="margin-left:47%;margin-top:20px;font-size:40px;"></i></a>
  <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3916.2710479817156!2d76.93381991475114!3d11.018278892157737!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba858dc68b80bbf%3A0x24bab8d60d2bc693!2sGovernment%20College%20of%20Technology%2C%20Coimbatore!5e0!3m2!1sen!2sin!4v1633675534499!5m2!1sen!2sin" width="1150" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
  <button class="admin btn btn-primary" data-bs-toggle="modal" data-bs-target="#admin">Admin</button>
  <button class="login btn btn-primary" data-bs-toggle="modal" data-bs-target="#login">Login</button>
  <button class="signup btn btn-primary"><a href="signup.php" style="text-decoration:none;color:white;">Signup</a></button>
  <div class="modal fade" id="admin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="admin">Admin</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Username</label>
            <input type="text" class="form-control" id="username" name="user">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Password</label>
            <input type="password" class="form-control" id="pwd" name="password">
          </div>
          <div class="mb-3">
            <input type="submit" name="action" value="Submit">
           </div>
        </form>
      </div>
</div>
</div>
</div>
<div class="modal fade" id="login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="login">Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post">
          <div class="mb-3">
            <label for="user" class="col-form-label">Username</label>
            <input type="text" class="form-control" id="username" name="log_user">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Password</label>
            <input type="password" class="form-control" id="pwd" name="log_password">
          </div>
          <div class="mb-3">
            <input type="submit" name="action" value="Login">
           </div>
        </form>
      </div>
</div>
</div>
</div>
</body>
</html>
<?php

session_start();
$user = isset($_POST['user']) ? $_POST['user'] : '';
$pwd = isset($_POST['password']) ? $_POST['password'] : '';
$action = isset($_POST['action']) ? $_POST['action'] : '';

$log_user = isset($_POST['log_user']) ? $_POST['log_user'] : '';
$log_pwd = isset($_POST['log_password']) ? $_POST['log_password'] : '';

$_SESSION['login_user']= $log_user;
echo $_SESSION['login_user'];
$q2="select Password from personal_details where Roll_no=$log_user";
$result = mysqli_query($conn, $q2);

  


if($action=="Submit")
{
if($user == "Hosteladmin")
{
    if($pwd == "gct_admin@21")
    {
         header("Location:admin_index.php");
    }
    else{?>
        <h2 style="text-align:center;margin-top:10px;margin-bottom:10px;">Incorrect Password!!</h2>
  <?php  
        } 
}
else { ?>
    <h2 style="color:white;text-align:center;">Please enter the correct username!!</h2>
<?php  }
}
else if($action == "Login")
{
  
  if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      $password =  $row["Password"];
      
    }
    
    if($log_pwd == $password)
    {
      
      header("Location:details.php");
    }
    else
      {?>
      <script>alert("Incorrect Password");</script>
 <?php } 
      }
    }
      ?>