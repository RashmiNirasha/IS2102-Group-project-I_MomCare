<?php 
include "../Config/dbConnection.php";
if (isset($_POST['submit'])){
	$new_pass =  $_POST['new_pass'];
	$new_pass_c =  $_POST['new_pass_c'];
	$email =  $_POST['email'];

	$sql = "SELECT * FROM password_reset";
	$results = mysqli_query($con, $sql);
	$num = mysqli_fetch_assoc($results);
	if ($num == 1) {
		if(strlen($new_pass) < 7){
			array_push($errors, "Password must be at least 8 characters");
		}elseif(!preg_match("#[0-9]+#", $new_pass)){
			array_push($errors, "Password must include at least one number!");
		}elseif(!preg_match("#[a-zA-Z]+#", $new_pass)){
			array_push($errors, "Password must include at least one letter!");
		} else {
			if ($new_pass == $new_pass_c) {
				$new_pass = md5($new_pass);
				$sql = "UPDATE user_tbl SET password='$new_pass' WHERE email='$email'";
				$results = mysqli_query($con, $sql);
				if ($result) {
					header("location: ../../index.php");

				}
			} else {
				echo "Email not found";
			}
		}
	}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Password Reset PHP</title>
	<link rel="stylesheet" href="main.css">
</head>
<body>
	<form class="login-form" action=" " method="post">

		<h2 class="form-title">Set password</h2>
		<!-- form validation messages -->
		<div class="form-group">
			<label>Email</label>
			<input type="email" name="email" >
		</div>
		<div class="form-group">
			<label>Token</label>
			<input type="text" name="token" >
		</div>
		<?php 
//token verification 

		?>
		<div class="form-group">
			<label>New password</label>
			<input type="password" name="new_pass">
		</div>
		<div class="form-group">
			<label>Confirm new password</label>
			<input type="password" name="new_pass_c">
		</div>
		<div class="form-group">
			<button type="submit" name="new_password" class="login-btn">Submit</button>
		</div>
	</form>
</body>
</html>