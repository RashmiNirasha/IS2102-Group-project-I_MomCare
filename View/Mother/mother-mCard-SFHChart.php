<?php 
session_start();
include "../../Assets/Includes/header_pages.php";
include '../../Config/dbConnection.php';
$mom_id = $_GET['mom_id'];

if (isset($_SESSION['email']) && isset($_SESSION['id'])) { ?>
<?php 
    include "../../Config/mother-mcardPage1.inc.php";
    include "../../Assets/Includes/sideNav-mother.php";    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SFH Chart</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style><?php include "../../Assets/css/style-common.css" ?></style>
</head>
<body>
    <?php 
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
    
    <div class="mom-container">
        <div class="OneColumnSection"> <!--when a section has only one table, use this class-->
            <div class="MotherCardTableTitles"><h3>SFH Chart</h3></div>
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
    </div>
</body>
</html>

<?php
 } else {
    header("Location: ../../mainLogin.php");
     exit();
}?>