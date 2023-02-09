<?php
include "../../Assets/Includes/heading.php";
include "../../Config/dbConnection.php";

if (isset($_POST['submit'])) {
    // Store values from the form
   
    $age = $_POST["age"];
    $height = $_POST["height"];
    $weight = $_POST["weight"];

    // Calculate BMI value
    $bmi = $weight / ($height * $height)*10000;

    // Prepare the insert statement
    $sql = "INSERT INTO bmi_values (age, height, weight, bmi) VALUES (?, ?, ?, ?)";
  $stmt = mysqli_prepare($con, $sql);
  mysqli_stmt_bind_param($stmt, "iddd", $age, $height, $weight, $bmi);

  // Execute the insert statement
  if (mysqli_stmt_execute($stmt)) {
    echo "BMI values inserted successfully";
  } else {
    echo "Error inserting BMI values: " . mysqli_error($con);
  }

  // Close the connection
  mysqli_close($con);
  }

?>

<!DOCTYPE html>
<html>
<head>
<Link Href="Https://Fonts.Googleapis.Com/Css?Family=Quicksand:400,700" Rel="Stylesheet">
<style><?php include "../../Assets/css/style-common.css";?></style>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
  google.charts.load('current', {'packages':['corechart']});
  google.charts.setOnLoadCallback(drawChart);

  function drawChart() {
    // Retrieve values from the database
    <?php
      $sql = "SELECT * FROM bmi_values";
      $result = mysqli_query($con, $sql);

      $data = array();
      $data[] = ['Age', 'BMI'];

      while ($row = mysqli_fetch_assoc($result)) {
        $data[] = [intval($row['age']), floatval($row['bmi'])];
      }
    ?>

    var data = google.visualization.arrayToDataTable(<?php echo json_encode($data); ?>);

    var options = {
      title: 'BMI Chart',
      curveType: 'function',
      legend: { position: 'bottom' }
    };

    var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

    chart.draw(data, options);
  }
</script>
</head>
<body>
<div class="content">
        <!-- topic and notifications -->
        <div class="heading">
            <h1>Body Mass Index Chart</h1>
            <a href="#">
                <span class="material-icons">notifications</span>
            </a>
        </div>

</br>
  <div id="curve_chart" style="width: 900px; height: 500px;margin-left: 300px ">
  <!-- use funtion drawchart -->

                       

</div>
</body>
</html>
