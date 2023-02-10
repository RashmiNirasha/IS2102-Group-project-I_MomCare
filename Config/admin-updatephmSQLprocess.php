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
    $sql = $sql = "SELECT phm_id, phm_name, phm_age, phm_DOB, phm_address, phm_email, phm_tele, phm_workplace FROM phm_details WHERE phm_id='";
    $sql .= $_GET['id'];
    $sql .= "'";
    $result = $con->query($sql);
    if ($result->num_rows>0){
        while($row = $result->fetch_assoc()){
            $id = $row['phm_id'];
            $name = $row['phm_name'];
            $work = $row['phm_workplace'];
            $age = $row['phm_age'];
            $address = $row['phm_address'];
            $email = $row['phm_email'];
            $tel = $row['phm_tele'];
            $dob = $row['phm_DOB'];
        }
    }
 }
?>