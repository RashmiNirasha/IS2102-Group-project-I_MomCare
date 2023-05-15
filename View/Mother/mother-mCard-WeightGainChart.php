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
    <title>Weight Gain Chart</title>
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
    ?>
    <div class="mom-container">
        <div class="OneColumnSection"> <!--when a section has only one table, use this class-->
            <div class="MotherCardTableTitles"><h3>Weight Gain Chart</h3></div>
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
                                    function validateForm() {
                                        var field1 = document.getElementsByName('poa_weeks')[0].value;
                                        var field2 = document.getElementsByName('weight')[0].value;

                                        if (field1 === '' || field2 === '') {
                                            alert('Please fill in all fields');
                                            return false; // Prevent form submission
                                        }

                                        // Form is valid, allow submission
                                        return true;
                                    }
                                </script>

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
        </div>
    </div>
</body>
</html>

<?php
 } else {
    header("Location: ../../mainLogin.php");
     exit();
}?>