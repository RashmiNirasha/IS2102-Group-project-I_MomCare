<?php
include("../../Config/dbConnection.php");

if (isset($_POST['height']) && isset($_POST['weight'])) {
  // Store values from the form
  $age = $_POST["age"];
  $height = $_POST["height"];
  $weight = $_POST["weight"];


  // Calculate BMI value
  $bmi = $weight / ($height * $height)*10000;

  // Insert the data into the database
  $sql = "INSERT INTO bmi_values (age, height, weight, bmi,date_calculated)
  VALUES ('$age', '$height', '$weight', '$bmi',NOW())";

  if ($con->query($sql) === TRUE) {
        header("Location: ../../View/Child/child-bmiChart.php");
  } else {
        echo "not successful";
  }
}

?>