<?php  

require 'includes/form_handlers/register_handler.php';

 
if(isset($_POST['log_btn'])) {
 
	$email = $_POST['log_email']; //Get Email
 
	$pass = $_POST['log_password']; //Get password

	$check_database_query = mysqli_query($con, "SELECT * FROM users WHERE email='$email'");
	$check_login_query = mysqli_num_rows($check_database_query);
 
	if($check_login_query == 1) {
		while($row = mysqli_fetch_array($check_database_query)){
			if(password_verify($pass, $row['pass'])){
				$name = $row['username'];
		
				$_SESSION['username'] = $name;
				echo "Name: " .$name;
				header("Location: profile/profiledetails1.php");
				exit();
			}
		}
		
	}
	else {
		echo "Email or password was incorrect<br>";
	}
 
}
 
?>