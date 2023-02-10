<?php
//connecting to the database
require_once 'dbConnection.php';

 $id = '';
 $name = '';
 $type = '';
 $work = '';
 $age = '';
 $address = '';
 $email = '';
 $tel = '';
 $dob ='';
 if (isset($_GET['id'])){
    $sql = $sql = "SELECT doc_id, doc_type, doc_name, doc_age, doc_DOB, doc_address, doc_email, doc_tele, doc_workplace FROM doctor_details WHERE doc_id='";
    $sql .= $_GET['id'];
    $sql .= "'";
    $result = $con->query($sql);
    if ($result->num_rows>0){
        while($row = $result->fetch_assoc()){
            $id = $row['doc_id'];
            $name = $row['doc_name'];
            $type = $row['doc_type'];
            $work = $row['doc_workplace'];
            $age = $row['doc_age'];
            $address = $row['doc_address'];
            $email = $row['doc_email'];
            $tel = $row['doc_tele'];
            $dob = $row['doc_DOB'];
        }
    }
 }
?>