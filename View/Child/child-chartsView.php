<?php 
session_start();
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

<?php 
$child_id=$_GET['child_id'];

  $sql = "select * from child_bmi_values where child_id = '$child_id' order by age asc";
  $result = mysqli_query($con, $sql);
  $resultCheck = mysqli_num_rows($result);
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
    }
    unset($result);
  }else{
    echo "No records matching your query were found.";
  }?>

<div class="grid-main">
  <!-- section 01 -->
   <div class= "grid-1" id="calculator">
  
  <div class="form-container">
  <h3>BMI CALCULATOR</h3>
  <form class="calculator" action="../../Config/child-bmi_calculator.php" method="post">
          <label for = "child_id" hidden ></label ><?php $child_id = $_GET['child_id']; ?>
          <input type="hidden" id="child_id" name="child_id" value="<?php echo $child_id; ?>">
          <label for="age">Age :</label>
          <select id="age" name="age" required>
            <option value="">Select age</option> <?php for ($i = 1; $i <= 20; $i++) { ?>
           <option value="<?php echo $i . 'year'; ?>"><?php echo $i . ' year'; ?></option><?php } ?>
          </select>
      
          <label for="height">Height (in centimeters):</label>
          <input type="text" id="height" name="height">
          <label for="weight">Weight (in kilograms):</label>
          <input type="text" id="weight" name="weight">
          <input type="submit" value="Calculate BMI">
          <input type="reset" value="Reset">
  </form> 
  </div>

  <div class="grid-2" id="result">
   <p>Your child's current BMI value is <?php echo end($bmi); ?></p>
   <p><?php 
              $current_bmi = end($bmi);
              if ($current_bmi < 18.5) {
                echo "Your child is underweight.";
              } else if ($current_bmi >= 18.5 && $current_bmi <= 24.9) {
                echo "Your child is of normal weight.";
              } else if ($current_bmi >= 25 && $current_bmi <= 29.9) {
                echo "Your child is overweight.";
              } else {
                echo "Your child is obese.";
              }
            ?></p>

   

  </div>

  </div>

        <div class="grid-3" id="chart">
        <h3>CHARTS</h3>

        <div class="boxchart"><canvas id="myChart"></canvas>
      
          <button id="showDataBtn">Age-BMI</button>
          <button id="showDataBtn2">Age-Height</button>
          <button id="showDataBtn3">Age-Weight</button>
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
        backgroundColor: ['rgba(255, 99, 132, 1)'],
        
        borderColor: ['rgba(255, 99, 132, 2)'],
        borderWidth: 1}]
    };

const config = {
  type: 'line',
  data: data,
  options: {
    backgroundColor: '#e89ce0',
    scales: {
      x: {
        title: { display: true, text: 'Age'}},
      y: {
        title: {display: true, text: 'Height'},
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
  myChart.data.datasets[0].label = 'height(centimeters)';
  myChart.options.scales.y.title.text = 'Height';
  myChart.update();
});

document.getElementById('showDataBtn3').addEventListener('click', function() {
  myChart.data.datasets[0].data = weight;
  myChart.data.datasets[0].label = 'weight(kilograms)';
  myChart.options.scales.y.title.text = 'Weight';
  myChart.update();
});

</script>
</body>
</html>