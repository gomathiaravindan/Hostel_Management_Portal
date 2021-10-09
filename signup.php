<?php

ob_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Signup/Login</title>
    <meta name="viewport" content="width=device-width,inital-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    
</head>
<body>
    <div class="container-fluid">
        
        <div class="container">
                <form class="row g-3 complaint_form" method="post">
                    <div class="col-md-12">
                      <label for="name" class="form-label">Name</label>
                      <input type="text" class="form-control" id="inputEmail4" name="name">
                    </div>
                    <div class="col-md-12">
                      <label for="roll_no" class="form-label">Roll Number</label>
                      <input type="number" name="roll_no" class="form-control" id="roll_no">
                    </div>
                    <div class="col-md-12">
                      <label for="roll_no" class="form-label">Email</label>
                      <input type="email" name="email" class="form-control" id="email">
                    </div>
                      <div class="col-md-12">
                        <label for="dept" class="form-label">Department</label>
                        <select id="dept" class="form-select" name="dept">
                          <option selected>Choose...</option>
                          <option>Mech</option>
                          <option>Civil</option>
                          <option>ECE</option>
                          <option>EEE</option>
                          <option>EIE</option>
                          <option>CSE</option>
                          <option>Production</option>
                          <option>IT</option>
                          <option>IBT</option>
                        </select>
                      </div>
                    <div class="col-md-12">
                      <label for="year" class="form-label">Year of Study</label>
                      <input type="number" class="form-control" id="year" name="year">
                    </div>
                    
                    <div class="col-md-12">
                      <label for="hostel_name" class="form-label">Hostel Name</label>
                      <select id="hostel_name" class="form-select" name="hos_name">
                        <option selected>Choose...</option>
                        <option>Amaravathi</option>
                        <option>Kothaiyar</option>
                        <option>Manimuthar</option>
                        <option>Noyyal</option>
                        <option>Palaru</option>
                        <option>Vaigai</option>
                        <option>Bhavani</option>
                        <option>Thamirabarani</option>
                        <option>Vellaru</option>
                        <option>Kaveri</option>
                        <option>Ponnaiyaru</option>
                      </select>
                    </div>
                    <div class="col-md-12">
                        <label for="room_no" class="form-label">Room No</label>
                        <input type="numer" class="form-control" id="room_no" name="room_no">
                      </div>
                      <div class="col-md-12">
                      <label for="parent" class="form-label">Parent/Gaurdian</label>
                      <input type="text" class="form-control" id="parent" name="parent">
                    </div>
                    <div class="col-md-12">
                      <label for="phone" class="form-label">Parent/Gaurdian Phone number</label>
                      <input type="number" class="form-control" id="p_phone" name="p_phone">
                    </div>
                    
                    <div class="col-md-12">
                      <label for="per_phone" class="form-label">Phone number</label>
                      <input type="number" class="form-control" id="per_phone" name="per_phone">
                    </div>
                    <div class="col-md-12">
                      <label for="pwd" class="form-label">Password</label>
                      <input type="password" class="form-control" id="pwd" name="pwd">
                    </div>
                    <br><br>
                    <div class="col-md-4">
                      <input type="submit" class="form-control btn btn-primary" name="action" value="Create account">
                    </div>
                    <br>

</form>
</div>
</div>
</body>
</html>

<?php
session_start();
 include "config.php";
 $username =  isset($_POST['name']) ? $_POST['name'] : '';
 $roll_no= isset($_POST['roll_no']) ? $_POST['roll_no'] : '';
 $mail = isset($_POST['email']) ? $_POST['email'] : '';
 $dept= isset($_POST['dept']) ? $_POST['dept'] : '';
 $year = isset($_POST['year']) ? $_POST['year'] : '';
 $hostel = isset($_POST['hos_name']) ? $_POST['hos_name'] : '';
 $room = isset($_POST['room_no']) ? $_POST['room_no'] : '';
 $parent = isset($_POST['parent']) ? $_POST['parent'] : '';
 $par_phone = isset($_POST['p_phone']) ? $_POST['p_phone'] : '';
 $phone = isset($_POST['per_phone']) ? $_POST['per_phone'] : '';
 $pwd = isset($_POST['pwd']) ? $_POST['pwd'] : '';
 $action = isset($_POST['action']) ? $_POST['action'] : '';
 /*$sql_e = "SELECT *FROM acc_tble WHERE Email = '$email'";
 $sql_p = "SELECT *FROM acc_tble WHERE Password = '$passwrd'";
 $res_e = mysqli_query($conn, $sql_e) or die(mysqli_connect_error());
 $res_p = mysqli_query($conn, $sql_p) or die(mysqli_connect_error());*/
 if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
 
 if($action=="Create account")
{
	/*if(mysqli_num_rows($res_e)==0)
	{*/
		$query = "INSERT INTO personal_details(Name,Roll_no,Email,Department,Year,Hostel_name,Room_no,Parent_Gaurdian,Parent_Gaurdian_Phone_no,Phone_number,Password) VALUES('$username','$roll_no','$mail','$dept','$year','$hostel','$room','$parent','$par_phone','$phone','$pwd')";
		
        if (mysqli_query($conn, $query)) {
          header("Location:details.php"); 
          $_SESSION['login_user']= $roll_no;
          ob_end_flush();?>
            <script>alert("Account created successfully");</script>
          <?php } else {
            echo "Error: " . $query . "<br>" . mysqli_error($conn);
          }
        }
        
          mysqli_close($conn);
?>