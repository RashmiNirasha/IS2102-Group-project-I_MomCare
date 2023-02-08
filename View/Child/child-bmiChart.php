<?php
include "../../Assets/Includes/heading.php";
include "../../Config/dbConnection.php";

if (isset($_POST['submit'])) {
    // Store values from the form
    $date = $_POST["date"];
    $gender = $_POST["gender"];
    $age = $_POST["age"];
    $height = $_POST["height"];
    $weight = $_POST["weight"];

    // Calculate BMI value
    $bmi = $weight / ($height * $height);

    // Prepare the insert statement
    $stmt = $con->prepare("INSERT INTO bmi_values (date, gender, age, height, weight, bmi) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssissd", $date, $gender, $age, $height, $weight, $bmi);

    if ($stmt->execute()) {
        echo "Values stored successfully in the database.";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close connection
    $con->close();

    // Generate chart using the values from the database
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
            <h1>Body Mass Index Calculator</h1>
            <a href="#">
                <span class="material-icons">notifications</span>
            </a>
        </div>
<div class="Bmi-container">

<form class="form" id="form" action=" " method="POST">
<div class="Bmi-cont-1">
  <table>
    <tr>
      <td>Date</td>
      <td><input type="date" class="text-input" id="date" autocomplete="off" required/>
    </tr>
    <tr>
      <td>Gender</td>
      <td><label for="Female">Female</label><input type="radio" name="radio" id="f"></td>
      <td><label for="male">Male</label><input type="radio" name="radio" id="m"></td>

    </tr>
    <tr>
      <td>Age</td>
      <td><input type="text" class="text-input" id="age" autocomplete="off" required/></td>
    </tr>
    <tr>
      <td>Height in m</td>
      <td><input type="text" class="text-input" id="height" autocomplete="off" required/></td></td>
    </tr>
    <tr>
      <td>Weight in kg</td>
      <td><input type="text" class="text-input" id="weight" autocomplete="off" required/></td>
    </tr>
  </table>
</div>
<div class="Bmi-cont-2">
<button type="submit" id="submit">Calculate</button>
</div>
</form>
</div>
  <div id="curve_chart" style="width: 900px; height: 500px">
  <!-- use funtion drawchart -->

                       

</div>
</body>
</html>
