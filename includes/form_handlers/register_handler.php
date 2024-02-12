<?php
//Declarig variables to prevent errors
$first_name = ""; //first name
$last_name = ""; //last name
$username = ""; //username
$email = ""; //email
$pass = ""; //pass
$profile_pic = "";
$error_array = "";

if(isset($_POST['sign_btn'])) {

	//Registration form values

	//Username
	$username = $_POST['sign_username'];

	//First name
	$first_name = $_POST['sign_firstname'];
  	$first_name = ucfirst(strtolower($first_name)); //Uppercase first letter

	//Last name
	$last_name = $_POST['sign_lastname'];
	$last_name = ucfirst(strtolower($last_name)); //Uppercase first letter


	//Email
	$email = $_POST['sign_email'];
	$email = strtolower($email); //uppercase first letter

	//Password
	$pass = $_POST['sign_password']; 	

	//Profile Pic
	$profile_pic = "/you.social/assets/images/svg/default_profile_pic_0.svg";


	
	if(empty($error_array)){
		$pass = password_hash($pass, PASSWORD_DEFAULT);  //Encrypt password before sending to database
	
		$query = mysqli_query($con, "INSERT INTO users VALUES ('', '$username', '$first_name', '$last_name', '$email', '$pass', '$profile_pic', '0', '0', '0', 'no', ',$username,')");
		

	}
	
}

if(isset($_POST['log_btn'])) {
 
  	$email = $_POST['log_email']; //Get email
	$pass = $_POST['log_password']; //Get password

	$check_database_query = mysqli_query($con, "SELECT * FROM users WHERE email='$email'");
	$check_login_query = mysqli_num_rows($check_database_query);
 
	if($check_login_query == 1) {
		while($row = mysqli_fetch_array($check_database_query)){
			if(password_verify($pass, $row['pass'])){
				$username = $row['username'];
				setcookie('emailbun', $email, time()+31536000);
				setcookie('passbun', $pass, time()+31536000);
		
				$_SESSION['username'] = $username;
				echo "Username: " .$username;
				header("Location: index.php");
				exit();
			}
		}
		
	}
	else {
		echo "Email or password was incorrect<br>";
	}
 
}
 
?>