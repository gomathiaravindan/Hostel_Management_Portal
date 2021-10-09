<!DOCTYPE html>
<html>
<head>
	<title>Rules page</title>
	<meta name = "viewport" content = "width=device-width,initial-scale=1.0">
	<link rel="stylesheet" href="complaint.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
	<link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Righteous&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Cookie&family=Dancing+Script:wght@700&family=Pacifico&family=Righteous&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@500&family=Hina+Mincho&display=swap" rel="stylesheet">
      
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-danger">
        <div class="container-fluid">
            <img src="images/logo.jpg" alt="..." style="width:50px;height:50px;position:relative;">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link active text-white" aria-current="page" href="index.php" style="font-weight:500;font-size:20px;">Admin</a>
                </li>
                <li class="nav-item">
                <a class="nav-link text-white" href="details.php" style="font-weight:500;font-size:20px;">Hostel Details</a>
                </li>
                <li class="nav-item">
                <a class="nav-link text-white" href="#" style="font-weight:500;font-size:20px;">Profile</a>
                </li>
                
            </ul>
            </div>
        </div>
        </nav>
        <div class="container-fluid bg-light" style="background-color:antiquewhite;">
            <div class="container">
                <form class="row g-3 complaint_form" method="post">
                    <div class="col-md-4">
                      <label for="inputEmail4" class="form-label">Name</label>
                      <input type="text" class="form-control" id="inputEmail4" name="name">
                    </div>
                    <div class="col-md-4">
                      <label for="inputPassword4" class="form-label">Roll Number</label>
                      <input type="text" class="form-control" id="inputPassword4" name="roll_no">
                    </div>
                    <div class="col-md-4">
                        <label for="inputPassword4" class="form-label">Room No</label>
                        <input type="text" class="form-control" id="inputPassword4" name="room_no">
                      </div>
                      <div class="col-md-4">
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
                    <div class="col-md-4">
                      <label for="year" class="form-label">Year of Study</label>
                      <input type="text" class="form-control" id="inputAddress2" name="year">
                    </div>
                    
                    <div class="col-md-4">
                      <label for="hos_name" class="form-label">Hostel Name</label>
                      <select id="hos_name" class="form-select" name="hos_name">
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
                    <div class="col-md-4">
                      <label for="phone" class="form-label">Phone number</label>
                      <input type="text" class="form-control" id="inputZip" name="phone">
                    </div>
                    <div class="col-md-12">
                        <div class="input-group">
                            <span class="input-group-text">Complaint Box</span>
                            <textarea class="form-control" aria-label="With textarea" name="complaint"></textarea>
                          </div>
                    </div>
                    <div class="col-12">
                      <input type="submit" class="btn btn-primary" name="action" value="Submit">
                    </div>
                  </form>
                  <h5>These complaints will be sort out within 2 weeks of duration.</h5>
                  <br>
                  </div>
                  </div>
</body>
</html>

<?php

include "config.php";

$username =  isset($_POST['name']) ? $_POST['name'] : '';
$roll_no= isset($_POST['roll_no']) ? $_POST['roll_no'] : '';
$room = isset($_POST['room_no']) ? $_POST['room_no'] : '';
$dept= isset($_POST['dept']) ? $_POST['dept'] : '';
$year = isset($_POST['year']) ? $_POST['year'] : '';
$hostel = isset($_POST['hos_name']) ? $_POST['hos_name'] : '';
$phone = isset($_POST['phone']) ? $_POST['phone'] : '';
$complaint = isset($_POST['complaint']) ? $_POST['complaint'] : '';
$action = isset($_POST['action']) ? $_POST['action'] : '';

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

if($action=="Submit")
{
  $query = "INSERT INTO complaint_table(Name,Roll_no,Room_no,Department,Year,Hostel_name,Phone_no,Complaint) VALUES('$username','$roll_no','$room','$dept','$year','$hostel','$phone','$complaint')";
  if (mysqli_query($conn, $query)) {?>
    <script>alert("Complaint submitted successfully");</script>
          <?php } else {
            echo "Error: " . $query . "<br>" . mysqli_error($conn);
          }
  }
  mysqli_close($conn);
?>