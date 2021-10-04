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
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@500&family=Hina+Mincho&display=swap" rel="stylesheet">
      
</head>
<body>
	<!--Form section-->
    <h1 style="text-align:center;margin-top:10px;">Warm Greetings to dear students!!</h1>
	<div class ="container">
		<div class="login_box">
			<div class="form_cont">
				<form method = "post" autocomplete="off">
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
					<br><br>
					<p>
					<input type = "submit" value = "Signup" name="action">&nbsp;&nbsp;&nbsp;<input type ="submit" name ="action"value= "Login">
				</p>
				
				</form>
	</div>
  </div>
</div>
</body>
</html>

<?php 

 session_start();

 include "config.php";

 $username =  isset($_POST['user']) ? $_POST['user'] : '';
 $email= isset($_POST['email']) ? $_POST['email'] : '';
 $passwrd= isset($_POST['pwd']) ? $_POST['pwd'] : '';
 $action = isset($_POST['action']) ? $_POST['action'] : '';

 
 $sql_e = "SELECT *FROM acc_tble WHERE Email = '$email'";
 $sql_p = "SELECT *FROM acc_tble WHERE Password = '$passwrd'";
 $res_e = mysqli_query($conn, $sql_e) or die(mysqli_connect_error());
 $res_p = mysqli_query($conn, $sql_p) or die(mysqli_connect_error());
 
 if($action=="Signup")
{
	if(mysqli_num_rows($res_e)==0)
	{
		$query = "INSERT INTO acc_tble(User,Email,Password) VALUES('$username','$email','$passwrd')";
		$result = mysqli_query($conn, $query) or die(mysqli_connect_error());
		 $_SESSION['login_user']= $username;
		 header("Location:details.php");
		 
	}
	else{?>
		<h2 id="echo1"><?php echo "You have already had an account,please login!!";?></h2>
		<?php die();
	}
}
else if($action=="Login")
		{
			if(mysqli_num_rows($res_e)>0 )
			{
				if(mysqli_num_rows($res_p)>0)
				{?>
					<h2 id="echo2"><?php echo "Welcome ". $username;?>
					<?php $_SESSION['login_user']= $username;
					 
					header("Location:details.php");
			}
				else 
				{?>
					<h2 id="echo4" style="text-align:center;"><?php echo "Incorrect Password!!";?></h2>
				<?php }
			}
			else if(mysqli_num_rows($res_e)==0)
			{?>
				<h2 id="echo3"><?php echo "To create acconut please signup!!";?></h2>
			<?php }
		
		}
		
	

 mysqli_close($conn);
 ?>
