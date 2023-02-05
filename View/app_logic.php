<?php 

session_start();
$errors = [];
$user_id = "";
// connect to database
include "../Config/dbConnection.php";
include "../Assets/Includes/email.php";

//LOG USER IN
if (isset($_POST['login_user'])) {
  // Get username and password from login form
  $user_id = mysqli_real_escape_string($con, $_POST['user_id']);
  $password = mysqli_real_escape_string($con, $_POST['password']);
  // validate form
  if (empty($user_id)) array_push($errors, "Username or Email is required");
  if (empty($password)) array_push($errors, "Password is required");

  // if no error in form, log user in
  if (count($errors) == 0) {
    $password = md5($password);
    $sql = "SELECT * FROM users WHERE username='$user_id' OR email='$user_id' AND password='$password'";
    $results = mysqli_query($con, $sql);

    if (mysqli_num_rows($results) == 1) {
      $_SESSION['username'] = $user_id;
      $_SESSION['success'] = "You are now logged in";
      header('location: index.php');
    }else {
      array_push($errors, "Wrong credentials");
    }
  }
}

/*
  Accept email of user whose password is to be reset
  Send email to user to reset their password
*/
if (isset($_POST['reset-password'])) {
  $email = mysqli_real_escape_string($con, $_POST['email']);
  // ensure that the user exists on our system
  $query = "SELECT email FROM user_tbl WHERE email='$email'";
  $results = mysqli_query($con, $query);

  if (empty($email)) {
    array_push($errors, "Your email is required");
  }else if(mysqli_num_rows($results) <= 0) {
    array_push($errors, "Sorry, no user exists on our system with that email");
  }
  // generate a unique random token of length 100
  $token = bin2hex(random_bytes(50));

  if (count($errors) == 0) {
    // store token in the password-reset database table against the user's email
    $sql = "INSERT INTO password_reset(email, token) VALUES ('$email', '$token')";
    $results = mysqli_query($con, $sql);

    // Send email to user with the token in a link they can click on
    $to = $email;
    $subject = "Reset your password on momcare.com";
    $msg = "Hi there, click on this link: http://localhost/IS2102-Group-project-I_MomCare/View/new_pass.php?token=" . $token . " to reset your password on our site";
    
    $msg = wordwrap($msg,70);
    sendemail($to, $subject, $msg);
    header("Location:../index.php?success=" . urlencode("Email Verification Sent!"));
  }
}

// ENTER A NEW PASSWORD
if (isset($_POST['new_password'])) {
	$new_pass = mysqli_real_escape_string($con, $_POST['new_pass']);
	$new_pass_c = mysqli_real_escape_string($con, $_POST['new_pass_c']);
	
	// Grab to token that came from the email link
	$token = $_SESSION['token'];
	if (empty($new_pass) || empty($new_pass_c)) array_push($errors, "Password is required");
	if ($new_pass !== $new_pass_c) array_push($errors, "Password do not match");
	if (count($errors) == 0) {
	  // select email address of user from the password_reset table 
	  $sql = "SELECT email FROM password_reset WHERE token='$token' LIMIT 1";
	  $results = mysqli_query($con, $sql);
	  $email = mysqli_fetch_assoc($results)['email'];
  
	  if ($email) {
		$new_pass = md5($new_pass);
		$sql = "UPDATE user_tbl SET password='$new_pass' WHERE email='$email'";
		$results = mysqli_query($con, $sql);
		header('location: ../index.php'. urlencode("Password Changed Successfully!"));
	  }
	}
  }

?>