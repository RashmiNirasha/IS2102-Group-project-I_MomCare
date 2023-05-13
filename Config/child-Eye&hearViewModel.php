<?php
include 'dbConnection.php';

//insert function 1
if (isset($_POST["insert"])) {
    $phm_id = $_POST['phm_id'];
    $childId = $_POST['child_id'];
    $age = $_POST['age'];
    $test = $_POST['test'];
    $response = $_POST['response'];

    if($childId && $test){
        // Check if the combination already exists in the table
        $checkQuery = "SELECT * FROM `child_ceyesight_test` WHERE `child_id`='$childId' AND `test_name`='$test'";
        $checkResult = mysqli_query($con, $checkQuery);
    
        if (mysqli_num_rows($checkResult) > 0) {
            // Combination already exists, perform update
            $updateQuery = "UPDATE `child_ceyesight_test` SET `age_range`='$age', `response`='$response', `phm_id`='$phm_id' WHERE `child_id`='$childId' AND `test_name`='$test'";
            $result = mysqli_query($con, $updateQuery);
    
            if ($result) {
                // Update successful
                header("Location: ../View/PHM/child-Eye&hearView.php?message1=Eyesight test record updated successfully");
                exit;
            } else {
                // Update failed, handle the error appropriately
                echo "Error updating data: " . mysqli_error($con);
            }
        }else {
            // Combination does not exist, perform insert
            $insertQuery = "INSERT INTO `child_ceyesight_test`(`child_id`, `age_range`, `test_name`, `response`, `phm_id`) VALUES ( '$childId', '$age', '$test', '$response','$phm_id')";
    
            $result = mysqli_query($con, $insertQuery);
            if ($result) {
                // Insertion successful, perform any desired actions
                header("Location: ../View/PHM/child-Eye&hearView.php?message1=Eyesight test record added successfully");
            } else {
                // Insertion failed, handle the error appropriately
                echo "Error inserting data: " . mysqli_error($con);
            }
        }
    }

}

//insert function 2
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["insert2"])) {
    $phm_id = $_POST['phm_id'];
    $childId = $_POST['child_id'];
    $age = $_POST['age'];
    $test = $_POST['test'];
    $response = $_POST['response'];

    if ($childId && $test) {
        // Check if the combination already exists in the table
        $checkQuery = "SELECT * FROM `child_chearting_test` WHERE `child_id`='$childId' AND `test_name`='$test'";
        $checkResult = mysqli_query($con, $checkQuery);
    
        if (mysqli_num_rows($checkResult) > 0) {
            // Combination already exists, perform update
            $updateQuery = "UPDATE `child_chearting_test` SET `age_range`='$age', `response`='$response', `phm_id`='$phm_id' WHERE `child_id`='$childId' AND `test_name`='$test'";
            $result = mysqli_query($con, $updateQuery);
    
            if ($result) {
                // Update successful
                header("Location: ../View/PHM/child-Eye&hearView.php?message=Hearing test record updated successfully");
                exit;
            } else {
                // Update failed, handle the error appropriately
                echo "Error updating data: " . mysqli_error($con);
            }
        } else {
            // Combination does not exist, perform insert
            $insertQuery = "INSERT INTO `child_chearting_test`(`child_id`, `age_range`, `test_name`, `response`, `phm_id`) VALUES ('$childId', '$age', '$test', '$response', '$phm_id')";
            $result = mysqli_query($con, $insertQuery);
    
            if ($result) {
                // Insertion successful
                header("Location: ../View/PHM/child-Eye&hearView.php?message=Hearing test record added successfully");
                exit;
            } else {
                // Insertion failed, handle the error appropriately
                echo "Error inserting data: " . mysqli_error($con);
            }
        }
    }
}

//update function 1


//update function 2


//delete function 1


//delete function 2

?>
