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
