<?php
    if (isset($_GET['note_id'])) {
        include '../../Config/dbConnection.php';
        $note_id = $_GET['note_id'];
        $mom_id = $_GET['mom_id'];
        $query = "DELETE  FROM doctor_notes WHERE note_id = '$note_id'";
        $result = mysqli_query($con, $query);

        if ($result) {
            header("Location: ../../View/VOG/testsVog.php?mom_id=".$_GET['mom_id']."&error2=Record deleted successfully");
        } else {
            header("Location: ../../View/VOG/testsVog.php?mom_id=$mom_id&error2=Unable to delete record");
        }
    }
?>