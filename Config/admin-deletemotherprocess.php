<?php

//connecting to the database
 require_once 'dbConnection.php';
    if ((isset($_GET['status'])) && $_GET['status']=='delete'){
        $id = $_GET['id'];
        $sql = "DELETE from mother_details where mom_id = '$id'";
        $result = $con->query($sql);
        if ($result){
            header("Location:..\View\Admin\admin-managemother.php");
        }
    }
    
 ?>
