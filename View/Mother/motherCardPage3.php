<?php 
   session_start();
    include '../../Config/dbConnection.php';
   if (isset($_SESSION['email']))
   {
?>
<?php 
    include "../../Assets/Includes/header_pages.php"; 
    include "../../Config/mother-mcardPage3.inc.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style><?php include "../../Assets/css/style-common.css" ?></style>
</head>
<body>
    <?php 
        $sql = "SELECT * FROM mcard_weight_gain WHERE mom_id = '$mom_id'";
        $result = mysqli_query($con,$sql);
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck > 0){
            $week = array();
            $weight = array();
            $difference = array();

            while ($row = mysqli_fetch_assoc($result)){
                $week[] = $row['poa_weeks'];
                $weight[] = $row['weight'];
                $difference[] = $row['weight_gain'];
            }
        }

        $sql = "SELECT * FROM mcard_sfh_chart WHERE mom_id = '$mom_id'";
        $result = mysqli_query($con,$sql);
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck > 0){
            $week2 = array();
            $fundal_height = array();

            while ($row = mysqli_fetch_assoc($result)){
                $week2[] = $row['poa_week'];
                $fundal_height[] = $row['fundal_height'];
            }
        }
    ?>
    <div class="MotherCardMainDiv">
        <div class="SectionNameDiv">
            <h3>Section A</h3>
        </div>
        <div class="MotherCardOuterDiv">
            <div class="MotherCardMiddleDiv">
                <div class="MotherCardInnerDiv">
                    <div class="TwoColumnSection"> <!--when a section have two tables, use this class-->
                        <div class="TwoColumnSec1">
                            <div class="MotherCardTableTitles">
                                <h3>Weight Gain Chart</h3>
                            </div>
                            <div class="WeightGainChar">
                                <!-- add chart code here -->
                                <form action="../../Config/mother-mcardPage3.inc.php" method="post">
                                    <table class="MotherCardTables">
                                        <tr>
                                            <th>POA Weeks</th>
                                            <td><input type="text" id="poa_weeks" name="poa_weeks"></td>
                                        </tr>
                                        <tr>
                                            <th>Weight</th>
                                            <td><input type="text" id="weight" name="weight"></td>
                                        </tr>
                                        <!-- <tr>
                                            <th>Weight Gain</th>
                                            <td>
                                                <label for="weight_gain"><?php 
                                                ?>
                                                </label>
                                            </td>
                                        </tr> -->
                                        <tr>
                                        <td><input type="submit" value="Submit"></td>
                                        <td><input type="reset" value="Reset"></td>
                                        </tr>
                                    </table>
                                    <input type="hidden" id="mom_id" name="mom_id" value="<?php echo $mom_id; ?>">
                                </form>
                                <div class="grid-3" id="chart">
                                    <h3>Weight Gain Chart</h3>
                                    <div class="boxchart"><canvas id="weightGainChart"></canvas>
                                    <button id="showDataBtn">View Chart</button>
                                    </div>
                                </div>

                                <script>
                                    //set up block 
                                    const week = <?php echo json_encode($week); ?>;
                                    const weight = <?php echo json_encode($weight); ?>;
                                    const weight_gain = <?php echo json_encode($difference); ?>;

                                    const data= {
                                        labels: <?php echo json_encode($week); ?>, // Modify labels to use age values from the table
                                        datasets: [{
                                            label: 'weight_gain',
                                            data: weight_gain,
                                            backgroundColor: ['rgba(2, 156, 228, 0.12)'],
                                            fill: true ,
                                            borderColor: ['rgba(2, 158, 228, 1)'],
                                            borderWidth: 1}]
                                        };

                                    const config = {
                                    type: 'line',
                                    data: data,
                                    options: {
                                        responsive: true,
                                        scales: {
                                        x: {
                                            title: { display: true, text: 'Weeks'}},
                                        y: {
                                            title: {display: true, text: 'Weight Gain'},
                                            beginAtZero: true
                                        }
                                        }
                                    }
                                    };

                                    const weightGainChart = new Chart(document.getElementById('weightGainChart'), config);

                                    document.getElementById('showDataBtn').addEventListener('click', function() {
                                    weightGainChart.data.datasets[0].data = weight_gain;
                                    weightGainChart.data.datasets[0].label = 'Weight Gain';
                                    weightGainChart.options.scales.y.title.text = 'Weight Gain';
                                    weightGainChart.update();
                                    });

                                </script>


                            </div>
                        </div>
                        <div class="TwoColumnSec2">
                            <div class="MotherCardTableTitles">
                                <h3>SFH Chart</h3>
                            </div>
                            <div class="SFHchart">
                                <!-- add chart code here -->

                                <form action="../../Config/mother-mcardPage3.inc.php" method="post">
                                    <table class="MotherCardTables">
                                        <tr>
                                            <th>POA Week</th>
                                            <td><input type="text" id="poa_week" name="poa_week"></td>
                                        </tr>
                                        <tr>
                                            <th>Fundal Height(cm)</th>
                                            <td><input type="text" id="fundal_height" name="fundal_height"></td>
                                        </tr>
                                        <tr>
                                        <td><input type="submit" value="Submit"></td>
                                        <td><input type="reset" value="Reset"></td>
                                        </tr>
                                    </table>
                                    <input type="hidden" id="mom_id" name="mom_id" value="<?php echo $mom_id; ?>">
                                </form>

                                <div class="grid-3" id="chart">
                                    <h3>SFH Chart</h3>
                                    <div class="boxchart"><canvas id="SFHChart"></canvas>
                                    <button id="showDataBtn2">View Chart</button>
                                    </div>
                                </div>
                                
                                <script>
                                    //set up block 
                                    const week2 = <?php echo json_encode($week2); ?>;
                                    const fundal_height = <?php echo json_encode($fundal_height); ?>;

                                    const data= {
                                        labels: <?php echo json_encode($week2); ?>, // Modify labels to use age values from the table
                                        datasets: [{
                                            label: 'fundal_height',
                                            data: fundal_height,
                                            backgroundColor: ['rgba(2, 156, 228, 0.12)'],
                                            fill: true ,
                                            borderColor: ['rgba(2, 158, 228, 1)'],
                                            borderWidth: 1}]
                                        };

                                    const config = {
                                    type: 'line',
                                    data: data,
                                    options: {
                                        responsive: true,
                                        scales: {
                                        x: {
                                            title: { display: true, text: 'Weeks'}},
                                        y: {
                                            title: {display: true, text: 'Fundal Height'},
                                            beginAtZero: true
                                        }
                                        }
                                    }
                                    };

                                    const SFHChart = new Chart(document.getElementById('SFHChart'), config);

                                    document.getElementById('showDataBtn2').addEventListener('click', function() {
                                    SFHChart.data.datasets[0].data = fundal_height;
                                    SFHChart.data.datasets[0].label = 'Fundal Height';
                                    SFHChart.options.scales.y.title.text = 'Fundal Height';
                                    SFHChart.update();
                                    });

                                </script>

                            </div>
                        </div>
                    </div>
                    <div class="TwoColumnSection">
                        <div class="TwoColumnSec1">
                            <div class="MotherCardTableTitles">
                                <h3>Birth and emergency preparedness plan</h3>
                            </div>
                            <div class="MedicalHistory">
                                <table class="MotherCardTables">
                                    <tr>
                                        <td class="emptyTableCell"></td>
                                        <td>Delivery</td>
                                        <td>In an emergency</td>
                                    </tr>
                                    <tr>
                                        <td>Intended hospital</td>
                                        <td><?php echo $mom_ihospital1 ?></td>
                                        <td><?php echo $mom_ihospital2 ?></td>
                                    </tr>
                                    <tr>
                                        <td>Mode of transport</td>
                                        <td><?php echo $mom_transport1 ?></td>
                                        <td><?php echo $mom_transport2 ?></td>
                                    </tr>
                                    <tr>
                                        <td>Distance from home(km)</td>
                                        <td><?php echo $mom_distance1 ?></td>
                                        <td><?php echo $mom_distance2 ?></td>
                                    </tr>
                                    <tr>
                                        <td>Time taken to reach</td>
                                        <td><?php echo $mom_eme_time1 ?></td>
                                        <td><?php echo $mom_eme_time2 ?></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="TwoColumnSec2">
                            <div class="MotherCardTableTitles">
                                <h3>Attendance at antenatal classes</h3>
                            </div>
                            <div class="AttendanceAtAntenatalClasses">
                                <table class="MotherCardTables">
                                    <tr>
                                        <th>Session</th>
                                        <th>Date</th>
                                        <th>Husband</th>
                                        <th>Wife</th>
                                        <th>Other</th>
                                        <th>Signature</th>
                                    </tr>
                                    <?php
                                        $sql = "SELECT * FROM mcard_attendance WHERE mom_id = '$mom_id'";
                                        $result = $con->query($sql);
                                        if($result->num_rows > 0)
                                        {
                                            while($row=mysqli_fetch_assoc($result)){
                                                $mom_antenatal_id = $row['antenatal_id'];
                                                $mom_antenatal_date = $row['date'];
                                                $mom_antenatal_husband = $row['husband'];
                                                $mom_antenatal_wife = $row['wife'];
                                                $mom_antenatal_other = $row['other'];
                                                $mom_antenatal_sign= $row['sign'];
                                    
                                                $output = "<tr>
                                                    <td>$mom_antenatal_id</td>
                                                    <td>$mom_antenatal_date</td>
                                                    <td>$mom_antenatal_husband</td>
                                                    <td>$mom_antenatal_wife</td>
                                                    <td>$mom_antenatal_other</td>
                                                    <td>$mom_antenatal_sign</td>
                                                    </tr>";
                                                echo $output;
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="TwoColumnSection"> <!--when a section has only one table, use this class-->
                        <div class="TwoColumnSec1">
                            <div class="MotherCardTableTitles">
                                <h3>IEC Material</h3>
                            </div>
                            <div class="IEC_Material">
                                <table class="MotherCardTables">
                                    <tr>
                                        <td>Prenatal ployband book</td>
                                        <td><?php echo $mom_prenatal_book ?></td>
                                    </tr>
                                    <tr>
                                        <td>The book on breastfeeding</td>
                                        <td><?php echo $mom_breastfeedingbook ?></td>
                                    </tr>
                                    <tr>
                                        <td>Books on early childhood development</td>
                                        <td><?php echo $mom_childdev ?></td>
                                    </tr>
                                    <tr>
                                        <td>Family planning methods</td>
                                        <td><?php echo $mom_familyplaning ?></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="TwoColumnSec2">
                            <div class="MotherCardTableTitles">
                                <h3>Family Planning</h3>
                            </div>
                            <div class="FamilyPlanning">
                                <table class="MotherCardTables">
                                    <tr>
                                        <td>Date of counselling</td>
                                        <td><?php echo $mom_counselldate ?></td>
                                    </tr>
                                    <tr>
                                        <td>Chosen method</td>
                                        <td><?php echo $mom_planmethod ?></td>
                                    </tr>
                                    <tr>
                                        <td>Reason for not using a method</td>
                                        <td><?php echo $mom_planreason ?></td>
                                    </tr>
                                    <tr>
                                        <td>Consent from sign date</td>
                                        <td><?php echo $mom_plansigneddate ?></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="OneColumnSection">
                        <div class="MotherCardTableTitles">
                            <h3>Referrals</h3>
                        </div>
                        <div class="Referrals">
                            <table class="MotherCardTables">
                                <tr>
                                    <td>txt</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="MotherCardButtonSet">
        <a href="#"><button class="PrintBtn">Print</button></a>
        <a href="motherCardPage2.php"><button class="BackBtn">Back</button></a>
        </div>
    </div>
</body>
</html>
<?php //include "../../Assets/Includes/footer_pages.php"; ?>
<?php }else{
    header("Location: ../../mainLogin.php");
} ?>