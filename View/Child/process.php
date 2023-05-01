<?php
include '../../Config/dbConnection.php';

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $observations = array(
    "observation1" => array("id" => $_POST["id1"], "value" => $_POST["observation1"]),
    "observation2" => array("id" => $_POST["id2"], "value" => $_POST["observation2"]),
    "observation3" => array("id" => $_POST["id3"], "value" => $_POST["observation3"]),
    "observation4" => array("id" => $_POST["id4"], "value" => $_POST["observation4"]),
    "observation5" => array("id" => $_POST["id5"], "value" => $_POST["observation5"])
  );

  // Update the observation status for each selected option
  foreach ($observations as $obs) {
    if ($obs["value"] != "") {
      $id = $obs["id"];
      $value = mysqli_real_escape_string($con, $obs["value"]);
      $sql = "UPDATE child_developmet_tests1 SET observation = '$value' WHERE id = '$id'";
      $result = mysqli_query($con, $sql);
      if (!$result) {
        echo "Error updating observation status for id=$id: " . $con->error;
        exit();
      }
    }
  }

  // Redirect to the view page
  header("Location: child-developmentView.php?child_id=$_GET[child_id]");
  exit();
}
?>
