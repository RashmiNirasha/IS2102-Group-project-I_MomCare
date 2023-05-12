<?php
include 'dbConnection.php';

//insert function 1
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["insert"])) {
    $phm_id = $_POST['phm_id'];
    $childId = $_POST['child_id'];
    $age = $_POST['age'];
    $test = $_POST['test'];
    $response = $_POST['response'];

    $insertQuery = "INSERT INTO `eyesight_test` (phm_id, child_id, age, test, response) VALUES ('$phm_id', '$childId', '$age', '$test', '$response')";

    $result = mysqli_query($con, $insertQuery);
    if ($result) {
        // Insertion successful, perform any desired actions
        header("Location: ../View/PHM/child-eyesight.php?message=Eyesight test record added successfully");
    } else {
        // Insertion failed, handle the error appropriately
        echo "Error inserting data: " . mysqli_error($con);
    }
}

//insert function 2
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["insert2"])) {
    $phm_id = $_POST['phm_id'];
    $childId = $_POST['child_id'];
    $age = $_POST['age'];
    $test = $_POST['test'];
    $response = $_POST['response'];

    $insertQuery = "INSERT INTO `hearing_test` (phm_id, child_id, age, test, response) VALUES ('$phm_id', '$childId', '$age', '$test', '$response')";

    $result = mysqli_query($con, $insertQuery);
    if ($result) {
        // Insertion successful, perform any desired actions
        header("Location: ../View/PHM/child-hearing.php?message=Hearing test record added successfully");
    } else {
        // Insertion failed, handle the error appropriately
        echo "Error inserting data: " . mysqli_error($con);
    }
}

//update function 1


//update function 2


//delete function 1


//delete function 2

?>
