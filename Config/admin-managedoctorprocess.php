<?php
//connecting to the database
require_once 'dbConnection.php';

$sql = "SELECT doc_id, doc_type, doc_name, doc_age, doc_address, doc_email, doc_tele, doc_workplace FROM doctor_details;";
$result = $con->query($sql);

if (isset($_GET['status'])){
    if ($_GET['status'] == 'delete'){
        $delete_query = "DELETE FROM doctor_details WHERE doc_id='";
        $delete_query .= $_GET['id'];
        $delete_query .= "'";

        $delete_query_result = $con->query($delete_query);
        if ($delete_query_result){
            header("Location:../View/admin/admin-managedoctor.php?status=success");
        }else{
            header("Location:../View/admin/admin-managedoctor.php?status=not_success");
        }
    }else{
        echo "status has ".$_GET['status']." value";
    }
}else{
    echo "no status";
}
?>