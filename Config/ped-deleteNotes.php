<?php
include "dbConnection.php";

if(isset($_GET['deleteid'])){
    $deleteid = $_GET['deleteid'];
    $sql = "DELETE FROM doctor_notes WHERE note_id = '$deleteid'";
    $result = mysqli_query($con, $sql);
    if($result){
        header("Location: ../View/pediatrician/pediatrician-viewNotesView.php");
    } else{
        echo "ERROR: not succesfull $sql. " 
            . mysqli_error($con);
    }
}
?>
