<?php
include("dbConnection.php");

if (isset($_POST['height']) && isset($_POST['weight'])) {
  // Store values from the form
  $age = $_POST["age"];
  $height = $_POST["height"];
  $weight = $_POST["weight"];
  $child_id = $_POST["child_id"];

  if ($height == 0 || $weight == 0 || $height > 200 || $weight > 100) {
    echo "<script type='text/javascript'>alert('Invalid Height or weight error');window.location='../View/Child/child-chartsView.php?child_id=" . $child_id . "';</script>
    ";
    exit();
  }

  // Calculate BMI value
  $bmi = $weight / ($height * $height)*10000;

  // Check if data already exists
  $sql = "SELECT * FROM child_bmi_values WHERE age = '$age' AND child_id = '$child_id'";
  $result = mysqli_query($con, $sql);
  if (mysqli_num_rows($result) > 0) {
    // Update the existing record
    $sql = "UPDATE child_bmi_values SET height = '$height', weight = '$weight', bmi = '$bmi', date_calculated = NOW() WHERE age = '$age' AND child_id = '$child_id'";
  } else {
    // Insert a new record
    $sql = "INSERT INTO child_bmi_values (age, height, weight, bmi, date_calculated, child_id) VALUES ('$age', '$height', '$weight', '$bmi', NOW(), '$child_id')";
  }

  // Execute the query
  if (mysqli_query($con, $sql)) {
    echo "<script type='text/javascript'>alert('Height and weight Successfullt added.');window.location='../View/Child/child-chartsView.php?child_id=" . $child_id . "';</script>";
    exit();
  } else {
    echo "Error: " . mysqli_error($con);
  }
}
?>
