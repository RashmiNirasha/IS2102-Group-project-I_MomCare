<?php
session_start();
//include "../Assets/Includes/header_index.php"; 
include "../Config/dbConnection.php";


if (empty($_POST["otp"])) {
    die("otp is required");
}
if (empty($_POST["newPassword"])) {
    die("newPassword is required");
}

$reset_email= $_POST['email'];
$reset_otp=$_POST['otp'];
$reset_newPassword=$_POST['newPassword'];
$reset_conPass=$_POST['confirmPassword'];

//check email is in the database
$query="SELECT * FROM registered_user_details WHERE email='$reset_email' AND password='$reset_otp'";
$result=mysqli_query($con,$query);
$num=mysqli_num_rows($result);
if ($num == 1) {
    
    //password validation
    if (strlen($reset_newPassword) < 7) {
        echo "Password must be at least 8 characters";
    } elseif (!preg_match("#[0-9]+#", $reset_newPassword)) {
        echo "Password must include at least one number!";
    } elseif (!preg_match("#[a-zA-Z]+#", $reset_newPassword)) {
        echo "Password must include at least one letter!";
    } else{
        if ($reset_conPass == $reset_newPassword) {
            $password_hash = password_hash($reset_newPassword, PASSWORD_DEFAULT);
            $query = "UPDATE registered_user_details SET password='$password_hash' WHERE email='$reset_email'";
            $result = mysqli_query($con, $query);
            if ($result) {
            } else {
                echo "successful";
                //header("Location:../index.php?success=" . urlencode("password changed succesfully.now you can log in"));
            }
    
        } else {
            echo "Email not found";
        }
    }
}

?>