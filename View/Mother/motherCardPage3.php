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
    <style><?php include "../../Assets/css/style-common.css" ?></style>
</head>
<body>
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
                                        <tr>
                                            <th>Weight Gain</th>
                                            <td><label for="weight_gain"></label></td>
                                        </tr>
                                        <tr>
                                        <td><input type="submit" value="Calculate_WG"></td>
                                        <td><input type="reset" value="Reset"></td>
                                        </tr>
                                    </table>
                                    <input type="hidden" id="mom_id" name="mom_id" value="<?php echo $mom_id; ?>">
                                </form>
                                <div class="grid-3" id="chart">
                                    <h3>CHARTS</h3>
                                    <div class="boxchart"><canvas id="myChart"></canvas>
                                    <button id="showDataBtn">Age-BMI</button>
                                    <button id="showDataBtn2">Age-Height</button>
                                    <button id="showDataBtn3">Age-Weight</button>
                                    </div>
                                </div>

                                <script>
                                    //set up block 
                                    const age = <?php echo json_encode($age); ?>;
                                    const height = <?php echo json_encode($height); ?>;
                                    const weight = <?php echo json_encode($weight); ?>;
                                    const bmi = <?php echo json_encode($bmi); ?>;

                                    const data= {
                                        labels: <?php echo json_encode($age); ?>, // Modify labels to use age values from the table
                                        datasets: [{
                                            label: 'height',
                                            data: height,
                                            backgroundColor: ['rgba(153, 102, 255, 0.5)'],
                                            fill: true ,
                                            borderColor: ['rgba(255, 99, 132, 1)'],
                                            borderWidth: 1}]
                                        };

                                    const config = {
                                    type: 'line',
                                    data: data,
                                    options: {
                                        responsive: true,
                                        scales: {
                                        x: {
                                            title: { display: true, text: 'Age'}},
                                        y: {
                                            title: {display: true, text: 'Height (cm)'},
                                            beginAtZero: true
                                        }
                                        }
                                    }
                                    };

                                    const myChart = new Chart(document.getElementById('myChart'), config);

                                    document.getElementById('showDataBtn').addEventListener('click', function() {
                                    myChart.data.datasets[0].data = bmi;
                                    myChart.data.datasets[0].label = 'Body Mass Index';
                                    myChart.options.scales.y.title.text = 'BMI';
                                    myChart.update();
                                    });

                                    document.getElementById('showDataBtn2').addEventListener('click', function() {
                                    myChart.data.datasets[0].data = height;
                                    myChart.data.datasets[0].label = 'height (cm)';
                                    myChart.options.scales.y.title.text = 'Height (cm)';
                                    myChart.update();
                                    });

                                    document.getElementById('showDataBtn3').addEventListener('click', function() {
                                    myChart.data.datasets[0].data = weight;
                                    myChart.data.datasets[0].label = 'weight (kg)';
                                    myChart.options.scales.y.title.text = 'Weight (kg)';
                                    myChart.update();
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