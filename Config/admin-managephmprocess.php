<?php
//connecting to the database
require_once 'dbConnection.php';

$sql = "SELECT phm_id, phm_name, phm_DOB, phm_address, phm_email, phm_tele, phm_workplace FROM phm_details;";
$result = $con->query($sql);

if (isset($_GET['status'])){
    if ($_GET['status'] == 'delete'){
        $delete_query = "DELETE FROM phm_details WHERE phm_id='";
        $delete_query .= $_GET['id'];
        $delete_query .= "'";

        $delete_query_result = $con->query($delete_query);
        if ($delete_query_result){
            header("Location:../View/admin/admin-managephm.php?status=success");
        }else{
            header("Location:../View/admin/admin-managephm.php?status=not_success");
        }
    }else{
        echo "status has ".$_GET['status']." value";
    }
}else{
    echo "no status";
}
?>