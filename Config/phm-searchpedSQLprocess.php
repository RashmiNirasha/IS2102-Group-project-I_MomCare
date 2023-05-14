<?php
include "dbConnection.php";
$allocateVOG_query = "UPDATE child_details SET doc_id='";
$allocateVOG_query .= $_GET['doc_id'];
$allocateVOG_query .= "' WHERE child_id='";
$allocateVOG_query .=$_GET['child_id'];

$allocateVOG_result = $con->query($allocateVOG_query);
$child_id = $_GET['child_id'];
$search = $_GET['search'];
if ($allocateVOG_result){
    header("Location:../View/PHM/phm-searchped.php?add_doc=success&child_id=$child_id&search=$search");
}
?>