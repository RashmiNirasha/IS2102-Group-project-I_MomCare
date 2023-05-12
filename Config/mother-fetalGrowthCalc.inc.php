<?php
include("dbConnection.php");

    if(isset($_POST['calculateGrowth']))
    {
    $scan_date = $_POST["scan_date"];
    $crl = $_POST["crl"];
    $hc = $_POST["hc"];
    $ac = $_POST["ac"];
    $fl = $_POST["fl"];
    $bpd = $_POST["bpd"];
    $mom_id = $_POST["mom_id"];

    // calculate fetal weight

    $fetal_weight = (1.07 * (($ac * $fl) * (pow($bpd, 2)))) + (1.07 * (pow($ac, 2) * $bpd)) - 3.31;


    // calculate gestational age by BPD

    $x = 2 * $bpd + 44.2;
    $y = floor($x / 7);
    $z = $x % 7;
    $gestational_age = $y . " weeks " . $z . " days";

    // calculate gestational age by CRL

    // $x = 5.2876 + (0.1584 * $crl) - (0.0007 * pow($crl, 2));
    // $y = floor($x / 7);
    // $z = $x % 7;
    // $gestational_age_crl = $y . " weeks " . $z . " days";

    $sql = "SELECT * from fetal_growth_calc WHERE mom_id = '$mom_id'";
    $result = mysqli_query($con, $sql);

        if (mysqli_num_rows($result) == null) {
            // Insert a new record
            $sql = "INSERT INTO fetal_growth_calc (mom_id, scan_date, crl, hc, ac, fl, bpd, fetal_weight, gestational_age) VALUES ('$mom_id','$scan_date', '$crl', '$hc', '$ac', '$fl', '$bpd', '$fetal_weight', '$gestational_age')";
            $result = mysqli_query($con, $sql);
        } else {
            // Update the existing record
            $sql = "UPDATE fetal_growth_calc SET scan_date = '$scan_date', crl = '$crl', hc = '$hc', ac = '$ac', fl = '$fl', bpd = '$bpd', fetal_weight = '$fetal_weight', gestational_age = '$gestational_age' WHERE mom_id = '$mom_id'";
            $result = mysqli_query($con, $sql);
        }
        header("Location: ../View/Mother/mother-viewFetalGrowthCalc.php?mom_id=" . $mom_id);
        // if (mysqli_query($con, $sql)) {
        //     header("Location: ../View/Mother/mother-viewFetalGrowthCalc.php?mom_id=" . $mom_id);
        //     exit();
        // } else {
        //     echo "Error: " . mysqli_error($con);
        // }
    }
?>