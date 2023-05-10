<?php
include "dbConnection.php";
$allocatePED_query = "UPDATE child_details SET doc_id='";
$allocatePED_query .= $_GET['doc_id'];
$allocatePED_query .= "' WHERE child_id='";
$allocatePED_query .=$_GET['child_id'];

$allocatePED_result = $con->query($allocatePED_query);
$child_id = $_GET['child_id'];
if ($allocatePED_result){
    header("Location:../View/PHM/phm-allocateped.php?add_doc=success&child_id=$child_id");
}
?>