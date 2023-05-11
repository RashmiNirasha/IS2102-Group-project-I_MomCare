<?php

include '../../Config/dbConnection.php';

// Check if the form is submitted for update

$child_id = $_POST['child_id'];
    $edit_child_name = $_POST['edit_child_name'];
    $edit_birth_date = $_POST['edit_birth_date'];
    $edit_child_gender = $_POST['edit_child_gender'];

    // Perform the update query
    $sql = "UPDATE child_details SET child_name = '$edit_child_name', birth_date = '$edit_birth_date', child_gender = '$edit_child_gender' WHERE child_id = '$child_id'";
    $result = mysqli_query($con, $sql);

    if ($result) {
        // Redirect back to the child profile page with a success message
        header("Location: child-addchild.php?message=Child record updated successfully");
        exit();
    } else {
        // Redirect back to the child profile page with an error message
        header("Location: child-addchild.php?error=Failed to update child records");
        exit();
    }

