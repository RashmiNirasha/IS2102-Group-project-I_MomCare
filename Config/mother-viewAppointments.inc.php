<?php
    require_once 'dbConnection.php';

    $doc_id = $_GET['doc_id'];
    $sql = "SELECT * FROM appointment_details1 where doc_id = '$doc_id'";
    $result = $con->query($sql);

    if($result->num_rows > 0)
    {
        while($row = $result->fetch_assoc())
        {
            $app_topic = $row['topic'];
            $doc_id = $row['doc_id'];
            $doc_name = $row['doc_name'];
            $app_date = $row['app_date'];
            $app_time = $row['app_time'];
            $app_place = $row['app_place'];
            $app_notes = $row['notes'];
        }
    }
    else
    {
        echo "0 results";
    }

?>