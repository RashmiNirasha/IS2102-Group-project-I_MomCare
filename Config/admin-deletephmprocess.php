<?php

//connecting to the database
 require_once 'dbConnection.php';
    if ((isset($_GET['status'])) && $_GET['status']=='delete'){
        $id = $_GET['id'];
        $sql = "DELETE from phm_details where phm_id = '$id'";
        $result = $con->query($sql);
        if ($result){
            header("Location:..\View\Admin\admin-managephm.php");
        }
    }
    
 ?>
