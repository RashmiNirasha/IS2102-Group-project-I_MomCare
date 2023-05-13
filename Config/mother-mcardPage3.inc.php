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

    // Weight Gain calculator chart

    if (isset($_POST['poa_weeks']) && isset($_POST['weight'])) {
        $mom_poaweeks = $_POST["poa_weeks"];
        $mom_weight = $_POST["weight"];
        $mom_id = $_POST["mom_id"];

        //Calc weight gain

        //Check data is available

        $sql = "SELECT * FROM mcard_weight_gain WHERE poa_weeks = '$mom_poaweeks' AND mom_id = '$mom_id'";
        $result = mysqli_query($con, $sql);
        if (mysqli_num_rows($result) > 0) {
            echo "Data already exists";
        } else {
            // Fetch the data from the table ordered by week in ascending order
            $sql = "SELECT poa_weeks, weight FROM mcard_weight_gain ORDER BY poa_weeks ASC";
            $result = mysqli_query($con, $sql);

            // Initialize variables
            $previousWeight = null;
            $weightDifference = array();

            // Iterate through the rows
            while ($row = mysqli_fetch_assoc($result)) {
                $week = $row['poa_weeks'];
                $weight = $row['weight'];

                if ($previousWeight !== null) {
                    // Calculate the weight difference compared to the previous week
                    $difference = $weight - $previousWeight;

                    // Store the weight difference in an array
                    $weightDifference[$week] = $difference;
                }

                // Set the current weight as the previous weight for the next iteration
                $previousWeight = $weight;
            }

            // Insert a new record
            $sql = "INSERT INTO mcard_weight_gain (poa_weeks, weight, weight_gain, date_calculated, mom_id) VALUES ('$mom_poaweeks', '$mom_weight', '$difference', NOW(), '$mom_id')";
        }   

        // Execute the query
        if (mysqli_query($con, $sql)) {
            header("Location: ../View/Mother/motherCardPage3.php");
            exit();
        } else {
            echo "Error: " . mysqli_error($con);
        }

    }
    //SFH Chart

    if(isset($_POST['poa_week']) && isset($_POST['fundal_height'])) {
        $mom_poaweek = $_POST["poa_week"];
        $mom_fundalheight = $_POST["fundal_height"];
        $mom_id = $_POST["mom_id"];

        $sql = "SELECT * FROM mcard_sfh_chart WHERE poa_week = '$mom_poaweek' AND mom_id = '$mom_id'";
        $result = mysqli_query($con, $sql);
        if (mysqli_num_rows($result) > 0) {
            echo "Data already exists";
        } else {
            $sql = "INSERT INTO mcard_sfh_chart (poa_week, fundal_height, date_calculated, mom_id) VALUES ('$mom_poaweek', '$mom_fundalheight', NOW(), '$mom_id')";
            // $result = mysqli_query($con, $sql);
        }

        if (mysqli_query($con, $sql)) {
            header("Location: ../View/Mother/motherCardPage3.php");
            exit();
        } else {
            echo "Error: " . mysqli_error($con);
        }

    }

    $sql = "SELECT * FROM mcard_weight_gain WHERE mom_id = '$mom_id'";
    $result = $con->query($sql);
    if($result->num_rows > 0)
    {
        while($row=mysqli_fetch_assoc($result)){
            $mom_poaweeks = $row['poa_weeks'];
            $mom_weight = $row['weight'];
            $mom_weightgain = $row['weight_gain'];
        }
    }
    else{
        echo "0 results";
    }



    


            