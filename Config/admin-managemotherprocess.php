<?php
//connecting to the database
require_once 'dbConnection.php';

$sql = "SELECT mom_id, mom_fname, mom_lname, mom_age, mom_address, mom_email, mom_mobile, mom_landline, mom_regdate FROM mother_details;";
$result = $con->query($sql);

if (isset($_GET['status'])){
    if ($_GET['status'] == 'delete'){
        $delete_query = "DELETE FROM mother_details WHERE mom_id='";
        $delete_query .= $_GET['id'];
        $delete_query .= "'";

        $delete_query_result = $con->query($delete_query);
        if ($delete_query_result){
            header("Location:../View/admin/admin-managemother.php?status=success");
        }else{
            header("Location:../View/admin/admin-managemother.php?status=not_success");
        }
    }else{
        echo "status has ".$_GET['status']." value";
    }
}else{
    echo "no status";
}
?>