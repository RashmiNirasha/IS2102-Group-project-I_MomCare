<?php
include 'dbConnection.php';

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $child_id = mysqli_real_escape_string($con, $_GET["child_id"]);

  $observations = array(
    "observation1" => array("id" => $_POST["id1"], "value" => $_POST["observation1"]),
    "observation2" => array("id" => $_POST["id2"], "value" => $_POST["observation2"]),
    "observation3" => array("id" => $_POST["id3"], "value" => $_POST["observation3"]),
    "observation4" => array("id" => $_POST["id4"], "value" => $_POST["observation4"]),
    "observation5" => array("id" => $_POST["id5"], "value" => $_POST["observation5"]),
    "observation6" => array("id" => $_POST["id6"], "value" => $_POST["observation6"]),
    "observation7" => array("id" => $_POST["id7"], "value" => $_POST["observation7"]),
    "observation8" => array("id" => $_POST["id8"], "value" => $_POST["observation8"]),
    

  );

  $test1 = $_POST["test1"];
  $test2 = $_POST["test2"];
  $test3 = $_POST["test3"];
  $test4 = $_POST["test4"];
  $test5 = $_POST["test5"];
  $test6 = $_POST["test6"];
  $test7 = $_POST["test7"];
  $test8 = $_POST["test8"];
 
  // Insert or update the data for each observation/test pair
foreach ($observations as $key => $obs) {
  $id = mysqli_real_escape_string($con, $obs["id"]);
  $value = mysqli_real_escape_string($con, $obs["value"]);

  if ($value != "") {
    // Set the test and observation values based on the ID
    if ($key == "observation1") {
      $test = $test1;
      $observation = $observation1;
    } else if ($key == "observation2") {
      $test = $test2;
      $observation = $observation2;
    } else if ($key == "observation3") {
      $test = $test3;
      $observation = $observation3;
    } else if ($key == "observation4") {
      $test = $test4;
      $observation = $observation4;
    } else if ($key == "observation5") {
      $test = $test5;
      $observation = $observation5;
    }else if ($key == "observation6") {
      $test = $test6;
      $observation = $observation6;
    }else if ($key == "observation7") {
      $test = $test7;
      $observation = $observation7;
    }else if ($key == "observation8") {
      $test = $test8;
      $observation = $observation8;
    }


    // Check if the combination of child_id and id already exists in the table
    $sql = "SELECT * FROM child_developmet_tests6 WHERE child_id = '$child_id' AND id = '$id'";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) > 0) {
      // If the combination already exists, update the observation value
      $sql = "UPDATE child_developmet_tests6 SET observation = '$value' WHERE child_id = '$child_id' AND id = '$id'";
      if (mysqli_query($con, $sql)) {
        header("Location: ../View/Child/child-developmentView2.php?child_id=$child_id");
      }
    } else {
      // If the combination does not exist, insert a new row
      $sql = "INSERT INTO child_developmet_tests6 (child_id, id, test, observation) VALUES ('$child_id', '$id', '$test', '$value')";
      if (mysqli_query($con, $sql)) {
        header("Location: ../View/Child/child-developmentView2.php?child_id=$child_id");
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
      }
    }
  }
}
}
?>


