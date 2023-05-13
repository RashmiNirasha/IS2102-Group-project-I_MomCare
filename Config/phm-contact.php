<?php
session_start();
include "dbConnection.php";

if (isset($_SESSION['email'])) {
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $sql1 = "SELECT mom_id FROM mother_details WHERE mom_email='$email'";
    $result1 = mysqli_query($con, $sql1);
    $row1 = mysqli_fetch_array($result1);
    $mom_id = $row1['mom_id'];

    $sql = "INSERT INTO phm_help_requests (mom_id, name, email, message, submission_date) 
            VALUES ('$mom_id', '$name', '$email', '$message', NOW())";
    $result = mysqli_query($con, $sql);

    if ($result) {
      header("Location: ../View/Child/Contact.php?message=success");
      exit();
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
  }
}
?>
