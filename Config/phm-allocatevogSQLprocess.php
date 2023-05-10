<?php
include "dbConnection.php";
$allocateVOG_query = "UPDATE mother_details SET doc_id='";
$allocateVOG_query .= $_GET['doc_id'];
$allocateVOG_query .= "' WHERE mom_id='";
$allocateVOG_query .=$_GET['mom_id'];

$allocateVOG_result = $con->query($allocateVOG_query);
$mom_id = $_GET['mom_id'];
if ($allocateVOG_result){
    header("Location:../View/PHM/phm-allocatevog.php?add_doc=success&mom_id=$mom_id");
}
?>