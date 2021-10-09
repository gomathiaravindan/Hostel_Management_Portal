<!DOCTYPE html>
<html>
<head>
	<title>Account page</title>
	<meta name = "viewport" content = "width=device-width,initial-scale=1.0">
	<link rel="stylesheet" href="login.css">
	<link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Righteous&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Cookie&family=Dancing+Script:wght@700&family=Pacifico&family=Righteous&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@500&family=Hina+Mincho&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
	<!--Form section-->
    <h1 style="text-align:center;margin-top:10px;">Warm Greetings to dear students!!</h1>
	<div class ="container">
		<div class="login_box">
			<div class="form_cont">
				<form method = "post" autocomplete="off" action="action_login.php">
					<p>
						Username :&nbsp;&nbsp;&nbsp;<input type ="text" name ="user" required>
					</p>
					<br><br>
					<p>
						Email :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type ="email" p pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" name="email" required >
				    </p>
				    <br><br>
				    <p>
						Password :&nbsp;&nbsp;&nbsp;<input type ="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters" name="pwd"  required>
					</p>
					
				<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Fill Form</button><i style="color:red;">Required*</i>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Personal Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
        <div class="col-md-12">
                      <label for="inputEmail4" class="form-label">Name</label>
                      <input type="email" class="form-control" id="inputEmail4">
                    </div>
                    <div class="col-md-12">
                      <label for="inputPassword4" class="form-label">Roll Number</label>
                      <input type="password" class="form-control" id="inputPassword4">
                    </div>
                    <div class="col-md-12">
                        <label for="inputPassword4" class="form-label">Room No</label>
                        <input type="password" class="form-control" id="inputPassword4">
                      </div>
                      <div class="col-md-12">
                        <label for="inputState" class="form-label">Department</label>
                        <select id="inputState" class="form-select">
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
                      <label for="inputAddress2" class="form-label">Year of Study</label>
                      <input type="number" class="form-control" id="inputAddress2">
                    </div>
                    
                    <div class="col-md-12">
                      <label for="inputState" class="form-label">Hostel Name</label>
                      <select id="inputState" class="form-select">
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
                      <label for="inputZip" class="form-label">Parent/Gaurdian</label>
                      <input type="text" class="form-control" id="inputZip">
                    </div>
                    <div class="col-md-12">
                      <label for="inputZip" class="form-label">Parent/Gaurdian phone number</label>
                      <input type="text" class="form-control" id="inputZip">
                    </div>
                    <div class="col-md-12">
                      <label for="inputZip" class="form-label">Phone number</label>
                      <input type="text" class="form-control" id="inputZip">
                    </div>
                   
                    
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
</div>
<p>
					<input type = "submit" value = "Signup" name="action">&nbsp;&nbsp;&nbsp;<input type ="submit" name ="action"value= "Login">
				</p>
</form>
	</div>
  </div>
  
</div>
</body>
</html>

