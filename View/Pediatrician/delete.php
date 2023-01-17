<?php
include '../../Config/database.php';

if(isset($_GET['deleteid'])){
    $deleteid = $_GET['deleteid'];
    $sql = "DELETE FROM ped_notes WHERE ped_note_id = '$deleteid'";
    $result = mysqli_query($mysqli, $sql);
    if($result){
        header("Location: pediatrician-viewNotesView.php");
    } else{
        echo "ERROR: not succesfull $sql. " 
            . mysqli_error($mysqli);
    }
}

?>
