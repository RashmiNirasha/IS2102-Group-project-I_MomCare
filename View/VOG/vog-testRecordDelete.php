<?php 
    session_start();
    include '../../Config/dbConnection.php';
    if (isset($_SESSION['email'])){?>
<?php
if (isset($_GET['note_id']) && isset($_GET['mom_id']) && isset($_GET['doc_id'])) {
    include '../../Config/dbConnection.php';
    $note_id = $_GET['note_id'];
    $mom_id = $_GET['mom_id'];
    $doc_id = $_GET['doc_id'];
    
    $current_doc_sql = "SELECT doc_id FROM doctor_details WHERE doc_email = '" . $_SESSION['email'] . "'";
    $current_doc_result = mysqli_query($con, $current_doc_sql);
    $current_doc_row = mysqli_fetch_assoc($current_doc_result);
    $current_doc_id = $current_doc_row['doc_id'];

    // Check if the user has permission to delete the record
    if ($doc_id == $current_doc_id) {
        $query = "DELETE FROM doctor_notes WHERE note_id = $note_id";
        $result = mysqli_query($con, $query);

        if ($result) {
            header("Location: ../../View/VOG/vog-tests.php?mom_id=$mom_id&error2=Record deleted successfully");
        } else {
            header("Location: ../../View/VOG/vog-tests.php?mom_id=$mom_id&error2=Unable to delete record");
        }
    } else {
        header("Location: ../../View/VOG/vog-tests.php?mom_id=$mom_id&error2=You don't have permission to delete this record");
    }
} else {
    echo "Error: " . mysqli_error($con);
    header("Location: ../../View/VOG/vog-tests.php?mom_id=$mom_id&error2=Unable to delete record");
}
?>
<?php }else{
    header("Location: ../../mainLogin.php");
    exit();
} ?>
