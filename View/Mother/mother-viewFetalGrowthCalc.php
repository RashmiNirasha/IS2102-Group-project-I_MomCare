<?php 
    session_start();
    include '../../Config/dbConnection.php';
    if(isset($_SESSION['email'])){ 
        //include '../../Assets/Includes/header_pages.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fetal Growth Calculator</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    <style>
        <?php 
            include '../../Assets/Css/mother-stylesheet.css';
            include '../../Assets/Css/style-common.css';

        ?>
    </style> 
</head>
<body>
    <?php
        $mom_id = $_SESSION['mom_id'];

        $sql = "SELECT * from fetal_growth_calc WHERE mom_id = '$mom_id'";
        $result = mysqli_query($con, $sql);
        $weight = 0; $age = 0;
        if  (mysqli_num_rows($result) > 0) {
            $fetal_weight = array();
            $gestational_age = array();

            while ($row = mysqli_fetch_assoc($result)) {
                $scan_date = $row['scan_date'];
                $gestational_age[] = $row['gestational_age'];
                $fetal_weight[] = $row['fetal_weight'];
                $weight = end($fetal_weight);
                $age = end($gestational_age);
            }
            if (!empty($weight) && !empty($age)) {
                $weight = end($fetal_weight);
                $age = end($gestational_age);
            }
            else {
                $weight = 0;
                $age = 0;
            }
        }

    ?>

    <div class="content">
        <div class="heading">
            <h1>Fetal Growth Calculator</h1>
            <a href="#">
                <span class="material-icons">notifications</span>
            </a>
        </div>
        <button class="goBackBtn" onclick="history.back()">Go back</button>

        <!-- Fetal groth calculator -->
        <div class="FG-calc-main">
            <div class="OneColumnSection"> <!--when a section has only one table, use this class-->
                <div class="MotherCardTableTitles"><h3> Fetal Growth Test  </h3><span></span></div>
                <div class="MotherGeneralDetails">
                    <form action="../../Config/mother-fetalGrowthCalc.inc.php" method="post">
                        <table class="MotherCardTables">
                            <tr>
                                <th>Ultrasonic Scanned Date</th>
                                <td><input type="date" id="scan_date" name="scan_date" required></td>
                            </tr>
                            <tr>
                                <th>Crown Rump Length (CRL)<p>(in millimeters)</p></th>
                                <td><input type="text" id="crl" name="crl" required></td>
                            </tr>
                            <tr>
                                <th>Head Circumference (HC)<p>(in millimeters)</p></th>
                                <td><input type="text" id="hc" name="hc" required></td>
                            </tr>
                            <tr>
                                <th>Abdominal Circumference (AC)<p>(in millimeters)</p></th>
                                <td><input type="text" id="ac" name="ac" required></td>
                            </tr>
                            <tr>
                                <th>Femur Length (FL)<p>(in millimeters)</p></th>
                                <td><input type="text" id="fl" name="fl" required></td>
                            </tr>
                            <tr>
                                <th>Biparietal Diameter (BPD)<p>(in millimeters)</p></th>
                                <td><input type="text" id="bpd" name="bpd" required></td>
                            </tr>
                            <tr>
                                <td><input type="submit" value="Calculate Growth" name="calculateGrowth"></td>
                                <td><input type="reset" value="Reset"></td>
                            </tr>
                            </table>
                            <input type="hidden" name="mom_id" value="<?php echo $mom_id; ?>">
                    </form>
            </div>
            <div class="grid-2" id="result">
                <p>Approximate Gestational Age: <?php echo $age; ?></p>
                <p>Estimated Fetal Weight: <?php echo $weight; ?> grams </p>
            </div>
        </div>
    </div>
    
    

</body>
</html>
<?php 
    }
?>
