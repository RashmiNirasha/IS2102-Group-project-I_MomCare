<?php

$mysqli = require __DIR__ . "/database.php";


$doc_id =  $_REQUEST['doc_id'];
$mom_id = $_REQUEST['mom_id'];
$note_topic =  $_REQUEST['note_topic'];
$note_date = $_REQUEST['note_date'];
$note_description = $_REQUEST['note_description'];
$note_records = $_REQUEST['note_records'];

$sql = "update ped_notes set doc_id='$doc_id',mom_id='$mom_id',
 note_topic='$note_topic', 
 note_date='$note_date', 
 note_description='$note_description', note_records='$note_records'";

 if(mysqli_query($mysqli, $sql)){
    alert("Records updated successfully.");
    header("Location: ../EngSignup.html");

} else{
    echo "ERROR: not succesfull $sql. " 
        . mysqli_error($mysqli);
}

?>
