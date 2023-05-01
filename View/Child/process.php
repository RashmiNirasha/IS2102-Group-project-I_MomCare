<?php 
include '../../Config/dbConnection.php';

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $id1 = $_POST["id1"];
  $id2 = $_POST["id2"];
  $id3 = $_POST["id3"];
  $id4 = $_POST["id4"];
  $id5 = $_POST["id5"];

  $observation1 = $_POST["observation1"];
  $observation2 = $_POST["observation2"];
  $observation3 = $_POST["observation3"];
  $observation4 = $_POST["observation4"];
  $observation5 = $_POST["observation5"];

  // Update the observation status for each id
  if ($id1) {
    $sql = "UPDATE child_developmet_tests1 SET observation = '$observation1' WHERE id = '$id1'";
    $result = mysqli_query($con, $sql);
    if (!$result) {
      echo "Error updating observation status for id=$id1: " . $con->error;
      exit();
    }
  }
  if ($id2) {
    $sql = "UPDATE child_developmet_tests1 SET observation = '$observation2' WHERE id = '$id2'";
    $result = mysqli_query($con, $sql);
    if (!$result) {
      echo "Error updating observation status for id=$id2: " . $con->error;
      exit();
    }
  }
  if ($id3) {
    $sql = "UPDATE child_developmet_tests1 SET observation = '$observation3' WHERE id = '$id3'";
    $result = mysqli_query($con, $sql);
    if (!$result) {
      echo "Error updating observation status for id=$id3: " . $con->error;
      exit();
    }
  }
  if ($id4) {
    $sql = "UPDATE child_developmet_tests1 SET observation = '$observation4' WHERE id = '$id4'";
    $result = mysqli_query($con, $sql);
    if (!$result) {
      echo "Error updating observation status for id=$id4: " . $con->error;
      exit();
    }
  }
  if ($id5) {
    $sql = "UPDATE child_developmet_tests1 SET observation = '$observation5' WHERE id = '$id5'";
    $result = mysqli_query($con, $sql);
    if (!$result) {
      echo "Error updating observation status for id=$id5: " . $con->error;
      exit();
    }
  }

  // Redirect to the view page
  header ("Location: child-developmentView.php?child_id=$_GET[child_id]");
  exit();
}
?>
