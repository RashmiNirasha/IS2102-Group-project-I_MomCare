<?php
    session_start();
    include 'dbConnection.php';
    
    $noteId = $_GET['note_id'];
    $sql = "SELECT doctor_notes.*, child_details.child_name, doctor_details.doc_name 
            FROM doctor_notes 
            INNER JOIN child_details ON doctor_notes.child_id=child_details.child_id 
            INNER JOIN doctor_details ON doctor_notes.doc_id=doctor_details.doc_id 
            WHERE note_id=$noteId";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    $noteDetails = array(
        "date" => $row['note_date'],
        "child_name" => $row['child_name'],
        "doc_name" => $row['doc_name'],
        "topic" => $row['note_topic'],
        "description" => $row['note_description'],
        "records" => $row['note_records']
    );
    echo json_encode($noteDetails);
    
?>
