<?php 
    require_once 'dbConnection.php';

    //session_start();
    $mom_id = $_SESSION['mom_id'];
    
    $sql = "SELECT * FROM mcard_emergency_plan WHERE mom_id = '$mom_id'";
    $result = $con->query($sql);
    if($result->num_rows > 0)
    {
        while($row=mysqli_fetch_assoc($result)){
            $mom_ihospital1 = $row['i_hospital1'];
            $mom_ihospital2 = $row['i_hospital2'];
            $mom_transport1 = $row['transport1'];
            $mom_transport2 = $row['transport2'];
            $mom_distance1 = $row['distance1'];
            $mom_distance2 = $row['distance2'];
            $mom_eme_time1 = $row['time1'];
            $mom_eme_time2 = $row['time2'];
        }
    }
    else{
        echo "0 results";
    }

    $sql = "SELECT * FROM mcard_planning WHERE mom_id = '$mom_id'";
    $result = $con->query($sql);
    if($result->num_rows > 0)
    {
        while($row=mysqli_fetch_assoc($result)){
            $mom_prenatal_book = $row['prenatal_book'];
            $mom_breastfeedingbook = $row['breastfeeding_book'];
            $mom_childdev = $row['childdev_book'];
            $mom_familyplaning = $row['family_planing'];
            $mom_counselldate = $row['counsell_date'];
            $mom_planmethod = $row['method'];
            $mom_planreason = $row['reason'];
            $mom_plansigneddate = $row['signed_date'];
        }
    }
    else{
        echo "0 results";
    }



    


            