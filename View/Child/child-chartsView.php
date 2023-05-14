<?php 
session_start();
if (isset($_SESSION['email']) && isset($_SESSION['id'])) { 

include("../../Config/dbConnection.php") ?>

<?php include "../../Assets/Includes/header_pages.php" ?>

<!DOCTYPE html>
<html>
<head>
<title>Child Charts</title>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<style><?php include "../../Assets/css/Style-child.css";?></style>
</head>
<body>
<button class="goBackBtn" onclick="history.back()">Go back</button>


<div class="top-button" >
<a href="child-childDashboard.php?child_id=<?php echo $_GET['child_id']; ?>"><button class="goBackBtn">Go back</button></a>
        </div>
        
<?php 
$child_id=$_GET['child_id'];

$sql = "SELECT * FROM child_bmi_values WHERE child_id = '$child_id' ORDER BY 
        CASE 
            WHEN age = '1' THEN 1 
            WHEN age = '2' THEN 2
            WHEN age = '3' THEN 3
            WHEN age = '4' THEN 4
            WHEN age = '5' THEN 5
            WHEN age = '6' THEN 6
            WHEN age = '7' THEN 7
            WHEN age = '8' THEN 8
            WHEN age = '9' THEN 9
            WHEN age = '10' THEN 10
            WHEN age = '11' THEN 11
            WHEN age = '12' THEN 12
            WHEN age = '13' THEN 13
            WHEN age = '14' THEN 14
            WHEN age = '15' THEN 15
            WHEN age = '16' THEN 16
            WHEN age = '17' THEN 17
            WHEN age = '18' THEN 18
            WHEN age = '19' THEN 19
            WHEN age = '20' THEN 20
        END";
  $result = mysqli_query($con, $sql);
  $resultCheck = mysqli_num_rows($result);
  $current_bmi = 0;
  if($resultCheck > 0){
    $age = array();
    $height = array();
    $weight = array();
    $bmi = array();
    $current_bmi = end($bmi);

    while($row = mysqli_fetch_assoc($result)){
      $age[] = $row["age"];
      $height[] = $row["height"];
      $weight[] = $row["weight"];
      $bmi[] = $row["bmi"];
      $current_bmi = end($bmi);
    }
    if (!empty($bmi)) {
      $current_bmi = end($bmi);
    } else {
      $current_bmi = 0;
    } 

    unset($result);
  }else{
    echo "No records matching your query were found.";
  }?>

<div class="child-container">
  <h2>BMI Calculator</h2>
  <div class="OneColumnSection"> <!--when a section has only one table, use this class-->
                        <div class="MotherCardTableTitles"><h3> BMI Test  </h3></div>
                        <div class="MotherGeneralDetails">
                        <form action="../../Config/child-bmi_calculator.php" method="post">
                        <table class="MotherCardTables">
                        <tr>
                        <th><label for="age">Age :</label></th>
                        <td><select id="age" name="age" required>
                        <option value="">Select age</option> <?php for ($i = 1; $i <= 20; $i++) { ?>
                        <option value="<?php echo $i ; ?>"><?php echo $i ; ?></option><?php } ?>
                        </select></td>
                        </tr>
                        <tr>
                        <th><label for="height">Height (in centimeters):</label></th>
                        <td><input type="text" id="height" name="height"></td>
                        </tr>
                        <tr>
                        <th><label for="weight">Weight (in kilograms):</label></th>
                        <td><input type="text" id="weight" name="weight"></td>
                        </tr>
                        <tr>
                        <td><input type="submit" value="Calculate BMI"></td>
                        <td><input type="reset" value="Reset"></td>
                        </tr>
                        </table>
                        <label for = "child_id" hidden ></label ><?php $child_id = $_GET['child_id']; ?>
                        <input type="hidden" id="child_id" name="child_id" value="<?php echo $child_id; ?>">
    </form>

  <div class="grid-2" id="result">
   <p>Your Child's current BMI value is <?php echo $current_bmi; ?></p>
   <p><?php 
              if ($current_bmi < 18.5) {
                echo "Your Child is underweight.";
              } else if ($current_bmi >= 18.5 && $current_bmi <= 24.9) {
                echo "Your Child is of normal weight.";
              } else if ($current_bmi >= 25 && $current_bmi <= 29.9) {
                echo "Your Child is overweight.";
              } else {
                echo "Your Child is obese.";
              }
            ?></p>
  </div>

    <div class="grid-3" id="chart">
        <h3>CHARTS</h3>
        <div class="boxchart"><canvas id="myChart"></canvas>
          <button id="showDataBtn">Age-BMI</button>
          <button id="showDataBtn2">Age-Height</button>
          <button id="showDataBtn3">Age-Weight</button>
        </div>
            <!-- </div> -->
    </div>
  <!-- </div> -->
</div>
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
        backgroundColor: ['rgba(255, 99, 132, 0.2)'],
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
</body>
</html>
<?php } else {
    header("Location: ../../mainLogin.php");
    exit();}
?>