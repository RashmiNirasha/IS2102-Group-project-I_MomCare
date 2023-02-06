<?php
include "../../Config/dbConnection.php";

if(isset($_GET['deleteid'])){
    $deleteid = $_GET['deleteid'];
    $sql = "DELETE FROM ped_notes WHERE ped_note_id = '$deleteid'";
    $result = mysqli_query($con, $sql);
    if($result){
        header("Location: pediatrician-viewNotesView.php");
    } else{
        echo "ERROR: not succesfull $sql. " 
            . mysqli_error($con);
    }
}

?>
