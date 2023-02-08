<?php
session_start();
include '../../Config/dbConnection.php';
include "../../Assets/Includes/header_pages.php";

?>
<!DOCTYPE html>
<html lang="en">    
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style><?php include "../../Assets/Css/style-common.css" ?></style>    </head>
    <body>
    <div class="main-mother">
        <div class="mom-filter">
        <h1>All the children</h1>
        </div>

       <div class="child-details">
       <?php
        $sql = "SELECT * FROM child_details";
        $result = mysqli_query($con, $sql);
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck > 0) {
            echo "<table>
                <th>
                    <th>Child id</th>
                    <th>child_name</th>
                    <th>child_gender</th>
                    <th>phm_id</th>
                    <th>doc_id</th>
                    <th>mom_id</th>
                </th>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo "
                <tr><td>" . $row['child_id'] . "</td><td>" . $row['child_name'] . "</td><td>" . $row['child_gender'] . "</td><td>" . $row['phm_id'] . "</td><td>" . $row['doc_id'] . "</td><td>" . $row['mom_id'] . "</td>
                </tr>";
            }
            echo "</table>";
        } else{
            mysqli_error($con);
        }
?>
        </div>
       
    </body>